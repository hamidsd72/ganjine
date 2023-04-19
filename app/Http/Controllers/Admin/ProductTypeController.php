<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Models\Lang;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductTypeController extends Controller
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
        $items = ProductType::where('parent_id',0)->get();
        return view('admin.product-type.create', compact('items'), ['title' => 'افزودن شکل داروئی محصولات']);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'name_en' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }

        try {
            $item = ProductType::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
            ]);

            store_lang($request,'product_type',$item->id,['name']);

            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' شکل داروئی محصولات : ' . '(' . $request->name . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect('admin/product-type-list')->with(['status' => 'success', "message" => 'شکل داروئی محصولات با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id)
    {
        $items = ProductType::where('parent_id',0)->where('id', '!=', $id)->get();
        $item = ProductType::find($id);

        return view('admin.product-type.edit', compact('item', 'items'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request, $id)
    {
        $item = ProductType::find($id);
        $old_name = $item->name;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'name_en' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->parent_id = $request->parent_id ? $request->parent_id : $item->parent_id;
            $item->name = $request->name;
            $item->save();
            if($item->langs)
            {
                foreach ($item->langs as $lang){
                    $lang->delete();
                }
            }
            store_lang($request,'product_type',$item->id,['name']);
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' شکل داروئی محصولات : ' . '(' . $old_name . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect('admin/product-type-list')->with(['status' => 'success', "message" => 'شکل داروئی محصولات با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index()
    {

        $items = ProductType::where('parent_id',0)->orderBy('id', 'DESC')->get();
        return view('admin.product-type.index', compact('items'), ['title' => 'شکل داروئی محصولات']);
    }

    // Destroy Function
    public function destroy($id)
    {
        $item = ProductType::find($id);
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
            $activity->text = ' شکل داروئی محصولات : ' . '(' . $old_name . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect('admin/product-type-list')->with(['status' => 'success', "message" => 'شکل داروئی محصولات با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }
}
