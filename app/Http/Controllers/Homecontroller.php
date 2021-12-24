<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {

        $property = Property::latest()->take(3)->get();
        $locations = Location::select('name','id')->get();

        return view('welcome')->with(['properties' => $property,'locations'=>$locations]);
    }
}
