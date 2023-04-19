<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GalleryList;
use App\Models\GalleryCategory;
use App\Http\Requests\AdminVideoRoles;

class AdminGalleryListController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth', 'clearance']);
        $this->middleware('auth');
    }
    public function index()
    {
        // all video
        $items = GalleryList::all()->paginate(20)->sortDesc();
        $category = GalleryCategory::where('status','active')->get();
        return view('admin.gallery.index', compact('items', 'category'), ['title' => 'دسته بندی های ویدیو های آموزشی']);
    }

    public function create()
    {
        $category = GalleryCategory::where('status','active')->get();
        return view('admin.gallery.create', compact('category'), ['title' => 'ایجاد دسته بندی ویدیو های آموزشی']);

    }

    public function store(Request $request) // AdminVideoRole <== validations
    {
        if (GalleryCategory::findOrFail($request->cat_id)) {
            $item = GalleryList::create([
                "status" => $request->status,
                "cat_id" => $request->cat_id,
                "name" => $request->name,
                "description" => $request->description,
                "video" => $request->video,
                // "image" => $request->image,
                "sort" => $request->sort
            ]);
            return redirect()->route('admin-gallery.index');
        }
        return back();
    }

    public function show($id)
    {
        $item     = GalleryList::findOrFail($id);
        $category = GalleryCategory::findOrFail($item->cat_id);
        return view('admin.gallery.show', compact('item', 'category'), ['title' => 'دسته بندی ویدیو های آموزشی']);
    }

    public function edit($id)
    {
        $category = GalleryCategory::where('status','active')->get();
        $item = GalleryList::findOrFail($id);
        return view('admin.gallery.edit', compact('item', 'category'), ['title' => 'اصلاح دسته بندی ویدیو های آموزشی']);
    }

    public function update(Request $request, $id) // AdminVideoRoles <== validations
    {
        $item = GalleryList::findOrFail($id);
        $item->status = $request->status;
        $item->cat_id = $request->cat_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->video = $request->video;
        // "image" => $request->image,
        $item->sort = $request->sort;
        $item->update();
        return redirect()->route('admin-gallery.index');
    }

    public function destroy($id)
    {
        GalleryList::findOrFail($id)->delete();
        return redirect()->route('admin-gallery.index');
    }
}
