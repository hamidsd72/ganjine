<?php

namespace App\Http\Controllers\Admin;

use App\Employment;
use App\Bcemployment;
use App\Http\Controllers\Controller;

class EmploymentController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Function
    public function index()
    {
        $items = Employment::get();
        return view('admin.employment.index', compact('items'), ['title' => 'فرم ها']);
    }

    public function indexbc()
    {
        $items = Bcemployment::get();
        return view('admin.broadcast.employment.index', compact('items'), ['title' => 'فرم ها']);
    }
}
