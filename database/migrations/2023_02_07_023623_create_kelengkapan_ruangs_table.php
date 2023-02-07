<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelengkapan_ruangs', function (Blueprint $table) {
            $table->id();
            $table->string('ruangan');
            $table->string('kelengkapan');
            $table->integer('jumlah');
            $table->string('kondisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelengkapan_ruangs');
    }
};
