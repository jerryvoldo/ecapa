<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_perusahaan');
            $table->bigInteger('epoch_pemeriksaan');
            $table->string('nomor_surat_tugas');
            $table->bigInteger('id_lead_auditor');
            $table->boolean('isClosed')->dafault(false);
            $table->bigInteger('id_detail');
            $table->text('kesimpulan_saran_tindaklanjut')->nullable();
            $table->jsonb('tindakan_onsite_pemeriksaan')->nullable();
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
        Schema::dropIfExists('pemeriksaans');
    }
}
