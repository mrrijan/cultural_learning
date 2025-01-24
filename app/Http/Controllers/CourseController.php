<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function bookMentor($language_id, $mentor_id)
    {
        $now = Carbon::now();
        $user = Auth::user();

        Course::create([
            "language_id" => $language_id,
            "mentor_id" => $mentor_id,
            "user_id" => $user->id,
            "booked_date" => $now
        ]);

        return redirect()->back()->with('success', 'Booked Successfully');
    }
    public function showOngoingCourses($mentor_id)
    {
        $courses = Course::where("mentor_id", $mentor_id)
            ->where("accepted_at",null)
            ->get();
        return view("course.requestedCourses", compact("courses"));
    }

    public function showAcceptedCourses($mentor_id)
    {
        $courses = Course::where("mentor_id", $mentor_id)
            ->whereNotNull("accepted_at")
            ->get();
        return view("course.acceptedCourses", compact("courses"));
    }
    public function acceptCourse($course_id)
    {
        $now = Carbon::now();

        $course = Course::where("id", $course_id)->first();
        $course->accepted_at = $now;
        $course->save();

        return redirect("/dashboard/mentor");
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
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
