<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VideoList;
use App\Models\LearnCategory;
use App\Http\Requests\AdminVideoRoles;

class AdminVideoListController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth', 'clearance']);
        $this->middleware('auth');
    }   
    public function index()
    {
        // all video
        $items = VideoList::all()->paginate(20)->sortDesc();
        $category = LearnCategory::where('status','active')->get();
        return view('admin.video.index', compact('items', 'category'), ['title' => 'دسته بندی های ویدیو های آموزشی']);
    }

    public function create()
    {
        $category = LearnCategory::where('status','active')->get();
        return view('admin.video.create', compact('category'), ['title' => 'ایجاد دسته بندی ویدیو های آموزشی']);

    }

    public function store(Request $request) // AdminVideoRole <== validations
    {
        if (LearnCategory::findOrFail($request->cat_id)) {
            $item = VideoList::create([
                "status" => $request->status,
                "cat_id" => $request->cat_id,
                "name" => $request->name,
                "description" => $request->description,
                "video" => $request->video,
                // "image" => $request->image,
                "sort" => $request->sort
            ]);
            return redirect()->route('admin-video.index');
        }
        return back();
    }

    public function show($id)
    {
        $item     = VideoList::findOrFail($id);
        $category = LearnCategory::findOrFail($item->cat_id);
        return view('admin.video.show', compact('item', 'category'), ['title' => 'دسته بندی ویدیو های آموزشی']);  
    }

    public function edit($id)
    {
        $categories= LearnCategory::where('status','active')->get();
        $item = VideoList::findOrFail($id);

        return view('admin.video.edit', compact('item', 'categories'), ['title' => 'اصلاح دسته بندی ویدیو های آموزشی']);
    }

    public function update(Request $request, $id) // AdminVideoRoles <== validations
    {
        $item = VideoList::findOrFail($id);
        $item->status = $request->status;
        $item->cat_id = $request->cat_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->video = $request->video;
            // "image" => $request->image,
        $item->sort = $request->sort;
        $item->update();
        return redirect()->route('admin-video.index');
    }

    public function destroy($id)
    {
        VideoList::findOrFail($id)->delete();
        return redirect()->route('admin-video.index');
    }
}
