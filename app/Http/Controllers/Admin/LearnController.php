<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Learn;
use App\Models\LearnCategory;

class LearnController extends Controller
{
    public function controller_paginate() {
        return Setting::firstOrFail('paginate')->paginate;
    }

    public function controller_title($type) {
        if ($type == 'sum') return 'آموزش ';
        elseif ('single') return 'آموزش';
    }    

    public function __construct()
    {
        $this->middleware('auth');
    }   

    public function index()
    {   
        $items  = Learn::orderByDesc('id')->paginate($this->controller_paginate());
        return view('admin.learn.index', compact('items'), ['title' => $this->controller_title('sum')]);
    }

    public function create($id=null)
    {
        $category = LearnCategory::where('status','active')->get();
        return view('admin.learn.create', compact('category','id'), ['title' => $this->controller_title('single')]);

    }

    public function store(Request $request)
    {
        if (LearnCategory::findOrFail($request->cat_id)) {
            $item   = Learn::create([
                "name"          => $request->name,
                "description"   => $request->description,
                "category_id"   => $request->cat_id,
                "link"          => $request->link,
            ]);
            return redirect()->route('admin-learn.show',$item->category_id);
        }
        return back();
    }

    public function show($id)
    {
        $page   = \App\Menu::where('slug','آموزش-ها')->first();
        $items  = Learn::where('category_id', $id)->get();
        return view('admin.learn.index', compact('items','id','page'), ['title' => $this->controller_title('single')]);  
    }

    public function edit($id)
    {
        $category = LearnCategory::where('status','active')->get();
        $item = Learn::findOrFail($id);
        return view('admin.learn.edit', compact('item', 'category'), ['title' => $this->controller_title('single')]);
    }

    public function update(Request $request, $id)
    {
        $item = Learn::findOrFail($id);
        $item->name         = $request->name;
        $item->description  = $request->description;
        $item->category_id  = $request->cat_id;
        $item->sort         = $request->sort;
        $item->link         = $request->link;
        $item->update();
        return redirect()->route('admin-learn.show',$item->category_id);
    }

    public function destroy($id)
    {
        Learn::findOrFail($id)->delete();
        return redirect()->route('admin-learn.index');
    }
}
