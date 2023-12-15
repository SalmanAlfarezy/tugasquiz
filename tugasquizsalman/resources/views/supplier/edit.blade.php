@extends('layouts.app')

@section('content')
<h2>Edit Supplier</h2>

<form action="{{ url('supplier/' . $row->id_supplier) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">NAMA SUPPLIER</label>
        <input type="text" name="nama_supplier" id="" class="form-control" value="{{ $row->nama_supplier }}">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT SUPPLIER</label>
        <input type="text" name="alamat_supplier" id="" class="form-control" value="{{ $row->alamat_supplier }}">
    </div>
    <div class="mb-3">
        <label for="">TELEPON SUPPLIER</label>
        <input type="text" name="telepon_supplier" id="" class="form-control" value="{{ $row->telepon_supplier }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection