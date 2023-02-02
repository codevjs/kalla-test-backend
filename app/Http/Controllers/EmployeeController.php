<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        
        // return $students;
        return response()->json([
            'data' => $employee,
            'message' => 'Employee fetched successfully'
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_induk' => 'required',
            'created_by' => 'required',
        ]);
      
        Employee::create($request->all());

        return response()->json([
            'message' => 'Employee created successfully'
        ], 200); 
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'no_induk' => 'required',
            'updated_by' => 'required',
        ]);
      
        $employee->update($request->all());
      
        return response()->json([
            'message' => 'Employee updated successfully'
        ], 200); 
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
       
        return response()->json([
            'message' => 'Employee deleted successfully'
        ], 200); 
    }
}
