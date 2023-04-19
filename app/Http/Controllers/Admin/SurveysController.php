<?php

namespace App\Http\Controllers\Admin;

use App\QuestionAnswer;
use App\Procomment;
use App\ScoreType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SurveysController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Function
    public function index()
    {
        $items = \App\Survey::orderBy('id','desc')->get();
        return view('admin.surveys.index', compact('items'), ['title' => 'نظرسنجی']);
    }
    public function show($id)
    {
        $item = \App\Survey::find($id);
        return view('admin.surveys.show1', compact('item'), ['title' => 'نظرسنجی']);
    }

}
