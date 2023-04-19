<?php

namespace App\Http\Controllers\Admin;

use App\Award;
use App\Photo;
use App\Library;
use App\Basketclub;
use App\ProductCategory;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AwardController extends Controller
{

    // Construct Function
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Create Function
    public function create()
    {
        $items = ProductCategory::all();
        $products = Award::all();
        return view('admin.award.create', compact('items', 'products'), ['title' => '&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; &#1605;&#1581;&#1589;&#1608;&#1604;']);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'score' => 'required',
            'text' => 'required',
            'status' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger - 600',
                "message" => '&#1604;&#1591;&#1601;&#1575; &#1601;&#1740;&#1604;&#1583; &#1607;&#1575; &#1585;&#1575; &#1576;&#1585;&#1585;&#1587;&#1740; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583;&#1548; &#1576;&#1593;&#1590;&#1740; &#1575;&#1586; &#1601;&#1740;&#1604;&#1583; &#1607;&#1575; &#1606;&#1605;&#1740; &#1578;&#1608;&#1575;&#1606;&#1606;&#1583; &#1582;&#1575;&#1604;&#1740; &#1576;&#1575;&#1588;&#1606;&#1583; . '
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = Award::create([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'slug' => $request->name,
                'text' => $request->text,
                'status' => $request->status,
                'price1' => 0,
                'type1' => '&#1580;&#1575;&#1740;&#1586;&#1607;',
                'discount' => 0,
                'tags' => $request->tags,
                'taste' => $request->taste,
                'score' => $request->score,
                'description' => $request->description,
                'propertyTitle' => $request->propertyTitle,
                'properties' => $request->properties,
                'related' => '0',
            ]);

            if ($request->hasFile('photo')) {
                $photo = new Photo();
                $photo->path = file_store($request->photo, 'asset/uploads/product/photos/', 'photo - ');;
                $item->photo()->save($photo);
            }

            if ($request->hasFile('libraries')) {
                foreach ($request->libraries as $library) {
                    $gallery = new Library();
                    $gallery->path = file_store($library, 'asset/uploads/product/libraries/', 'photo - ');
                    $item->library()->save($gallery);
                }
            }

            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' &#1605;&#1581;&#1589;&#1608;&#1604; &#1740; : ' . '(' . $request->name . ')' . ' &#1585;&#1575; &#1579;&#1576;&#1578; &#1705;&#1585;&#1583;';
            $item->activity()->save($activity);
            return redirect('admin/award-list')->with(['status' => 'success', "message" => '&#1605;&#1581;&#1589;&#1608;&#1604; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1740;&#1578; &#1579;&#1576;&#1578; &#1588;&#1583; . ']);
        } catch (\Exception $e) {
            return $e;
        }
    }

    // Edit Function
    public function edit($id)
    {
        $item = Award::find($id);
        $items = ProductCategory::all();
        return view('admin.award.edit', compact('item', 'items'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request, $id)
    {
        $item = Award::find($id);
        $old_title = $item->title;
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'score' => 'required',
            'text' => 'required',
            'status' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger - 600',
                "message" => '&#1604;&#1591;&#1601;&#1575; &#1601;&#1740;&#1604;&#1583; &#1607;&#1575; &#1585;&#1575; &#1576;&#1585;&#1585;&#1587;&#1740; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583;&#1548; &#1576;&#1593;&#1590;&#1740; &#1575;&#1586; &#1601;&#1740;&#1604;&#1583; &#1607;&#1575; &#1606;&#1605;&#1740; &#1578;&#1608;&#1575;&#1606;&#1606;&#1583; &#1582;&#1575;&#1604;&#1740; &#1576;&#1575;&#1588;&#1606;&#1583; . '
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->name = $request->name;
            $item->text = $request->text;
            $item->status = $request->status;
            $item->score = $request->score;
            $item->tags = $request->tags;
            $item->description = $request->description;
            $item->propertyTitle = $request->propertyTitle;
            $item->properties = $request->properties;
            $item->save();
            if ($request->hasFile('photo')) {
                if ($item->photo) {
                    $old_path = $item->photo->path;
                    File::delete($old_path);
                    $item->photo->delete();
                    $photo = new Photo();
                    $photo->path = file_store($request->photo, 'asset/uploads/product/photos/', 'photo - ');;
                    $item->photo()->save($photo);
                } else {
                    $photo = new Photo();
                    $photo->path = file_store($request->photo, 'asset/uploads/product/photos/', 'photo - ');;
                    $item->photo()->save($photo);
                }
            }


            Library::where('pictures_id', $id)->where('pictures_type', 'App\Award')->delete();


            if ($request->hasFile('libraries')) {
                foreach ($request->libraries as $library) {
                    $gallery = new Library();
                    $gallery->path = file_store($library, 'asset/uploads/product/libraries/', 'photo - ');
                    $item->library()->save($gallery);
                }
            }


            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' &#1605;&#1581;&#1589;&#1608;&#1604; &#1740; : ' . '(' . $old_title . ')' . ' &#1585;&#1575; &#1608;&#1740;&#1585;&#1575;&#1740;&#1588; &#1705;&#1585;&#1583;';
            $item->activity()->save($activity);
            return redirect('admin/award-list')->with(['status' => 'success', "message" => '&#1605;&#1581;&#1589;&#1608;&#1604; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1740;&#1578; &#1608;&#1740;&#1585;&#1575;&#1740;&#1588; &#1588;&#1583; . ']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger - 600', "message" => '&#1740;&#1705; &#1582;&#1591;&#1575; &#1585;&#1582; &#1583;&#1575;&#1583;&#1607; &#1575;&#1587;&#1578;&#1548; &#1604;&#1591;&#1601;&#1575; &#1576;&#1585;&#1585;&#1587;&#1740; &#1576;&#1601;&#1585;&#1605;&#1575;&#1740;&#1740;&#1583; . ']);
        }
    }

    // Index Function
    public function index()
    {
        $items = Award::get();
        return view('admin.award.index', compact('items'), ['title' => '&#1605;&#1581;&#1589;&#1608;&#1604; &#1607;&#1575;']);
    }

    public function selected()
    {
        $items = Award::get();
        return view('admin.award.selected', compact('items'), ['title' => '&#1605;&#1581;&#1589;&#1608;&#1604; &#1607;&#1575;']);
    }


    // Destroy Function
    public function destroy($id)
    {
        Basketclub::where('award_id', $id)->delete();
        $item = Award::find($id);
        $old_title = $item->name;
        try {
            $item->delete();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = ' &#1605;&#1581;&#1589;&#1608;&#1604; &#1740; : ' . '(' . $old_title . ')' . ' &#1585;&#1575; &#1581;&#1584;&#1601; &#1705;&#1585;&#1583;';
            $item->activity()->save($activity);
            return redirect('admin/award-list')->with(['status' => 'success', "message" => '&#1605;&#1581;&#1589;&#1608;&#1604; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1740;&#1578; &#1581;&#1584;&#1601; &#1588;&#1583; . ']);
        } catch (\Exception $e) {
            return redirect('admin/award-list')->with(['status' => 'danger - 600', "message" => '&#1740;&#1705; &#1582;&#1591;&#1575; &#1585;&#1582; &#1583;&#1575;&#1583;&#1607; &#1575;&#1587;&#1578;&#1548; &#1604;&#1591;&#1601;&#1575; &#1576;&#1585;&#1585;&#1587;&#1740; &#1576;&#1601;&#1585;&#1605;&#1575;&#1740;&#1740;&#1583; . ']);
        }
    }

    public function show($id, $type)
    {
        $item = Award::find($id);

        $item->show = $type;
        $item->save();

        return redirect('admin/award-list')->with(['status' => 'success', "message" => 'عملیات با موفقیت انجام شد']);

    }

}
