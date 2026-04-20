@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4"> Daftar Barang</h2>
<table border="1" cellpadding="5" style="width:100%; border-collapse:collapse;">
    <thead style="background:#e2e8f0;">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku['id'] }}</td>
            <td>{{ $dataku['nama'] }}</td>
            <td>{{ $dataku['harga'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
