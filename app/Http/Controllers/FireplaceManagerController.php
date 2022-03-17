<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fireplace;
use App\Models\Language;
use App\Models\Detail;
use App\Models\Image;

class FireplaceManagerController extends Controller
{
    function checkValidation(Request $request) {
        $request->validate([
            'title-lv' => 'required|max:50',
            'title-ru' => 'required|max:50',
            'title-en' => 'required|max:50',
            'description-lv' => 'required',
            'description-ru' => 'required',
            'description-en' => 'required',
            'price' => 'required|numeric|max:99999',
            'finish-lv' => 'max:255',
            'finish-en' => 'max:255',
            'finish-ru' => 'max:255',
            'width' => 'required|numeric|max:99999',
            'height' => 'required|numeric|max:99999',
            'length' => 'required|numeric|max:99999',
            'inner-size' => 'max:40',
            'heating' => 'max:255',
            'main-img' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);
    }

    function saveImages(Request $request, int $id) {
        $names = [];

        $file = $request->file('main-img');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path() . '/img/products/';
        $file->move($destinationPath, $fileName);
        array_push($names, $fileName);

        if($request->hasFile('other-img')) {
            foreach($request->file('other-img') as $image) {
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);
            }
        }

        foreach ($names as $key => $imgName) {
            $image = new Image();
            $image->path = 'img/products/' . $imgName;
            if($request->has('show-in-gallery')) $image->show_in_gallery = 1;
            else $image->show_in_gallery = 0;
            $image->fireplace_id = $id;
            if ($key === array_key_first($names)) $image->main = true;
            $image->save();
        }
        return $names;
    }

    function index() {
        $fireplaces = Fireplace::all();

        foreach ($fireplaces as $fireplace) {
            $fireplace->details = $fireplace->getDetails;
        }

        return view('fireplacemanager', compact('fireplaces'));
    }

    function create(Request $request) {
        $this->checkValidation($request);

        $fireplace = new Fireplace();
        $fireplace->price = $request->price;
        $fireplace->save();
        
        $names = $this->saveImages($request, $fireplace->id);

        $languages = Language::all();
        foreach ($languages as $lang) {
            $details = new Detail();
            $details->title = $request->input('title-' . strtolower($lang->iso));
            $details->description = $request->input('description-' . strtolower($lang->iso));
            $details->fireplace_id = $fireplace->id;
            $details->language_id = $lang->id;
            $details->width = $request->input('width');
            $details->height = $request->input('height');
            $details->depth = $request->input('length');

            // Non required fields
            if ($request->has('finish-' . strtolower($lang->iso))) $details->finish = $request->input('finish-' . strtolower($lang->iso));
            if ($request->has('inner-size')) $details->internal_dimensions = $request->input('inner-size');
            if ($request->has('mass')) $details->mass = $request->input('mass');
            if ($request->has('heating')) $details->heating = $request->input('heating');
            $details->save();
        }

        return redirect('fireplacemanager');
    }

    function update(Request $request) {
        $this->checkValidation($request);
        return redirect('fireplacemanager');
    }
    
    function delete(Request $request) {
        return redirect('fireplacemanager');
    }
}
