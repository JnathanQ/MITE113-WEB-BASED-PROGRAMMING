<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    Public function create()
    {
        return view('students.create');
    }

    Public function store(Request $request)
    {
        $validatedData = $request-> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'program' => 'required|string|max:255',
            'year' => 'required|integer|min:1|max:5',
            'id_number' => 'required|string|max:20|unique:students,id_number'
             ]);

        Student::create($validatedData);

        return redirect() ->route('students.index')->with('sucsess','Student created successfully');
    }
    public function show(Student $student)
    {
        return view('students.show', compact('student'));

    }
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));

    }
    Public function update(Request $request, Student $student)
    {
        $validatedData = $request-> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'program' => 'required|string|max:255',
            'year' => 'required|integer|min:1|max:5',
            'id_number' => 'required|string|max:20|unique:students,id_number,' . $student->id,
             ]);

        $student->update($validatedData);

        return redirect() ->route('students.index')->with('sucsess','Student updated successfully');
    }
   public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('sucsess','Student deleted successfully');

    }
}
