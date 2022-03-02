<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index(){
        $images = DB::table('images')->get();
        $image_count = (int)($images->count()/3);
        $last = 0;
        $images_sorted = array();

        for ($i = 1; $i < 4; $i++) {
            $image_group = array();
            for ($image = $last, $l = $last; $image < $l + $image_count; $image++) {
                array_push($image_group, $images[$image]);
                $last++;
            }
            array_push($images_sorted, $image_group);
        }

        return view('gallery', compact('images_sorted'));
    }
}
