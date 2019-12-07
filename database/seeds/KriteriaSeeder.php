<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriterias')->insert([
            ['name' => 'sc', 'bobot' => 0.105],
            ['name' => 'sa', 'bobot' => 0.105],
            ['name' => 'gcc', 'bobot' => 0.09],
            ['name' => 'pac', 'bobot' => 0.105],
            ['name' => 'soi', 'bobot' => 0.105],
            ['name' => 'gcpch', 'bobot' => 0.06],
            ['name' => 'fcc', 'bobot' => 0.03],
            ['name' => 'cso', 'bobot' => 0.08],
            ['name' => 'tet', 'bobot' => 0.08],
            ['name' => 'mds', 'bobot' => 0.04],
            ['name' => 'si', 'bobot' => 0.10],
            ['name' => 'cosmos', 'bobot' => 0.05],
            ['name' => 'cto', 'bobot' => 0.05]
        ]);
    }
}
