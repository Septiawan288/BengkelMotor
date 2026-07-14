<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }


    public function create()
    {
        return view('pelanggan.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ]);

        Pelanggan::create($request->all());

        return redirect('/pelanggan')
        ->with('success','Data berhasil ditambah');
    }


    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.edit',
        compact('pelanggan'));
    }


    public function update(Request $request,$id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->update($request->all());

        return redirect('/pelanggan');
    }


    public function destroy($id)
    {
        Pelanggan::destroy($id);

        return redirect('/pelanggan');
    }
}