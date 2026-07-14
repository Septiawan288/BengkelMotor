<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::with('pelanggan')->get();

        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();

        return view('kendaraan.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'no_polisi' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'tahun' => 'required',
        ]);

        Kendaraan::create([
            'pelanggan_id' => $request->pelanggan_id,
            'no_polisi' => $request->no_polisi,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
        ]);

        return redirect('/kendaraan')
            ->with('success', 'Data kendaraan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $pelanggans = Pelanggan::all();

        return view('kendaraan.edit', compact('kendaraan', 'pelanggans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'no_polisi' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'tahun' => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->update([
            'pelanggan_id' => $request->pelanggan_id,
            'no_polisi' => $request->no_polisi,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'tahun' => $request->tahun,
        ]);

        return redirect('/kendaraan')
            ->with('success', 'Data kendaraan berhasil diubah');
    }

    public function destroy($id)
    {
        Kendaraan::destroy($id);

        return redirect('/kendaraan')
            ->with('success', 'Data kendaraan berhasil dihapus');
    }
}