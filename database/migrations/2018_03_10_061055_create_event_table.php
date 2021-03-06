<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('event', function (Blueprint $table) {
         $table->increments('id');
         $table->string('nama')->nullable();
         $table->integer('user_id')->unsigned();
         $table->string('kunci')->nullable();
         $table->string('penjelasan')->nullable();
         $table->string('alamat')->nullable();
         $table->datetime('waktu')->nullable();
         $table->string('bentuk_tenant')->nullable();
         $table->string('jenis_tenant')->nullable();
         $table->string('rekening')->nullable();
         $table->string('nama_rekening')->nullable();
         $table->string('gambar')->nullable();
         $table->string('kategori')->nullable();
         $table->integer('harga')->nullable();
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
}
