<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Boss;

class Instance extends Model
{
    public function bosses() {
        return $this->hasMany(Boss::class);
    }
}
