<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $images = DB::table('images')->inRandomOrder()->limit(10)->get();
        return view('products', compact('images'));
    }
}
