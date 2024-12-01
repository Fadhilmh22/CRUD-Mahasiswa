<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNimAndNohpColumnInMahasiswaTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_tbl', function (Blueprint $table) {
            $table->integer('nim')->change();
            $table->bigInteger('no_hp')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_tbl', function (Blueprint $table) {
            $table->string('nim', 20)->change();
            $table->string('no_hp', 20)->change();
        });
    }
}
