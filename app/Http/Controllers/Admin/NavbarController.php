<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Navbar;
use App\Setting;
use App\Photo;

class NavbarController extends Controller
{
    
    public function controller_paginate() {
        return Setting::firstOrFail('paginate')->paginate;
    }

    public function controller_title($type) {
        if ($type == 'sum') return 'آیتم های نوبار ';
        elseif ('single') return 'آیتم نوبار';
    }    

    public function __construct()
    {
        $this->middleware('auth');
    }   

    public function index()
    {   
        $items      = Navbar::orderBy('sort')->get();
        return view('admin.navbar.index', compact('items'), ['title' => $this->controller_title('sum')]);
    }

    public function show($id)
    {   
        $items      = Navbar::where('parrent_id', $id)->orderBy('sort')->get();
        return view('admin.navbar.index', compact('items','id'), ['title' => $this->controller_title('sum')]);
    }

    public function create($id=null)
    {
        $category   = Navbar::where('parrent_id', null)->where('status','active')->get();
        return view('admin.navbar.create', compact('category','id'), ['title' => $this->controller_title('single')]);

    }

    public function store(Request $request)
    {
        $item = Navbar::create([
            "title"         => $request->title,
            "link"          => $request->link,
            "link_type"     => $request->link_type,
            "parrent_id"    => $request->parrent_id,
            "sort"          => $request->sort,
        ]);

        if ($item) {
            if ($request->hasFile('pic')) {
                $photo  = new Photo();
                $photo->path = file_store($request->pic, 'asset/uploads/navbar/photos/', 'photo-');
                $item->photo()->save($photo);
            }
        }
        return redirect()->route('admin-navbar.index');
    }

    public function edit($id)
    {
        $category   = Navbar::where('status','active')->get();
        $item       = Navbar::findOrFail($id);
        return view('admin.navbar.edit', compact('item', 'category'), ['title' => $this->controller_title('single')]);
    }

    public function update(Request $request, $id)
    {
        $item = Navbar::findOrFail($id);
        $item->title        = $request->title;
        $item->link         = $request->link;
        $item->link_type    = $request->link_type;
        $item->parrent_id   = $request->parrent_id;
        // $item->status       = $request->status;
        $item->sort         = $request->sort;
        $item->update();

        try {
            if ($request->hasFile('pic')) {
                if ($item->photo) {
                    \File::delete($item->photo->path);
                    $item->photo->delete();
                }
                $photo = new Photo();
                $photo->path = file_store($request->pic, 'asset/uploads/navbar/photos/', 'photo-');
                $item->photo()->save($photo);
            }
            return redirect()->route('admin-navbar.index');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $item   = Navbar::findOrFail($id);
        if ($item->child->count()) return redirect()->route('admin-navbar.index');
        if ($item->photo) {
            \File::delete($item->photo->path);
            $item->photo->delete();
        }
        $item->delete();
        return redirect()->route('admin-navbar.index');
    }
}
