<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     */
    public function index()
    {
        $students = Student::all(); // Retrieve all students
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:50|unique:students,registration_number',
            'INT221_marks' => 'required|integer|between:0,100',
        ]);

        // Create a new student record
        Student::create([
            'name' => $request->name,
            'registration_number' => $request->registration_number,
            'INT221_marks' => $request->INT221_marks,
        ]);

        // Redirect to the student list with a success message
        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    /**
     * Show the form for editing the specified student.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student in storage.
     */
    public function update(Request $request, Student $student)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:50|unique:students,registration_number,' . $student->id,
            'INT221_marks' => 'required|integer|between:0,100',
        ]);

        // Update student record
        $student->update([
            'name' => $request->name,
            'registration_number' => $request->registration_number,
            'INT221_marks' => $request->INT221_marks,
        ]);

        // Redirect to the student list with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified student from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete(); // Delete the student

        // Redirect to the student list with a success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
