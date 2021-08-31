<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_perusahaan',
        'penanggungjawab',
        'nomor_telepon',
        'email',
        'alamat_gudang_jalan',
        'alamat_gudang_rt',
        'alamat_gudang_rw',
        'alamat_gudang_kelurahan',
        'alamat_gudang_kecamatan',
        'alamat_gudang_propinsi',
        'koordinat_lattitude',
        'koordinat_longitude',
    ];
}
