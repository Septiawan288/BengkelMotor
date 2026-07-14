<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Servis;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('servis')->get();

        return view('pembayaran.index', compact('pembayarans'));
    }


    public function create()
    {
        $servis = Servis::all();

        return view('pembayaran.create', compact('servis'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'servis_id'=>'required',
            'total_bayar'=>'required',
            'metode'=>'required',
            'tanggal_bayar'=>'required'
        ]);


        Pembayaran::create([
            'servis_id'=>$request->servis_id,
            'total_bayar'=>$request->total_bayar,
            'metode'=>$request->metode,
            'tanggal_bayar'=>$request->tanggal_bayar
        ]);


        return redirect('/pembayaran');
    }


    public function destroy($id)
    {
        Pembayaran::destroy($id);

        return redirect('/pembayaran');
    }
}