<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'badan_hukum',
        'nama',
        'penanggungjawab',
        'pemilik',
        'nomor_telepon',
        'email',
        'alamat_kantor_jalan',
        'alamat_kantor_rt',
        'alamat_kantor_rw',
        'alamat_kantor_kelurahan',
        'alamat_kantor_kecamatan',
        'alamat_kantor_propinsi',
        'gudang',
        'koordinat_lattitude',
        'koordinat_longitude',
    ];

    public function gudang()
    {
        return $this->hasMany(Gudang::class, 'id_perusahaan');
    }

}
