<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'servis_id',
        'total_bayar',
        'metode',
        'tanggal_bayar'
    ];


    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }
}