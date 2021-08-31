<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_perusahaan');
            $table->bigInteger('id_pemeriksaan');
            $table->bigInteger('id_klausul_temuan');
            $table->bigInteger('id_jenis_temuan');
            $table->text('deskripsi_temuan');
            $table->jsonb('foto_temuan');
            $table->text('deskripsi_tindakan_koreksi')->nullable();
            $table->jsonb('bukti_tindakan_koreksi')->nullable();
            $table->text('deskripsi_tindakan_pencegahan')->nullable();
            $table->jsonb('bukti_tindakan_pencegahan')->nullable();
            $table->boolean('isClosed')->default(false);
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
        Schema::dropIfExists('detail_pemeriksaans');
    }
}
