<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('subjects')->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('students.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'subjects' => 'array|required'
        ]);

        $student = Student::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
        ]);

        // Attach selected subjects
        $student->subjects()->attach($validated['subjects']);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        // $student = Student::findOrFail($id);
        // $subjects = Subject::all();
        // $studentSubjects = $student->subjects->pluck('id')->toArray();

        // return view('students.edit', compact('student', 'subjects', 'studentSubjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // $student = Student::findOrFail($id);

        // $student->update([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        // ]);

        // // Many-to-Many update (sync)
        // $student->subjects()->sync($request->subject_ids);

        // return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
