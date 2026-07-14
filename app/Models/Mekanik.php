<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    protected $fillable = [
    'nama',
    'no_hp',
    'alamat',
    'keahlian',
];
}