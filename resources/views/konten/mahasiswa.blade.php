@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    <div class="card p-4">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Hobi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $index => $mhs)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $mhs['nim'] }}</td>
                        <td>{{ $mhs['nama'] }}</td>
                        <td>{{ $mhs['hobi'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p class="text-center mt-3">&copy; Polindra 2025</p>
</div>
@endsection
