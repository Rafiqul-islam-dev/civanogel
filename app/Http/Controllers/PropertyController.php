<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id)
    {
        return view('property.single');
    }

}
