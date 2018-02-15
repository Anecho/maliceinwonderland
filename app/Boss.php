<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Instance;

class Boss extends Model
{
    public function instance() {
        return $this->belongsTo(Instance::class);
    }
}
