<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::all();

        return view('sparepart.index', compact('spareparts'));
    }


    public function create()
    {
        return view('sparepart.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_sparepart' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);


        Sparepart::create([
            'nama_sparepart' => $request->nama_sparepart,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);


        return redirect('/sparepart')
            ->with('success','Sparepart berhasil ditambahkan');
    }


    public function edit($id)
    {
        $sparepart = Sparepart::findOrFail($id);

        return view('sparepart.edit', compact('sparepart'));
    }


    public function update(Request $request,$id)
    {
        $sparepart = Sparepart::findOrFail($id);


        $sparepart->update([
            'nama_sparepart' => $request->nama_sparepart,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);


        return redirect('/sparepart');
    }


    public function destroy($id)
    {
        Sparepart::destroy($id);

        return redirect('/sparepart');
    }
}