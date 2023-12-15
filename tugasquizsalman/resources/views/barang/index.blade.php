@extends('layouts.app')
@section('content')

<h2>Barang</h2>

<a href="{{ url('barang/create') }}" class="btn btn-primary mb-3 float-end">Add Barang</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA BARANG</th>
        <th>HARGA SATUAN</th>
        <th>STOK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->nama_barang }}</td>
        <td>{{ $row->harga_satuan }}</td>
        <td>{{ $row->stok }}</td>

        <td><a href="{{ url('barang/edit/' . $row->id_barang) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('barang/' . $row->id_barang) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection