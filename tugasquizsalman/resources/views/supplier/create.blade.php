@extends('layouts.app')

@section('content')
<h2>Add Supplier</h2>

<form action="{{ url('supplier') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA SUPPLIER</label>
        <input type="text" name="nama_supplier" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT SUPPLIER</label>
        <input type="text" name="alamat_supplier" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">TELEPON SUPPLIER</label>
        <input type="text" name="telepon_supplier" id="" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>
@endsection