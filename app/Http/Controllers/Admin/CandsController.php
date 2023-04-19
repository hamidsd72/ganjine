<?php

namespace App\Http\Controllers\Admin;

use App\QuestionAnswer;
use App\Procomment;
use App\ScoreType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CandsController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Function
    public function index()
    {
        $items = \App\Cand::all();
        return view('admin.cands.index', compact('items'), ['title' => 'انتقادات و پیشنهادات']);
    }

}
