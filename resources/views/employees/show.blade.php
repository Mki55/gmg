@extends('layouts.app')

@section('content')
    <h1>{{ $employee->name }}</h1>
    <a href="{{ route('employees.edit', $employee) }}">Edit</a>
    <form method="POST" action="{{ route('employees.destroy', $employee) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
