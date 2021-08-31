<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_perusahaan');
            $table->text('penanggungjawab');
            $table->jsonb('nomor_telepon');
            $table->jsonb('email')->nullable();
            $table->text('alamat_gudang_jalan');
            $table->text('alamat_gudang_rt')->nullable();
            $table->text('alamat_gudang_rw')->nullable();
            $table->text('alamat_gudang_kelurahan')->nullable();
            $table->text('alamat_gudang_kecamatan')->nullable();
            $table->text('alamat_gudang_propinsi')->nullable();
            $table->text('koordinat_longitude')->nullable();
            $table->text('koordinat_lattitude')->nullable();
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
        Schema::dropIfExists('gudangs');
    }
}
