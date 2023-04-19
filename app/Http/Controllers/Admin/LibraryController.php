<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library;



class LibraryController extends  Controller
{
    public function destroy($id)
    {
        $item = Library::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
}