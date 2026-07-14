<?php

namespace App\Http\Controllers;

use App\Models\DetailSparepart;
use App\Models\Servis;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class DetailSparepartController extends Controller
{
    public function index()
    {
        $details = DetailSparepart::with(['servis','sparepart'])->get();

        return view('detail_sparepart.index', compact('details'));
    }


    public function create()
    {
        $servis = Servis::all();
        $spareparts = Sparepart::all();

        return view('detail_sparepart.create', compact('servis','spareparts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'servis_id'=>'required',
            'sparepart_id'=>'required',
            'jumlah'=>'required'
        ]);


        $sparepart = Sparepart::findOrFail($request->sparepart_id);


        $subtotal = $sparepart->harga * $request->jumlah;


        DetailSparepart::create([
            'servis_id'=>$request->servis_id,
            'sparepart_id'=>$request->sparepart_id,
            'jumlah'=>$request->jumlah,
            'subtotal'=>$subtotal
        ]);


        return redirect('/detail-sparepart');
    }


    public function destroy($id)
    {
        DetailSparepart::destroy($id);

        return redirect('/detail-sparepart');
    }
}