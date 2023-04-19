<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Models\Lang;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SettingController extends Controller {

    // Construct Function
    public function __construct() { $this->middleware('auth'); }

    // Edit Function
    public function edit($id) {
        $item = Setting::find($id);
        return view('admin.setting.edit', compact('item'), ['title' => 'ویرایش تنظیمات سایت']);
    }

    // Update Function
    public function update(Request $request, $id) {

        $item = Setting::find($id);
        // $old_title = $item->title;
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'title_en'  => 'required',
            'shoar'     => 'required',
            // 'shoar_en' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->title            = $request->title;
            $item->keywords         = $request->keywords;
            $item->description      = $request->description;
            $item->shoar            = $request->shoar;
            $item->instagram        = $request->instagram;
            $item->linkdin          = $request->linkdin;
            $item->telegram         = $request->telegram;
            $item->email            = $request->email;
            $item->phone            = $request->phone;
            $item->address          = $request->address;
            // $item->paginate = $request->paginate;
            if ($request->hasFile('logo')) {
                if (is_file($item->logo)) File::delete($item->logo);
                $item->logo = file_store($request->logo, 'asset/uploads/setting/photos/', 'logo-');;
            }
            if ($request->hasFile('logo_en')) {
                if (is_file($item->logo_en)) File::delete($item->logo_en);
                $item->logo_en = file_store($request->logo_en, 'asset/uploads/setting/photos/', 'logo_en-');;
            }
            if ($request->hasFile('logo_light')) {
                if (is_file($item->logo_light)) File::delete($item->logo_light);
                $item->logo_light = file_store($request->logo_light, 'asset/uploads/setting/photos/', 'logo_light-');;
            }
            if ($request->hasFile('logo2')) {
                if (is_file($item->logo2)) File::delete($item->logo2);
                $item->logo2 = file_store($request->logo2, 'asset/uploads/setting/photos/', 'logo2-');;
            }
            if ($request->hasFile('icon')) {
                if (is_file($item->icon)) File::delete($item->icon);
                $item->icon = file_store($request->icon, 'asset/uploads/setting/photos/', 'icon-');;
            }
            if ($request->hasFile('header_pic_fa')) {
                if (is_file($item->header_pic_fa)) File::delete($item->header_pic_fa);
                $item->header_pic_fa = file_store($request->header_pic_fa, 'asset/uploads/setting/photos/', 'header_pic_fa-');;
            }
            if ($request->hasFile('header_pic_en')) {
                if (is_file($item->header_pic_en)) File::delete($item->header_pic_en);
                $item->header_pic_en = file_store($request->header_pic_en, 'asset/uploads/setting/photos/', 'header_pic_en-');;
            }
            if ($request->hasFile('featur_pic')) {
                if (is_file($item->featur_pic)) File::delete($item->featur_pic);
                $item->featur_pic = file_store($request->featur_pic, 'asset/uploads/setting/photos/', 'featur_pic-');;
            }
            $item->update();

            if($item->langs) {
                foreach ($item->langs as $lang){
                    if ( $lang->fild_name!='employ_text' && $lang->fild_name!='employ_unit' ) $lang->delete();
                }
            }

            store_lang($request,'setting',$item->id,['title','keywords','description','shoar']);

            $activity               = new Activity();
            $activity->user_id      = auth()->user()->id;
            $activity->type         = 'update';
            $activity->text         = ' تنظیمات سایت را ویرایش کرد';
            $item->activity()->save($activity);

            return redirect('admin/setting-edit/1')->with(['status' => 'success', "message" => ' تنظیمات سایت با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

}
