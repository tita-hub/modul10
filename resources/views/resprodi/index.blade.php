@extends('layouts.main')
@section('title', 'Data Prodi')

@section('content')
    <h2>Data Prodi</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProdi as $item)
                <tr>
                    <td>{{ $item->kodeprodi }}</td>
                    <td>{{ $item->namaprodi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
