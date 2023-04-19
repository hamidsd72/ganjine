<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Models\Lang;
use App\Models\ProductAttr;
use App\Photo;
use App\Library;
use App\Attribute;
use App\Models\ProductType;
use App\Models\ProductBrand;
use App\ProductCategory;
use App\Models\Project;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Create Function
    public function create()
    {

        return view('admin.project.create', ['title' => 'افزودن پروژه']);
    }

    // Store Function
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'text' => 'required',
        ]);
        if(Product::where('slug',$request->slug)->first())
        {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'عنوان تکراری می باشد'
            ])->withErrors($validator)->withInput();
        }
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.',
            ])->withErrors($validator)->withInput();
        }
        // try {
        $item = Project::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'text' => $request->text,
            'short_text' => $request->short_text,

        ]);

        if ($request->hasFile('photo')) {
            $photo = new Photo();
            $photo->path = file_store($request->photo, 'asset/uploads/product/photos/', 'photo-');
            $item->photo()->save($photo);
        }

        if ($request->hasFile('libraries')) {
            foreach ($request->libraries as $library) {
                $gallery = new Library();
                $gallery->path = file_store($library, 'asset/uploads/product/libraries/', 'photo-');
                $item->library()->save($gallery);
            }
        }

        $activity = new Activity();
        $activity->user_id = Auth::user()->id;
        $activity->type = 'store';
        $activity->text = ' پروژه : ' . '(' . $request->name . ')' . ' ثبت کرد';
        $item->activity()->save($activity);


        return redirect('admin/project-list')->with(['status' => 'success', "message" => 'پروژه با موفقیت ثبت گردید']);
        //} catch (\Exception $e) {
        //    return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        //}
    }

    // Edit Function
    public function edit($id)
    {
        $item = Project::find($id);

        return view('admin.project.edit', compact('item'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request, $id)
    {


        $item = Project::find($id);
        $old_title = $item->name;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'text' => 'required',

        ]);
        if(Product::where('slug',$request->slug)->where('id','!=',$item->id)->first())
        {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'عنوان تکراری می باشد'
            ])->withErrors($validator)->withInput();
        }
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger - 600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.',
            ])->withErrors($validator)->withInput();
        }

        try {
            $item->name = $request->name;
            $item->slug = $request->slug;
            $item->text = $request->text;
            $item->short_text = $request->short_text;


            if ($request->hasFile('photo')) {
                if ($item->photo) {
                    $old_path = $item->photo->path;
                    File::delete($old_path);
                    $item->photo->delete();
                }
                $photo = new Photo();
                $photo->path = file_store($request->photo, 'asset/uploads/product/photos/', 'photo-');
                $item->photo()->save($photo);
            }

            if ($request->hasFile('libraries')) {

                foreach ($request->libraries as $library) {
                    $gallery = new Library();
                    $gallery->path = file_store($library, 'asset/uploads/product/libraries/', 'photo-');
                    $item->library()->save($gallery);
                }
            }
            $item->save();
            if($item->langs)
            {
                foreach ($item->langs as $lang){
                    $lang->delete();
                }
            }
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' پروژه : ' . '(' . $old_title . ')' . ' ویرایش کرد ';
            $item->activity()->save($activity);
            return redirect('admin/project-list')->with(['status' => 'success', "message" => ' با موفقیت ویرایش شد. ']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index()
    {
        $items = Project::all();
        return view('admin.project.index', compact('items'), ['title' => 'پروژه ها']);
    }

    public function search_product(Request $request)
    {
        $items = Product::orderBy('id','desc');
        $category = ProductCategory::all();
        if ($request->id) {
            $items = $items->where('id', $request->id);
        }
        if ($request->name) {
            $items = $items->where('name', 'LIKE', "%$request->name%");
        }
        if ($request->category_id) {
            $items = $items->where('category_id', $request->category_id);
        }
        $items = $items->get();
        return view('admin.product.index', compact('items', 'category'), ['title' => 'جستجو محصولات']);
    }

    // Destroy Function
    public function destroy($id)
    {
        $item = Project::find($id);
        $old_title = $item->name;
        try {

            $item->delete();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = '  پروژه : ' . '(' . $old_title . ')' . ' حذف کرد';
            $item->activity()->save($activity);

            return redirect('admin/project-list')->with(['status' => 'success', "message" => ' با موفقیت حذف شد']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function destroy_gallery($id)
    {
        try {
            $item = Library::find($id);
            $item->delete();
            return redirect()->back()->with(['status' => 'success', "message" => 'با موفقیت حذف شد ']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Active Function
    public function active($type,$id)
    {
        $item = Product::find($id);
        $old_name = $item->name;
        $activity = new Activity();
        try {
            if($item->$type=='active')
            {
                $item->$type='pending';
                $item->update();
                $activity->user_id = Auth::user()->id;
                $activity->type = 'update';
                $activity->text = ' محصول : ' . '(' . $old_name . ')' . ' را غیرفعال کرد';
                $item->activity()->save($activity);
                return redirect()->back()->with(['status' => 'success', "message" => ' با موفقیت غیرفعال شد.']);
            }
            else
            {
                $item->$type='active';
                $item->update();
                $activity->user_id = Auth::user()->id;
                $activity->type = 'update';
                $activity->text = ' محصول : ' . '(' . $old_name . ')' . ' را فعال کرد';
                $item->activity()->save($activity);
                return redirect()->back()->with(['status' => 'success', "message" => ' با موفقیت فعال شد.']);
            }

        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }
    // Index Function
    public function index_attr($id)
    {
        $items = ProductAttr::where('product_id',$id)->get();
        $item=Product::find($id);
        return view('admin.product.attr.index', compact('items', 'id'), ['title' => 'ویژگی محصول '.$item->name]);
    }

    // Store Function
    public function store_attr(Request $request,$id)
    {

        $validator = Validator::make($request->all(), [

            'title' => 'required',
            'value' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.',
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = ProductAttr::create([
                'product_id' => $id,
                'title' => $request->title,
                'value' => $request->value,
            ]);

            store_lang($request,'p_attr',$item->id,['title','value']);

            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' ویژگی محصول : ' . '(' . $request->title . ')' . ' ثبت کرد';
            $item->activity()->save($activity);


            return redirect()->back()->with(['status' => 'success', "message" => 'ویژگی محصول با موفقیت ثبت گردید']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function destroy_attr($id)
    {
        $item = ProductAttr::find($id);
        $old_title = $item->title;
        try {
            $item->delete();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = ' ویژگی محصول : ' . '(' . $old_title . ')' . ' حذف کرد';
            $item->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => 'ویژگی محصول با موفقیت حذف شد']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }
}
