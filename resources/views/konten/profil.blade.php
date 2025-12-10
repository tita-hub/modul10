@extends('layouts.main')

@section('title', $title)

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $title }}</h1>

    <div class="card p-4">
        <h4>Nama : {{ $mahasiswa['nama'] }}</h4>
        <p>NIM : {{ $mahasiswa['nim'] }}</p>
        <p>Program Studi : {{ $mahasiswa['program_studi'] }}</p>
        <p>Hobi : {{ $mahasiswa['hobi'] }}</p>
        <p>Lama Praktik : {{ $mahasiswa['lama_praktik'] }}</p>
    </div>
</div>
@endsection