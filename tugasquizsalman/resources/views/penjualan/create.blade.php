@extends('layouts.app')

@section('content')
<h2>Add Penjualan</h2>

<form action="{{ url('penjualan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">ID BARANG</label>
        <input type="text" name="id_barang" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">JUMLAH BARANG</label>
        <input type="text" name="jumlah_barang" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">TOTAL HARGA</label>
        <input type="text" name="total_harga" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">TANGGAL PENJUALAN</label>
        <input type="text" name="tanggal_penjualan" id="" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>
@endsection