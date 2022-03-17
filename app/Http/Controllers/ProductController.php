<?php

namespace App\Http\Controllers;

use App\Models\Fireplace;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $fireplaces = Fireplace::all();
        foreach ($fireplaces as $fireplace) {
            $fireplace->details = $fireplace->getCurrentLanguageDetails;
            $fireplace->image = $fireplace->getMainImage;
        }

        return view('products', compact('fireplaces'));
    }
}
