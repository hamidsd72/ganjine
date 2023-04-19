<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Models\Lang;
use App\Activity;
use App\ProductCategory;
use App\Models\ProductDoctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductDoctorController extends Controller
{
    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {

        $items=ProductDoctor::orderBy('id','DESC')->get();
        return view('admin.product_doctor.show', compact('items'));
    }

    public function add()
    {
        $items = ProductCategory::where('parent_id',0)->get();
        return view('admin.product_doctor.add',compact('items'));
    }

    public function store(Request $request)
    {
        try{
            if ($request->hasFile('pic')) {
                $pic = file_store($request->pic, 'asset/img/doctor/pic/', 'doctpr-');
                $pic='/'.$pic;
            }
            $cer=new ProductDoctor();
            $cer->pic=$pic;
            $cer->title=$request->title;
            $cer->category_id=$request->category_id;
            $cer->text=$request->text;
//        $cer->for=0;
            $cer->save();

            store_lang($request,'doctor',$cer->id,['title','text']);

            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = 'توصیه پزشکی : '.$request->title.' را ایجاد کرد';
            $cer->activity()->save($activity);

            return redirect('admin/admin_show_product_doctor')->with(['status' => 'success', "message" => 'توصیه پزشکی اضافه شد . ']);
        }catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger - 600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید . ']);
        }
    }

    public function del($id)
    {
        try{
            $cer=ProductDoctor::find($id);
                $old_t=$cer->title;
                $cer->delete();

                 $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = 'توصیه پزشکی : '.$old_t.' را حذف کرد';
            $cer->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => 'توصیه پزشکی حذف شد . ']);
        }catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger - 600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید . ']);
        }
    }

    public function edit($id)
    {
        $items = ProductCategory::where('parent_id',0)->get();
        $item=ProductDoctor::find($id);
        return view('admin.product_doctor.edit',compact('item','items'));
    }

    public function update(Request $request, $id)
    {
        try{
            $cer=ProductDoctor::find($id);
            $old_t=$cer->title;
            if ($request->hasFile('pic')) {
                if(is_file($cer->pic))
                {
                    File::delete($cer->pic);
                }
                $pic = file_store($request->pic, 'asset/img/doctor/pic/', 'doctpr-');
                $pic='/'.$pic;
                $cer->pic=$pic;
            }
            $cer->category_id=$request->category_id;
            $cer->title=$request->title;
            $cer->text=$request->text;
            $cer->save();

            if($cer->langs)
            {
                foreach ($cer->langs as $lang){
                    $lang->delete();
                }
            }
            store_lang($request,'doctor',$cer->id,['title','text']);


            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = 'توصیه پزشکی : '.$old_t.' را ویرایش کرد';
            $cer->activity()->save($activity);
            return redirect('admin/admin_show_product_doctor')->with(['status' => 'success', "message" => 'توصیه پزشکی با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }
}