<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyGuruMataPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('guru_mata_pelajarans', function (Blueprint $table) {
            $table->foreign('guru_id')->references('id')->on('gurus')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
        // Schema::table('guru_mata_pelajarans' , function(Blueprint $table){
          
        // )};
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
