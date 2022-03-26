<?php

namespace App\Http\Controllers;

use App\Models\Fireplace;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    function index(Request $request){
        $fireplace = Fireplace::findOrFail($request->id);
        $fireplace->details = $fireplace->getCurrentLanguageDetails;
        $fireplace->image = $fireplace->getMainImage;

        $images = Image::where('fireplace_id', $fireplace->id)->get();

        return view('product_view', compact('fireplace', 'images'));
    }
}
