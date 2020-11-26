<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->foreignId('id_ruang');
            $table->foreignId('id_user');
            $table->timestamps();

            $table->foreign('id_ruang')
                ->references('id_ruang')
                ->on('ruang')
                ->onDelete('CASCADE');
            $table->foreign('id_user')
                ->references('id_user')
                ->on('users')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
