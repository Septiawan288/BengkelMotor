<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    protected $fillable = [
        'kendaraan_id',
        'mekanik_id',
        'tanggal_servis',
        'keluhan',
        'biaya_jasa',
        'status',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function mekanik()
    {
        return $this->belongsTo(Mekanik::class);
    }
}