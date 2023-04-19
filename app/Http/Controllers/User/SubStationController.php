<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Controllers\Controller;
use App\About;
use App\Models\AboutBranch;
class SubStationController extends Controller {

    public function show($slug) {

        $message    = '';
        $item       = About::find(1);
        $item_b     = AboutBranch::where('status','active')->first();
        $branches   = AboutBranch::where('status','active')->where('id','!=',$item_b->id)->orderBy('id')->get();
        $provinces  = $branches->unique('province')->pluck('province');
        $data       = Item::where('page_name', $slug)->get();
        foreach ($branches as $branche) {
            if(!empty($branche->address)) $branche->address = num2fa($branche->address);
            if(!empty($branche->phone)) $branche->phone = num2fa($branche->phone);
        }

        return view('front.substation.index',compact('item_b','item','branches','provinces','message','slug','data'), ['title' => __('text.page_name.banks')]);
    }
    
    public function province($slug) {

        $message    = '';
        $item       = About::find(1);
        $item_b     = AboutBranch::where('status','active')->first();
        $branches   = AboutBranch::where('status','active')->where('province',$slug)->where('id','!=',$item_b->id)->orderBy('id')->get();
        $data       = Item::where('page_name', 'province')->get();
        $provinces  = AboutBranch::where('status','active')->where('id','!=',$item_b->id)->distinct('province')->pluck('province');
        if ($branches->count() < 1) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'شعبه ای یافت نشد , لطفا دوباره امتحان کنید']);
        }

        foreach ($branches as $branche) {
            if(!empty($branche->address)) $branche->address = num2fa($branche->address);
            if(!empty($branche->phone)) $branche->phone = num2fa($branche->phone);
        }
        $slug = 'province';

        return view('front.substation.index',compact('item_b','item','branches','provinces','message','slug','data'), ['title' => __('text.page_name.banks')]);
    }
}
