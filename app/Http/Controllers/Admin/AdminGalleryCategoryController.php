<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Http\Requests\AdminLearnCategoryRoles;
use App\Library;


class AdminGalleryCategoryController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth', 'clearance']);
        $this->middleware('auth');
    }

    public function index()
    {
        $items = GalleryCategory::all()->paginate(20)->sortDesc();
        return view('admin.gallery_category.index', compact('items'), ['title' => 'دسته بندی های ویدیو های آموزشی']);
    }

    public function create()
    {
        return view('admin.gallery_category.create', ['title' => 'ایجاد دسته بندی ویدیو های آموزشی']);
    }

    public function store(Request $request) // AdminLearnCategoryRoles <== validations
    {
        $item = GalleryCategory::create($request->all());
        return redirect()->route('admin-gallery-category.index');
    }

    public function show($id)
    {
        $item = GalleryCategory::findOrFail($id);
        return view('admin.gallery_category.show', compact('item'), ['title' => 'دسته بندی ویدیو های آموزشی']);
    }

    public function edit($id)
    {
        $item = GalleryCategory::findOrFail($id);
        return view('admin.gallery_category.edit', compact('item'), ['title' => 'اصلاح دسته بندی ویدیو های آموزشی']);
    }

    public function update(Request $request, $id) // AdminLearnCategoryRoles <== validations
    {
        $item = GalleryCategory::findOrFail($id);
        $item->sort = $request->sort;
        $item->status = $request->status;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->update();
        return redirect()->route('admin-gallery-category.index');
    }

    public function photos($id)
    {
        $item = GalleryCategory::findOrFail($id);

        return view('admin.gallery_category.photos.index', compact('item'), ['title' => 'دسته بندی ویدیو های آموزشی']);
    }


    public function store_photos(Request $request,$id) // AdminLearnCategoryRoles <== validations
    {

        $item = GalleryCategory::findOrFail($id);

        if ($request->hasFile('photo')) {
            foreach ($request->photo as $library) {
                $gallery = new Library();
                $gallery->path = file_store($library, 'asset/uploads/gallery/libraries/', 'photo-');
                $item->library()->save($gallery);
            }
        }

        $item->save();
        return redirect()->route('admin-gallery-category.photos',$id);
    }

    public function destroy($id)
    {
        GalleryCategory::findOrFail($id)->delete();
        return redirect()->route('admin-gallery-category.index');
    }
}
