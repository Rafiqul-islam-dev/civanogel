<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class Homecontroller extends Controller
{
    public function home()
    {
        $latestPropertise = Property::latest()->get()->take(4);
        return view('welcome', ['latestPropartise' => $latestPropertise]);
    }
}
