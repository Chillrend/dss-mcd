<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $table = 'results';
    protected $fillable = [
        'nama_perhitungan',
        'top_ranking'
    ];
}
