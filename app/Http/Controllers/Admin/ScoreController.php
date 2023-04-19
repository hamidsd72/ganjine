<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Score;
use App\ScoreType;
use App\Http\Controllers\Controller;
use App\ArticleCategory;
use App\ArticleCategoryHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ScoreController extends Controller
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
        return view('admin.score.create', ['title' => 'افزودن امتیاز نظرات']);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'score' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = ScoreType::create([
                'name' => $request->name,
                'score' => $request->score,
            ]);
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' عنوان امتیاز نظرات : ' . '(' . $request->name . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect('admin/score-list')->with(['status' => 'success', "message" => 'با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id)
    {
        $categories = ArticleCategory::where('id', '!=', $id)->get();
        $item = ArticleCategory::find($id);
        $items = nestable()->make($categories)->attr(['name' => 'parent_id', 'class' => 'select'])->selected($item->parent_id)->renderAsDropdown();

        return view('admin.article-category.edit', compact('item', 'items'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request)
    {
        $item = Score::find($request->id);
        $validator = Validator::make($request->all(), [
            'score' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->score = $request->score;
            $item->save();
            return redirect('admin/score-list')->with(['status' => 'success', "message" => 'تغییر امتیاز با موفقیت انجام شد']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Update2 Function
    public function update2(Request $request)
    {
        $item = ScoreType::find($request->id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'score' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->name = $request->name;
            $item->score = $request->score;
            $item->save();
            return redirect('admin/score-list')->with(['status' => 'success', "message" => 'تغییر امتیاز با موفقیت انجام شد']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index(ArticleCategoryHelper $ArticleCategoryHelper)
    {
        $items = Score::all();
        $types = ScoreType::all();
        return view('admin.score.index', compact('items','types'), ['title' => 'امتیاز دهی']);
    }

    // Destroy Function
    public function destroy($id)
    {
        $item = ScoreType::find($id);
        $old_name = $item->name;
        try {
            $item->delete();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = ' دسته بندی امتیاز : ' . '(' . $old_name . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect('admin/score-list')->with(['status' => 'success', "message" => 'با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }
}
