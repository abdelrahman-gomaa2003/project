<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;



class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:departments,name',
        'faculty' => 'nullable|string', // optional validation
    ]);

    Department::create([
        'name' => $request->name,
        'faculty' => $request->faculty, // ← ضيف faculty هنا
    ]);

    return redirect()->route('departments.index')->with('success', 'Department created successfully');
}


    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:departments,name,' . $id,
        ]);

        $department = Department::findOrFail($id);
        $department->update([
            'name' => $request->name,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully');
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully');
    }
}
