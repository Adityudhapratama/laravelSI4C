@extends('main')

@section('tittle', 'Fakultas')

@section('content')
<h1>Data Fakultas</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Fakultas</th>
        <th>singkatan</th>
        <th>kaprodi</th>
        <th>Fakultas</th>
    </tr>
    @foreach ($fakultas as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama ?? '-' }}</td>
    </tr>
    @endforeach
</table>
@endsection