<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifMigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif_migrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('sc');
            $table->integer('sa');
            $table->integer('gcc');
            $table->integer('pac');
            $table->integer('soi');
            $table->integer('gcpch');
            $table->integer('fcc');
            $table->integer('cso');
            $table->integer('tet');
            $table->integer('mds');
            $table->integer('si');
            $table->integer('cosmos');
            $table->integer('cto');
            $table->decimal('hasil', 13, 13);
            $table->bigInteger('results_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif_migrations');
    }
}
