<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    //
    protected $fillable = ['nama', 'email', 'nomor_hp', 'comentar'];
    protected $table = 'comments';
}
