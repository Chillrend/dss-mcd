<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alternatif_migration extends Model
{
    protected $table = 'alternatif_migrations';
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
        'cto',
        'hasil',
        'results_id'
    ];
}
