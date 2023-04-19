<?php

namespace App\Http\Controllers\User;

use App\Faq;
use App\Models\FaqCat;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{

    public function index()
    {
        $items=FaqCat::where('status','active')->orderBy('id','DESC')->get();
        return view('front.faq.index',compact('items'), ['title' => __('text.page_name.faq')]);
    }

    public function show($id)
    {
        $items=FaqCat::where('status','active')->orderBy('id','DESC')->get();
        return view('front.faq.show',compact('items'), ['title' => __('text.page_name.faq')]);
    }

}
