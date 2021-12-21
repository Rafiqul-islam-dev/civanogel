<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function index(Request $request)
    {
        // Get All Property
        $properties = Property::latest();

        // Check for Rent/Sale
        if (!empty($request->sale)) {
            $properties = $properties->where('sale', $request->sale);
        }

        // Check Property Type
        if (!empty($request->type)) {
            if ($request->type == 'land') {
                $type = 1;
            } elseif ($request->type == 'appartment') {
                $type = 2;
            } elseif ($request->type == 'villa') {
                $type = 3;
            }
            $properties = $properties->where('type', $type);
        }

        // Check Property Price
        if (!empty($request->price)) {
            // Request Price
            $price = $request->price;

            // if more than 500000
            if ($price == 500001) {
                $priceMin = 500000;
                $properties = $properties->where('price', '>', $priceMin);
            } else {
                if ($price == 100000) {
                    $priceMin = 0;
                    $priceMax = 100000;
                } elseif ($price == 200000) {
                    $priceMin = 100000;
                    $priceMax = 200000;
                } elseif ($price == 300000) {
                    $priceMin = 200000;
                    $priceMax = 300000;
                } elseif ($price == 400000) {
                    $priceMin = 300000;
                    $priceMax = 400000;
                } elseif ($price == 500000) {
                    $priceMin = 400000;
                    $priceMax = 500000;
                }
                $properties = $properties->where('price', '>', $priceMin)->where('price', '<=', $priceMax);
            }
        }

        // check bedrooms
        if (!empty($request->bedrooms)) {
            $properties = $properties->where('bedrooms', $request->bedrooms);
        }



        $properties = $properties->paginate(12);

        return view('property.index')->with('properties', $properties);
    }




    public function single($id)
    {
        $property = Property::with('gallery', 'location')->findOrFail($id);

        return view('property.single')->with('property', $property);
    }
}
