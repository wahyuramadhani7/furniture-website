@extends('layouts.app')

@section('content')
    <h1>Admin List</h1>
    <a href="{{ route('admin.create') }}">Add New Admin</a>
    <ul>
        @foreach ($admins as $admin)
            <li>{{ $admin->name }} - {{ $admin->email }}
                <a href="{{ route('admin.edit', $admin) }}">Edit</a>
                <form action="{{ route('admin.destroy', $admin) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
