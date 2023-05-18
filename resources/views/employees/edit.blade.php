@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>
    <form method="POST" action="{{ route('employees.update', $employee) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" value="{{ $employee->employee_id }}"><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $employee->name }}"><br>
        
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="{{ $employee->start_date }}"><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $employee->description }}</textarea><br>
        
        <label for="picture">Picture:</label>
        <input type="file" id="picture" name="picture" accept="image/*"><br>
        
        <button type="submit">Save Changes</button>
    </form>
@endsection
