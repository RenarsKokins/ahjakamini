<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Fireplace extends Model
{
    use HasFactory;
    
    public function getDetails(){
        return $this->hasMany(Details::class);
    }
}
