<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'alternatifs';
    protected $fillable = [
        'nama',
        'sc',
        'sa',
        'gcc',
        'pac',
        'soi',
        'gcpch',
        'fcc',
        'cso',
        'tet',
        'mds',
        'si',
        'cosmos',
        'cto'
    ];
}
