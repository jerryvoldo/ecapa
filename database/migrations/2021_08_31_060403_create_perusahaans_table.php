<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->text('badan_hukum');
            $table->text('nama');
            $table->text('penanggungjawab');
            $table->text('pemilik');
            $table->jsonb('nomor_telepon');
            $table->jsonb('email')->nullable();
            $table->text('alamat_kantor_jalan');
            $table->text('alamat_kantor_rt')->nullable();
            $table->text('alamat_kantor_rw')->nullable();
            $table->text('alamat_kantor_kelurahan')->nullable();
            $table->text('alamat_kantor_kecamatan')->nullable();
            $table->text('alamat_kantor_propinsi')->nullable();
            $table->jsonb('gudang')->nullable();
            $table->text('koordinat_longitude');
            $table->text('koordinat_lattitude');
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
        Schema::dropIfExists('perusahaans');
    }
}
