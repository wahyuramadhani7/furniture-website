@extends('layouts.app')

@section('content')
    <h1>Edit Admin</h1>
    <form action="{{ route('admin.update', $admin) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $admin->name }}" required>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $admin->email }}" required>
        <label>Password:</label>
        <input type="password" name="password">
        <button type="submit">Update</button>
    </form>
@endsection
