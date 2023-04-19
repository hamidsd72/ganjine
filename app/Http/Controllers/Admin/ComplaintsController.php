<?php

namespace App\Http\Controllers\Admin;

use App\QuestionAnswer;
use App\Procomment;
use App\ScoreType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ComplaintsController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Function
    public function index()
    {
        $items = \App\Complaint::all();
        return view('admin.complaints.index', compact('items'), ['title' => 'شکایات']);
    }

}
