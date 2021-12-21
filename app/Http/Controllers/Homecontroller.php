<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class Homecontroller extends Controller
{
    public function home()
    {
        $latestPropertise = Property::all();
        return view('welcome', ['latestPropartise' => $latestPropertise]);
    }
}
