<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIdbuktiToId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('bukti', function (Blueprint $table) {
            $table->renameColumn('id_bukti', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('bukti', 'id'))
        {
            Schema::table('bukti', function (Blueprint $table)
            {
                $table->dropColumn('id');
            });
        }
    }
}
