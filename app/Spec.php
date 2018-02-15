<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $fillable = [
        'class', 'name', 'color', 'recruiting'
    ];
}
