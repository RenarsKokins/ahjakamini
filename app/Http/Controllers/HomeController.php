<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class HomeController extends Controller
{
    function index(){
        $images = Image::where('show_in_gallery', '=', '1')
        ->inRandomOrder()
        ->limit(10)
        ->get();

        return view('home', compact('images'));
    }
}
