<?php

namespace App\Http\Controllers\User;

use App\Contact;
use App\Models\ContactInfo;
use App\Menu;
use App\Models\EmploymentPage;
use App\Attachment;
use App\Employment;
use App\About;
use App\Setting;
use App\ContactCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    // Show Function
    public function show()
    {
        function fa_number($number) {
            $arr = array();
            for ($i=0; $i < strlen($number); $i++) { 
                switch ($number) {
                    case $number[$i] == "0":
                        array_push($arr, "۰" );
                    break;
                    case $number[$i] == "1":
                        array_push($arr, "۱" );
                    break;
                    case $number[$i] == "2":
                        array_push($arr, "۲" );
                    break;
                    case $number[$i] == "3":
                        array_push($arr, "۳" );
                    break;
                    case $number[$i] == "4":
                        array_push($arr, "۴" );
                    break;
                    case $number[$i] == "5":
                        array_push($arr, "۵" );
                    break;
                    case $number[$i] == "6":
                        array_push($arr, "۶" );
                    break;
                    case $number[$i] == "7":
                        array_push($arr, "۷" );
                    break;
                    case $number[$i] == "8":
                        array_push($arr, "۸" );
                    break;
                    case $number[$i] == "9":
                        array_push($arr, "۹" );
                    break;
                
                    default:
                        array_push($arr, $number[$i] );
                } 
            }
            return implode("",$arr);
        }
        $data = Menu::where('slug','تماس-با-ما')->first();
        $item = ContactInfo::find(1);
        if(!empty($item->phone1))
            $item->phone1 = fa_number($item->phone1);
        if(!empty($item->phone2))
            $item->phone2 = fa_number($item->phone2);
        if(!empty($item->address))
            $item->address = fa_number($item->address);

        return view('user.contact.show',compact('item','data'), ['title' => __('text.page_name.contact')]);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required|max:255',
            'email'         => 'required|email',
            'text'          => 'required',
            'code_melli'    => 'max:20',
            'city'          => 'max:125',
            'station'       => 'max:255',
            'mobile'        => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'part'          => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([ 'status' => 'danger', 'message' => 'بعضی از فیلدها الزامی هستند', 'validator' => $validator->messages(), ]);
        }
        try {
            $item = new Contact();
            $item->name      = $request->name;
            $item->email     = $request->email;
            $item->mobile    = $request->mobile;
            $item->code_melli= $request->code_melli;
            $item->city      = $request->city;
            $item->station   = $request->station;
            $item->part      = $request->part;
            $item->subject   = $request->subject;
            $item->type      = $request->type;
            $item->text      = '';
            if ($request->c1) $item->text = $item->text.$request->c1.',';
            if ($request->c2) $item->text = $item->text.$request->c2.',';
            $item->text      = $item->text.$request->text;
            $item->lang      = app()->getLocale();
            if ($request->hasFile('attach')) $item->attach= file_store($request->attach, 'asset/uploads/contents/'.'/photos/', 'content-');
            $item->save();
            return redirect()->back()->with([ 'status' => 'success', 'message' => ' با موفقیت ثبت شد', ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([ 'status' => 'danger', 'message' => 'مشگل در ایجاد , لطفا مجددا افدام کنید', ]);
        }
    }

    //Empeloyment
    // Show Function
    public function employment_show()
    {
        //$item = Setting::find(1);
        $items = EmploymentPage::orderBy('id','ASC')->where('status_link','active');
        $item=About::find(1);
        if(app()->getLocale()=='en')
        {
            $items=$items->where('status_en','active');
        }
        $items=$items->get();
        return view('user.employment.show',compact('item','items'), ['title' => __('text.page_name.employment')]);
    }
    // Show1 Function
    public function employment_show1($id)
    {
        $item = EmploymentPage::find($id);
        return view('user.employment.show1',compact('item'), ['title' => set_lang($item,'title_link',app()->getLocale())]);
    }
    // Store Function
    public function employment_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:220',
            'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'email' => 'nullable|email',
            'employ_type' => 'required',
            'unit' => 'required',
            'short_text' => 'nullable|max:600',
            'file' => 'nullable|mimes:pdf,doc,docx|max:10240'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                "err_message" => __('text.err_field')
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = Employment::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'employ_type' => $request->employ_type,
                'unit' => $request->unit,
                'employ_know' => $request->employ_know,
                'short_text' => $request->short_text,
                'lang' => app()->getLocale(),
            ]);
            $masge="درخواست استخدام جدید با اطلاعات زیر در سایت ثبت شده است.\n";
            $masge.="نام : ".$request->name."\n";
            $masge.="ایمیل : ".$request->email."\n";
            $masge.="موبایل : ".$request->mobile."\n";
            $masge.="سن : ".$request->age."\n";
            $masge.="واحد : ".$request->unit."\n";
            $masge.="تحصیلات : ".$request->education."\n";
            $masge.="رشته تحصیلی : ".$request->education_type."\n";
            mail("hr@avindarou.ir", "درخواست استخدام جدید", $masge);

            if ($request->hasFile('file')) {
                $item->file = file_store($request->file, 'includes/asset/uploads/employment/file/'.$item->id.'/', 'file-');;
                $item->save();
            }
            return redirect()->back()->with(["flash_message" => __('text.flash_msg')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(["err_message" =>  __('text.err_msg')]);
        }
    }
}
