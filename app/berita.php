<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = ['judul', 'foto', 'berita'];
    protected $table = 'news';

}
