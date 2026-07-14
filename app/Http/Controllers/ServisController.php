<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Mekanik;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::with('kendaraan', 'mekanik')->get();

        return view('servis.index', compact('servis'));
    }


    public function create()
    {
        $kendaraans = Kendaraan::all();
        $mekaniks = Mekanik::all();

        return view('servis.create', compact('kendaraans', 'mekaniks'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'kendaraan_id' => 'required',
            'mekanik_id' => 'required',
            'tanggal_servis' => 'required',
            'keluhan' => 'required',
            'biaya_jasa' => 'required',
            'status' => 'required',
        ]);


        Servis::create([
            'kendaraan_id' => $request->kendaraan_id,
            'mekanik_id' => $request->mekanik_id,
            'tanggal_servis' => $request->tanggal_servis,
            'keluhan' => $request->keluhan,
            'biaya_jasa' => $request->biaya_jasa,
            'status' => $request->status,
        ]);


        return redirect('/servis')
            ->with('success', 'Data servis berhasil ditambahkan');
    }


    public function edit($id)
    {
        $servis = Servis::findOrFail($id);

        $kendaraans = Kendaraan::all();
        $mekaniks = Mekanik::all();

        return view('servis.edit',
            compact('servis','kendaraans','mekaniks'));
    }


    public function update(Request $request, $id)
    {
        $servis = Servis::findOrFail($id);

        $servis->update([
            'kendaraan_id' => $request->kendaraan_id,
            'mekanik_id' => $request->mekanik_id,
            'tanggal_servis' => $request->tanggal_servis,
            'keluhan' => $request->keluhan,
            'biaya_jasa' => $request->biaya_jasa,
            'status' => $request->status,
        ]);


        return redirect('/servis');
    }


    public function destroy($id)
    {
        Servis::destroy($id);

        return redirect('/servis');
    }
}