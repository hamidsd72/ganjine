<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LearnCategory;
use App\Http\Requests\AdminLearnCategoryRoles;

class AdminLearnCategoryController extends Controller
{
    public function controller_title($type) {
        if ($type == 'sum') return 'دسته بندی ها ';
        elseif ('single') return 'دسته بندی';
    }  

    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $items = LearnCategory::all()->paginate(20)->sortDesc();
        return view('admin.learn_category.index', compact('items'), ['title' => $this->controller_title('sum')]);   
    }
 
    public function create()
    { 
        return view('admin.learn_category.create', ['title' => $this->controller_title('single')]);  
    } 

    public function store(Request $request) // AdminLearnCategoryRoles <== validations
    {
        LearnCategory::create($request->all());
        return redirect('/admin/admin-learn-category/');
    }

    public function show($id)
    {
        $item = LearnCategory::findOrFail($id);
        return view('admin.learn_category.show', compact('item'), ['title' => $this->controller_title('single')]);  
    }

    public function edit($id)
    {
        $item = LearnCategory::findOrFail($id);
        return view('admin.learn_category.edit', compact('item'), ['title' => $this->controller_title('single')]);  
    }

    public function update(Request $request, $id) // AdminLearnCategoryRoles <== validations
    {
        $item = LearnCategory::findOrFail($id);
        $item->sort = $request->sort;
        $item->status = $request->status;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->update();
        return redirect()->route('admin-learn-category.index');
    }

    public function destroy($id)
    {
        LearnCategory::findOrFail($id)->delete();
        return redirect('/admin/admin-learn-category/');
    }
}
