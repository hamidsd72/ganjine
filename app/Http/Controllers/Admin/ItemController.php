<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\MenuInformationPicture;
use App\Activity;
use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller {
            
    public function controller_paginate() {
        return \App\Setting::firstOrFail('paginate')->paginate;
    }

    public function controller_title($type) {
        if ($type == 'sum') return 'محتوا صفحات ثابت';
        elseif ('single') return 'محتوا صفحه';
    }

    public function __construct() {$this->middleware('auth'); }

    public function index($page_name=null) {
        if ($page_name) {
            $items = Item::where('status', 'active')->where('page_name', $page_name)->orderBy('section')->get();
            return view('admin.item.index', compact('items','page_name'), ['title' => $this->controller_title('sum') ]);
        }
        return 'نام صفحه وارد نشده';
    }

    public function create($page_name) {
        return view('admin.item.create', compact('page_name'), ['title' => $this->controller_title('single') .' افزودن ']);
    }

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'page_name'     => 'required',
            'section'       => 'required',
            'position'      => 'required',
            'sort'          => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = Item::create($request->all());
            if ($request->hasFile('pic')) {
                $photo = new Photo();
                $photo->path = file_store($request->pic, 'asset/uploads/items/'.$item->type.'/photos/', 'item-page-');
                $item->photo()->save($photo);
            }
        
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' محتوا : ' . '(' . $item->id . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect()->route('admin-items-page',$item->page_name)->with(['status' => 'success', "message" => 'محتوا با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function edit($page_name, $id) {
        $item   = Item::find($id);
        return view('admin.item.edit', compact('item'), ['title' => 'ویرایش محتوا']);
    }

    public function update(Request $request, $id) {

        $item       = Item::find($id);
        $old_title  = $item->id;
        $validator = Validator::make($request->all(), [
            'section'       => 'required',
            'position'      => 'required',
            'sort'          => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->update($request->all());
            if ($request->hasFile('pic')) {
                if ($item->photo) {
                    File::delete($item->photo->path);
                    $item->photo->delete();
                }
                $photo = new Photo();
                $photo->path = file_store($request->pic, 'asset/uploads/items/'.$item->type.'/photos/', 'item-page-');
                $item->photo()->save($photo);
            }
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' محتوا : ' . '(' . $old_title . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect()->route('admin-items-page',$item->page_name)->with(['status' => 'success', "message" => 'محتوا با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function destroy($id) {

        $item = Item::find($id);
        $old_title = $item->id;
        try {
            $item->status = 'pending';
            $item->update();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = ' محتوا : ' . '(' . $old_title . ')' . ' را غیرفعال کرد';
            $item->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => 'محتوا با موفقیت غیرفعال شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

}
