<?php

namespace App\Http\Controllers;

use App\Models\Fireplace;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $elements = Fireplace::all();

        foreach ($elements as $element) {
            $element->details = $element->getCurrentLanguageDetails;
            $element->image = $element->getMainImage;
        }
        $fireplaces = $elements->chunk(3);

        return view('products', compact('fireplaces'));
    }
}
