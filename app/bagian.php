<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bagian extends Model
{
    //
    public function fungsis(){
        return $this->hasMany(fungsi::class);
    }
}
