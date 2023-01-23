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
        Schema::create('ruang_labs', function (Blueprint $table) {
            $table->id();
            $table->string('ruangan');
            $table->integer('jumlah_komputer');
            $table->string('nama_pic');
            $table->string('kontak_pic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang_labs');
    }
};
