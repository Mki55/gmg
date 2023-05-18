@extends('layouts.app')

@section('content')
    <h1>Create New Employee</h1>
    <form method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">
        @csrf
        
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" value="01"><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="John Doe"><br>
        
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="2022-01-01"><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description">test1</textarea><br>
        
        <label for="picture">Picture:</label>
        <input type="file" id="picture" name="picture" accept="image/*"><br>
        
        <button type="submit">Submit</button>
    </form>
@endsection
