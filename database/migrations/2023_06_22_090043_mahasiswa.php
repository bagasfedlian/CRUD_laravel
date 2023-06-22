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
    {Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();
        $table->string('Nama')->nullable();
        $table->string('NIM')->nullable();
        $table->string('Dosen')->nullable();
        $table->string('Matkul')->nullable();
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
        //
    }
};
