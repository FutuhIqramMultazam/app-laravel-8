<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jurusan_id');
            $table->foreignId('user_id');
            $table->string('nama');
            $table->char('nik', 10)->unique();
            $table->string('slug_nik')->unique();
            $table->integer('usia');
            $table->string('jenis_kelamin');
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
        Schema::dropIfExists('namas');
    }
}
