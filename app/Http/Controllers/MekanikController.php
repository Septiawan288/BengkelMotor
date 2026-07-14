<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    public function index()
    {
        $mekaniks = Mekanik::all();

        return view('mekanik.index', compact('mekaniks'));
    }


    public function create()
    {
        return view('mekanik.create');
    }


    public function store(Request $request)
    {
        $request->validate([
    'nama' => 'required',
    'no_hp' => 'required',
    'alamat' => 'required',
    'keahlian' => 'required',
]);

        Mekanik::create([
    'nama' => $request->nama,
    'no_hp' => $request->no_hp,
    'alamat' => $request->alamat,
    'keahlian' => $request->keahlian,
]);

        return redirect('/mekanik');
    }


    public function destroy($id)
    {
        Mekanik::destroy($id);

        return redirect('/mekanik');
    }
}