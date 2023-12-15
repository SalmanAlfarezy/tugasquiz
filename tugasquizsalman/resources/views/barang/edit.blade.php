@extends('layouts.app')

@section('content')
<h2>Edit Barang</h2>

<form action="{{ url('barang/' . $row->id_barang) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA BARANG</label>
        <input type="text" name="nama_barang" id="" class="form-control" value="{{ $row->nama_barang }}">
    </div>
    <div class="mb-3">
        <label for="">HARGA</label>
        <input type="text" name="harga_satuan" id="" class="form-control" value="{{ $row->harga_satuan }}">
    </div>
    <div class="mb-3">
        <label for="">STOK</label>
        <input type="text" name="stok" id="" class="form-control" value="{{ $row->stok }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection