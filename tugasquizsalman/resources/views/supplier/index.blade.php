@extends('layouts.app')
@section('content')

<h2>Data Supplier</h2>

<a href="{{ url('supplier/create') }}" class="btn btn-primary mb-3 float-end">Add Supplier</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>ID SUPPLIER</th>
        <th>NAMA SUPPLIER</th>
        <th>ALAMAT SUPPLIER</th>
        <th>TELEPON SUPPLIER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_supplier }}</td>
        <td>{{ $row->nama_supplier }}</td>
        <td>{{ $row->alamat_supplier }}</td>
        <td>{{ $row->telepon_supplier }}</td>

        <td><a href="{{ url('supplier/edit/' . $row->id_supplier) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('supplier/' . $row->id_supplier) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection