<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\Language;
use App\Models\Detail;
use App\Models\Image;

class Fireplace extends Model
{
    use HasFactory;
    
    public function getDetails(){
        return $this->hasMany(Detail::class);
    }

    public function getImages(){
        return $this->hasMany(Image::class);
    }

    public function getCurrentLanguageDetails(){
        $locale = App::currentLocale();
        $lang = Language::all()->where('iso', '=', strtoupper($locale));
        return $this->hasMany(Detail::class)->where('language_id', '=', '1');
    }

    public function getMainImage(){
        return $this->hasMany(Image::class)->where('main', '=', '1');
    }
}
