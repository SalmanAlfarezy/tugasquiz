@extends('layouts.app')
@section('content')

<h2>Data Penjualan</h2>

<a href="{{ url('penjualan/create') }}" class="btn btn-primary mb-3 float-end">Add Penjualan</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>ID BARANG</th>
        <th>JUMLAH BARANG</th>
        <th>TOTAL HARGA</th>
        <th>TANGGAL PENJUALAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_penjualan }}</td>
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->jumlah_barang }}</td>
        <td>{{ $row->total_harga }}</td>
        <td>{{ $row->tanggal_penjualan }}</td>

        <td><a href="{{ url('penjualan/edit/' . $row->id_penjualan) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('penjualan/' . $row->id_penjualan) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection