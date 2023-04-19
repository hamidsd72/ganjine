<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Models\AboutFaq;
use App\Models\Lang;
use App\Activity;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AboutController extends Controller {

    // Construct Function
    public function __construct() { $this->middleware('auth'); }

    // Edit Function
    public function edit($id) {
        $item = About::find($id);
        return view('admin.about.edit', compact('item'), ['title' => 'ویرایش درباره ما']);
    }

    // Update Function
    public function update(Request $request, $id) {

        $item = About::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            // 'text' => 'required',
            'title_en' => 'required',
            'head_text_en' => 'required',
            // 'index_title' => 'required',
            // 'index_title_en' => 'required',
            // 'index_text' => 'required',
            // 'index_text_en' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->head_text    = $request->head_text;
            $item->title        = $request->title;
            $item->text         = $request->text;
            $item->vision_title = $request->vision_title;
            $item->vision_text  = $request->vision_text;
            $item->index_title  = $request->index_title;
            $item->index_text   = $request->index_text;

            if ($request->hasFile('pic')) {
                if (is_file($item->pic)) File::delete($item->pic);
                $item->pic = file_store($request->pic, 'asset/uploads/about/photos/', 'pic-');
            }
            if ($request->hasFile('vision_pic')) {
                if (is_file($item->vision_pic)) File::delete($item->vision_pic);
                $item->vision_pic = file_store($request->vision_pic, 'asset/uploads/about/photos/', 'vision_pic-');
            }
            if ($request->hasFile('index_pic')) {
                if (is_file($item->index_pic)) File::delete($item->index_pic);
                $item->index_pic = file_store($request->index_pic, 'asset/uploads/about/photos/', 'index-photo-');
            } 
            $item->update();

            // $count_photo =  11 - count($item->photos);

            // if(isset($request->index_pic)) {
            //     foreach ($request->index_pic as $key => $pic) {
            //         if($key<$count_photo) {
            //             $photo = new Photo();
            //             $photo->path = file_store($pic, 'asset/uploads/about/index/photos/', 'index-photo-');
            //             $item->photos()->save($photo);
            //         }
            //     } 
            // }

            // if($item->langs) {
            //     foreach ($item->langs as $lang){
            //         $lang->delete();
            //     }
            // }
            // store_lang($request,'about',$item->id,['title','text','vision_title','vision_text','index_title','index_text']);

            // if ($request->has('head_text_en','title_en') ) store_lang($request, 'about', $item->id, ['head_text','title']);

            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' درباره ما را ویرایش کرد';
            $item->activity()->save($activity);

            return redirect('admin/about-edit/1')->with(['status' => 'success', "message" => 'درباره ما با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function del_pic($id) {

        $photo = Photo::find($id);
        if(is_file($photo->path)) File::delete($photo->path);
        $photo->delete();
        return redirect('admin/about-edit/1')->with(['status' => 'success', "message" => 'با موفقیت حذف شد.']);
    }

}
