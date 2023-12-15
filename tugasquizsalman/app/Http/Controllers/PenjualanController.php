<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Penjualan::all();
        return view('penjualan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'id_barang' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'total_harga' => $request->total_harga,
            'tanggal_penjualan' => $request->tanggal_penjualan
        ]);


        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Penjualan::find($id);
        return view('penjualan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Penjualan::findOrFail($id);

        $row->update([
            'id_barang' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'total_harga' => $request->total_harga,
            'tanggal_penjualan' => $request->tanggal_penjualan
        ]);

        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Penjualan::findOrFail($id);

        $row->delete();

        return redirect('penjualan');
    }
}
