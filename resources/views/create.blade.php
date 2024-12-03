@extends('layouts.app')

@section('content')
    <h1>Tambah Tugas</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Judul:</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection