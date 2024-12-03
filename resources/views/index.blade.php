@extends('layouts.app')

@section('content')
    <h1>Daftar Tugas</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}">Tambah Tugas</a>
@endsection