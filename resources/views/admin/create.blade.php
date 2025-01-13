@extends('layouts.app')

@section('content')
    <h1>Add New Admin</h1>
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Add</button>
    </form>
@endsection
