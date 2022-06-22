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
        Schema::create('pengirimen', function (Blueprint $table) {
            $table->string('id_order');
            $table->string('no_resi');
            $table->string('id_layanan');
            $table->date('tanggal_pengiriman');
            $table->string('nama_pengirim');
            $table->string('nohp_pengirim');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('nohp_penerima');
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
        Schema::dropIfExists('pengirimen');
    }
};
