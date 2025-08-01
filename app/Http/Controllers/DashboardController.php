<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalDepartments = Department::count();
        $totalCourses = Course::count();
        $totalDoctors = Doctor::count();

        return view('dashboard', compact('totalStudents', 'totalDepartments', 'totalCourses', 'totalDoctors'));
    }
}

   