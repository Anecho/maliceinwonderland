<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Application extends Model
{
    protected $fillable = [
        'user_id', 'class', 'mainspec', 'offspec', 'available_on', 'timezone', 'additional_info'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
