<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupKlausul extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'deskripsi'];

    public function klausul()
    {
        return $this->hasMany(Klausul::class, 'id_group');
    }
}
