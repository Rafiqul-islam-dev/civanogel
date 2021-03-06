<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function single($slug)
    {
        $page = Page::where('slug',$slug)->first();
        if(!empty($page)){
            return view('pages.index')->with('page',$page);
        }else{
            return abort('404');
        }
    }
}
