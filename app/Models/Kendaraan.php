<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'pelanggan_id',
        'no_polisi',
        'merk',
        'tipe',
        'tahun'
    ];
}