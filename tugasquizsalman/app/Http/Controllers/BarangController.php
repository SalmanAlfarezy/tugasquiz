<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Barang::all();
        return view('barang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga_satuan' => $request->harga_satuan,
            'stok' => $request->stok
        ]);

        return redirect('barang');
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
        $row = Barang::find($id);
        return view('barang.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Barang::findOrFail($id);

        $row->update([
            'nama_barang' => $request->nama_barang,
            'harga_satuan' => $request->harga_satuan,
            'stok' => $request->stok
        ]);

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Barang::findOrFail($id);

        $row->delete();

        return redirect('barang');
    }
}
