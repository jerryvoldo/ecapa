<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_perusahaan',
        'epoch_pemeriksaan',
        'nomor_surat_tugas',
        'id_lead_auditor',
        'isClosed',
        'id_detail',
        'kesimpulan_saran_tindaklanjut',
        'tindakan_onsite_pemeriksaan',
        'produk_tms',
    ];

    public function detail()
    {
        return $this->hasMany(DetailPemeriksaan::class, 'id_pemeriksaan');
    }
}
