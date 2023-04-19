<?php

namespace App\Http\Controllers\Admin;

use App\QuestionAnswer;
use App\Procomment;
use App\ScoreType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuestionAnswerController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Function
    public function index()
    {
        $scoretypes = ScoreType::all();
        $items = QuestionAnswer::where('parent_id', 0)->orderBy('created_at' , 'DESC')->take(500)->get();
        return view('admin.question-answer.index', compact('items', 'scoretypes'), ['title' => 'پرسش ها']);
    }

    // Show Function
    public function show($id)
    {
        $item = QuestionAnswer::find($id);
        return view('admin.question-answer.show', compact('item'), ['title' => $item->title]);
    }



    public function answer_submit(Request $request, $id)
    {
        $name = User::find(Auth::user()->id);
        try {
            $qa = new QuestionAnswer();
            $qa->parent_id = $id;
            $qa->user_id = Auth::user()->id;
            $qa->name = $name->name;
            $qa->email = $name->email;
            $qa->text = $request->text;
            $qa->confirm = '1';
            $qa->save();
            return redirect('admin/question-answer-list')->with(['status' => 'success', "message" => 'با تشکر پاسخ شما با موفقیت ارسال شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function question_check($id)
    {
        try {
            $chek = QuestionAnswer::find($id);
            $chek->confirm = '1';
            $chek->save();
            return redirect()->back()->with(['status' => 'success', "message" => 'با موفقیت تایید شد']);
        } catch (\Exception $e) {
            return redirect('admin/question-answer-list')->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function question_del($id)
    {
        try {
            $del = QuestionAnswer::find($id);
            if (!$del->parent_id) {
                QuestionAnswer::find($id)->delete();
                QuestionAnswer::where('parent_id', $id)->delete();
                return redirect()->back()->with(['status' => 'success', "message" => 'پرسش مورد نظر و کلیه پاسخ های آن با موفقیت حذف شد']);
            } else {
                QuestionAnswer::find($id)->delete();
                return redirect()->back()->with(['status' => 'success', "message" => 'با موفقیت حذف شد']);
            }

        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    public function question_edit($id)
    {
        $item = QuestionAnswer::find($id);
        return view('admin.question-answer.edit', compact('item'), ['title' => 'ویرایش']);
    }

    public function question_update(Request $request, $id)
    {
        $item = QuestionAnswer::find($id);
        try {
            $item->text = $request->text;
            $item->for_id = $request->for_id;
            $item->labels = $request->labels;
            $item->save();
            if (isset($request->child_id)) {

                $ans = QuestionAnswer::find($request->child_id);
                $ans->text = $request->ans;
                $ans->for_id = $request->for_id;
                $ans->save();

            } else {
                $qa = new QuestionAnswer();
                $qa->parent_id = $item->id;
                $qa->user_id = $item->user_id;
                $qa->name = $item->name;
                $qa->email = $item->email;
                $qa->text = $request->ans;
                $qa->confirm = $item->confirm;
                $qa->save();
            }


            return redirect('admin/question-answer-list')->with(['status' => 'success', 'message' => 'با موفقیت ثبت شد']);
        } catch (\Exception $e) {
            return redirect('admin/question-answer-list')->with(['status' => 'danger-600', 'message' => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }


    public function score_store(Request $request)
    {

        $comment = QuestionAnswer::find($request->comment_id);
        $scoretype = ScoreType::find($request->score);


        if ($comment->user_id != 0 && !is_null(User::find($comment->user_id))) {


            $user = User::find($request->user_id);

            $newScore = (int)$user->score + (int)$scoretype->score;

            $user->score = $newScore;

            $user->save();


            $comment->set_score = 1;

            $comment->save();

            return redirect()->back()->with(['status' => 'success', "message" => 'عملیات با موفقیت انجام شد']);

        } else {
            return redirect()->back()->with(['status' => 'danger', "message" => 'کاربر مورد نظر یافت نشد']);
        }

    }

}
