<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $enrollments = Enrollment::all();
        return view('backend.enrollments.index', compact('enrollments'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students = Student::all();
        $courses = Course::all();
        return view('backend.enrollments.create_enr', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $enrollment = new Enrollment();
        $enrollment->student_name = $request->input('student_name');
        $enrollment->course_name = $request->input('course_name');

        $enrollment->save();
        return redirect()->back()->with('success', 'Student created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $enrollments = Enrollment::findOrFail($id);
        return view('backend.enrollments.show', compact('enrollments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $enrollments = Enrollment::findOrFail($id);
        return view('backend.enrollments.show', compact('enrollments'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $enrollment = Enrollment::findOrFail($id);

        $enrollment->student_name = $request->input('student_name');
        $enrollment->course_name = $request->input('course_name');

        $enrollment->save();
        return redirect()->back()->with('success', 'Student created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
