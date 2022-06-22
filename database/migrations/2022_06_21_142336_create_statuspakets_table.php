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
        Schema::create('statuspakets', function (Blueprint $table) {
            $table->string("no_resi");
            $table->date("tanggal_penerimaan");
            $table->string("jenis_barang");
            $table->string("berat_barang");
            $table->string("status_paket");
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
        Schema::dropIfExists('statuspakets');
    }
};
