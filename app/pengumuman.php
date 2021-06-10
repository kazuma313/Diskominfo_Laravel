<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    // //
    protected $fillable = ['judul', 'sub_judul', 'pengumuman'];
    protected $table = 'pengumumans';
}
