@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee CRUD</h1>
        
        <form action="{{ route('employees.create') }}" method="POST">
            @csrf
            <h2>Create Employee</h2>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <h2>All Employees</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->employee_id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->start_date }}</td>
                    <td>{{ $employee->description }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
