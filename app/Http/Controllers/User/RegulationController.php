<?php

namespace App\Http\Controllers\User;

use App\Menu;
use App\Models\LearnCategory;
use App\Http\Controllers\Controller;

class RegulationController extends Controller
{

    public function index()
    {
        $page   = Menu::find(16);
        $items  = $page->items;
        return view('front.regulation.index',compact('items','page'), ['title' => $page->name]);
    }


}
