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
            ['name' => 'sc', 'bobot' => .105],
            ['name' => 'sa', 'bobot' => .105],
            ['name' => 'gcc', 'bobot' => .95],
            ['name' => 'pac', 'bobot' => .105],
            ['name' => 'soi', 'bobot' => .105],
            ['name' => 'gcpch', 'bobot' => .06],
            ['name' => 'fcc', 'bobot' => .03],
            ['name' => 'cso', 'bobot' => .08],
            ['name' => 'tet', 'bobot' => .08],
            ['name' => 'mds', 'bobot' => .04],
            ['name' => 'si', 'bobot' => .10],
            ['name' => 'cosmos', 'bobot' => .05],
            ['name' => 'cto', 'bobot' => .05]
        ]);
    }
}
