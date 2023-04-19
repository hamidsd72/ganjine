<?php

namespace App\Http\Controllers\User;

use App\About;
use App\Models\Item;
use App\Models\AboutFeature;
use App\Models\AboutFaq;
use App\Models\AboutTeam;
use App\Models\AboutBank;
use App\Http\Controllers\Controller;

class AboutController extends Controller {

    function add_ir_be_shaba($banks) {
        foreach ($banks as $bank) if(!empty($bank->shaba)) $bank->shaba = "IR".$bank->shaba;
        return $banks;
    }

    public function show() {

        $item       = About::find(1);
        $items      = AboutFeature::where('status','active')->where('id','!=','12')->get();
        $feature    = AboutFeature::where('status','active')->where('id','=','12')->first();
        $faqs1      = AboutFaq::where('status','active')->where('place_id',1)->orderBy('id')->get();
        $faqs2      = AboutFaq::where('status','active')->where('place_id',2)->orderBy('id')->get();
        $all_teams  = AboutTeam::where('status','active')->orderBy('type')->get();
        // $banks1     = AboutBank::where('status','active')->where('type',1)->orderBy('id')->get();
        // $banks2     = AboutBank::where('status','active')->where('type',2)->orderBy('id')->get();
        // $banks3     = AboutBank::where('status','active')->where('type',3)->orderBy('id')->get();
        $banks1     = AboutBank::where('status','active')->orderBy('id')->get();
        $this->add_ir_be_shaba($banks1);
        // $this->add_ir_be_shaba($banks2);
        // $this->add_ir_be_shaba($banks3);
        // dd( $item  );
        $data       = Item::where('page_name','about-us')->get();
        return view('front.about.show',compact('all_teams','item','faqs1','faqs2','items','banks1','feature','data'), ['title' => __('text.page_name.about')]);
    }
    

}
