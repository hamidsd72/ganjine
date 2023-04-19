<?php

namespace App\Http\Controllers\User;

use App\Menu;
use App\Models\Learn;
use App\Models\LearnCategory;
use App\Http\Controllers\Controller;

class LearnController extends Controller
{

    public function index()
    {
        $page   = Menu::find(8);
        $items  = LearnCategory::orderBy('sort')->get();
        return view('front.learn.index',compact('items','page'), ['title' => 'آموزش ها']);
    }

    public function show($id, $slug)
    {
        $page   = Menu::find(8);
        $items  = Learn::where('category_id', $id)->orderBy('sort')->get();
        return view('front.learn.show',compact('items','page'), ['title' => str_replace('-',' ',$slug)]);
    }

}
