@extends('layouts.main')
@section('title', $title)
@section('content')
    <h2>Nama: {{ $mhs }}</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">PRODI</th>
                <th scope="col">ANGKATAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataMhs as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->namaprodi }}</td>
                    <td>{{ $item->angkatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
