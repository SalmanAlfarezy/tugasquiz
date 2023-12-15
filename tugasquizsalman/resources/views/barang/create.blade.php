@extends('layouts.app')

@section('content')
<h2>Add Barang</h2>

<form action="{{ url('barang') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA BARANG</label>
        <input type="text" name="nama_barang" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">HARGA</label>
        <input type="text" name="harga_satuan" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">STOK</label>
        <input type="text" name="stok" id="" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>
@endsection