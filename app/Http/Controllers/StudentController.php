<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        
        // return $students;
        return response()->json([
            'students' => $students,
            'message' => 'Students fetched successfully'
        ], 200);
    }
}
