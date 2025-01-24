<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("student.student");
    }

    public function showOngoingCourses($user_id)
    {
       $courses =  Course::where("user_id", $user_id)->whereNull("accepted_at")->get();
       return view("student.requestedCourses", ["courses" => $courses]);
    }

    public function showAcceptedCourses($user_id)
    {
        $courses = Course::where("user_id", $user_id)
            ->whereNotNull("accepted_at")
            ->get();
        return view("student.acceptedCourses", compact("courses"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
