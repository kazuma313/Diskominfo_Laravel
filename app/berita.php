<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    //
    protected $fillable = ['judul', 'foto', 'berita'];
    protected $table = 'news';

}
