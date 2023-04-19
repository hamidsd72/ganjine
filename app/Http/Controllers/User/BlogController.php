<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\LikePost;

class BlogController extends Controller
{

    public function index($type)
    {
        if( $type=='all' )          $title = __('text.page_name.blog');
        elseif( $type=='news' )     $title = __('text.page_name.news');
        elseif( $type=='article' )  $title = __('text.page_name.article');
        
        $items = Blog::where('status','active');
        if ($type != 'all') $items = $items->where('type', $type);
        
        $lasts      = $items->orderByDesc('created_at')->take(2)->get(['id']);
        $items      = $items->orderBy('sort','desc')->paginate(12);
        $last_items = Blog::where('status','active')->orderByDesc('created_at')->take(4)->get();
        // return view('front.blog.index',compact('type','items','last_items'));
        return view('front.blog.index',compact('type','items','last_items'));
    }
    public function show($slug)
    {
        // if(app()->getLocale()=='fa') $item = Blog::where('slug',$slug)->first();
        // else $item = Blog::where('slug_en',$slug)->first();
        $item       = Blog::where('slug',$slug)->first();
        if(!$item) return redirect()->route('user.index');

        $last_items = Blog::where('status','active')->where('type', $item->type)->where('id','!=',$item->id)->orderBy('id','desc')->take(4)->get();
        $item->seen +=1;
        $comments   = Comment::where('status','active')->where('item_id' ,$item->id)->get();
        $item->update();
        $like       = LikePost::where('value', 'like')->where('comment_id', $item->id)->count();
        $dislike    = LikePost::where('value', 'dislike')->where('comment_id', $item->id)->count();
        return view('front.blog.show',compact('item','last_items','comments','like','dislike'), ['title' => set_lang($item,'title',app()->getLocale())]);
    }

    public function comment($id,Request $request)
    {
        if ( $request->captcha != session('captcha_code') ) return redirect()->back()->withInput()->with([ 'status' => 'danger', 'message' => 'لطفا کد امنیتی صحیح نیست', ]);
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'email' => 'required',
            'text'  => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                "err_message" => __('text.err_field')
            ])->withErrors($validator)->withInput();
        }

        $user_id    = 0;
        if( auth()->check() ) $user_id = auth()->user()->id;

        try {
            Comment::create([
                'user_id'   => $user_id,
                'item_id'   => $id,
                'name'      => $request->name,
                'email'     => $request->email,
                'website'   => $request->website,
                'text'      => $request->text,
                'type'      => 'blog',
                'lang'      => app()->getLocale(),
            ]);
            return redirect()->back()->with([ 'status' => 'success', 'message' => 'نظر با موفقیت ثبت شد', ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([ 'status' => 'danger', 'message' => 'مشگل در ایجاد نظر, لطفا مجددا افدام کنید', ]);
        }
    }

}
