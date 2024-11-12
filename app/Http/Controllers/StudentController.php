<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = student::all();
        return view('backend.students.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('backend.students.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'course_id' => 'required|integer|exists:courses,id',
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'dob' => 'required|date',
        //     'phone' => 'required|string',
        // ]);

        $student = new Student();
        $student->course_id = $request->input('course_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->dob = $request->input('dob');
        $student->phone= $request->input('phone');
        $student->save();

        return redirect()->back()->with('success', 'Student created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student = Student::findOrFail($id);
        return view('backend.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $student = Student::findOrFail($id);
        return view('backend.students.edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //



        $student = Course::findOrFail($id);

        $student->course_id = $request->input('course_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->dob = $request->input('dob');
        $student->phone= $request->input('phone');
        $student->save();

        return redirect()->back()->with('success', 'Student updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::findOrFail($id);
        return view('backend.students.delete', compact('student'));


    }
}
