<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function images() {
        return $this->hasMany("App\Models\Image");
    }

}