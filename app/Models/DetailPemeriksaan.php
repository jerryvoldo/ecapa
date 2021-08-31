<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_perusahaan',
        'id_klausul_temuan',
        'id_jenis_temuan',
        'deskripsi_temuan',
        'foto_temuan',
        'deskripsi_tindakan_koreksi',
        'bukti_tindakan_koreksi',
        'deskripsi_tindakan_pencegahan',
        'bukti_tindakan_pencegahan',
        'isClosed'
    ];
}
