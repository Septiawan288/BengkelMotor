<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Pembayaran;

class LaporanController extends Controller
{
    public function index()
    {
        $jumlahServis = Servis::count();

        $jumlahTransaksi = Pembayaran::count();

        $totalPendapatan = Pembayaran::sum('total_bayar');


        return view('laporan.index', compact(
            'jumlahServis',
            'jumlahTransaksi',
            'totalPendapatan'
        ));
    }
}