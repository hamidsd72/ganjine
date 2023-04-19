<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Meta;
use Illuminate\Http\Request;


class SitemapController extends Controller {

    public function index() {
        return response()->view('sitemap.index', [
            'metas' => Meta::all()            ,
        ])->header('Content-Type', 'text/xml');
    }
    
}

