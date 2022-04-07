<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table = 'perjalanans';

    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'lokasi',
        'suhu_tubuh',
    ];
}
