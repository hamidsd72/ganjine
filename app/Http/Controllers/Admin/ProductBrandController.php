<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Models\Lang;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductBrandController extends Controller
{

    // Construct Function
    public function __construct()
    {
//        $this->middleware(['auth', 'clearance']);
        $this->middleware('auth');
    }

    // Create Function
    public function create()
    {
        $items = ProductBrand::all();
        return view('admin.product-brand.create', compact('items'), ['title' => 'افزودن برند']);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'name_en' => 'required',
        ]);

        $slug = Validator::make($request->all(), [
            'slug' => 'required|unique:product_categories',
        ]);
        if ($slug->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'نام وارد شده تکراری است لطفا نام دیگری انتخاب کنید'
            ])->withErrors($validator)->withInput();
        }

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }

        try {
            $item = ProductBrand::create([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);

            store_lang($request,'product_brand',$item->id,['name']);

            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' برند : ' . '(' . $request->name . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect('admin/product-brand-list')->with(['status' => 'success', "message" => 'برند با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id)
    {
        $item = ProductBrand::find($id);
        return view('admin.product-brand.edit', compact('item'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request, $id)
    {
        $item = ProductBrand::find($id);
        $old_name = $item->name;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'name_en' => 'required',
        ]);

        $slug = Validator::make($request->all(), [
            'slug' => 'required|unique:product_brands,slug,'.$item->id
        ]);

        if ($slug->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'نام وارد شده تکراری است لطفا نام دیگری انتخاب کنید'
            ])->withErrors($validator)->withInput();
        }

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->name = $request->name;
            $item->slug = $request->slug;
            $item->save();
            if($item->langs)
            {
                foreach ($item->langs as $lang){
                    $lang->delete();
                }
            }
            store_lang($request,'product_brand',$item->id,['name']);
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' برند : ' . '(' . $old_name . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect('admin/product-brand-list')->with(['status' => 'success', "message" => 'برند با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index()
    {

        $items = ProductBrand::all();
        return view('admin.product-brand.index', compact('items'), ['title' => 'برند']);
    }

    // Destroy Function
    public function destroy($id)
    {
        $item = ProductBrand::find($id);
        $old_name = $item->name;
        try {
            if(count($item->product))
            {
                return redirect()->back()->with(['status' => 'danger-600', "message" => 'دارای محصول می باشد']);
            }
            $item->delete();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = ' برند : ' . '(' . $old_name . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => 'برند با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }
}
