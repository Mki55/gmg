@extends('layouts.app')

@section('content')
    <h1>Employees</h1>
    @foreach($employees as $employee)
        <p>{{ $employee->name }}</p>
        <a href="{{ route('employees.show', $employee) }}">View</a>
    @endforeach
    <a href="{{ route('employees.create') }}">Create New Employee</a>
@endsection
