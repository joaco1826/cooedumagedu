<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InfoContact extends Model
{
    protected $table = 'info_contact';

    protected $fillable = [
        'name', 'email', 'message'
    ];

}