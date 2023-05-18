<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.crud', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
{

    $validatedData = $request->validate([
        'employee_id' => 'required',
        'name' => 'required',
        'start_date' => 'required',
        'description' => 'required',
        'picture' => 'nullable|image',
    ]);

 
    if ($request->hasFile('picture')) {
        $picture = $request->file('picture');
        $picturePath = $picture->store('public/pictures');
        $validatedData['picture'] = $picturePath;
    } else {

        $validatedData['picture'] = null; 
    }


    $employee = Employee::create($validatedData);

    return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
}


    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'start_date' => 'required',
            'description' => 'required',
            'picture' => 'required|image',
        ]);

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $picturePath = $picture->store('public/pictures');
            $validatedData['picture'] = $picturePath;
        } else {
            $validatedData['picture'] = null;
        }

        $updated = $employee->update($validatedData);

        if ($updated) {
            return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update employee. Please try again.');
        }
    }





    public function destroy(Employee $employee)
    {
    
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }

}
