<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Menu;
use App\Models\Learn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\LikePost;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        if ($request->type=='blog') {
            $type       = 'all';
            $title      = __('text.page_name.blog');
            $items      = Blog::orWhere('title', 'like', '%'.$request->search.'%')->orWhere('short_text', 'like', '%'.$request->search.'%')->orWhere('text', 'like', '%'.$request->search.'%');
            $items      = $items->where('status','active');
            $lasts      = $items->orderByDesc('created_at')->take(2)->get(['id']);
            $items      = $items->orderByDesc('sort')->paginate(12);
            $last_items = Blog::where('status','active')->orderByDesc('created_at')->take(4)->get();
            return view('front.blog.index',compact('type','items','last_items'));
        } elseif ($request->type=='learn') {

            $page       = Menu::where('slug', 'آموزش-ها')->first();
            $items      = Learn::orWhere('name', 'like', '%'.$request->search.'%')->orWhere('description', 'like', '%'.$request->search.'%')->orderBy('sort')->get();
            return view('front.learn.show',compact('items','page'), ['title' => 'آموزش ها']);
        }

        return abort('503');
    }
    
}
