<?php

namespace App\Http\Controllers\User;

use App\Models\Learn;
use App\Models\LearnCategory;
use App\Http\Controllers\Controller;

class LearnController extends Controller
{

    public function index()
    {
        $items  = LearnCategory::orderBy('sort')->get();
        return view('front.learn.index',compact('items'), ['title' => 'آموزش ها']);
    }

    public function show($id)
    {
        $items  = Learn::where('category_id', $id)->orderBy('sort')->get();
        return view('front.learn.show',compact('items'), ['title' => 'آموزش ها']);
    }

}
