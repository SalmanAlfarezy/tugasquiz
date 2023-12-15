@extends('layouts.app')

@section('content')
<h2>Edit Penjualan</h2>

<form action="{{ url('penjualan/' . $row->id_penjualan) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">ID BARANG</label>
        <input type="text" name="id_barang" id="" class="form-control" value="{{ $row->id_barang }}">
    </div>
    <div class="mb-3">
        <label for="">JUMLAH BARANG</label>
        <input type="text" name="jumlah_barang" id="" class="form-control" value="{{ $row->jumlah_barang }}">
    </div>
    <div class="mb-3">
        <label for="">TOTAL HARGA</label>
        <input type="text" name="total_harga" id="" class="form-control" value="{{ $row->total_harga }}">
    </div>
    <div class="mb-3">
        <label for="">TANGGAL PENJUALAN</label>
        <input type="text" name="tanggal_penjualan" id="" class="form-control" value="{{ $row->tanggal_penjualan }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection