<?php

namespace App\Http\Controllers;

use App\Http\Requests\MentorStoreRequest;
use App\Http\Requests\MentorUpdateRequest;
use App\Models\Course;
use App\Models\Language;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $mentor = Mentor::where('user_id',$user->id)->first();
        return view('mentor.mentor',compact("user","mentor"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = Language::all();
        return view("mentor.createMentor", compact("languages"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MentorStoreRequest $request)
    {
        $user = Auth::user();

        $mentor = new Mentor();
        $mentor->name = $user->name;
        $mentor->user_id = $user->id;
        $mentor->type = $request->type;
        $mentor->language_id = $request->language;
        $mentor->address = $request->address;
        $mentor->email = $user->email;
        $mentor->phone = $request->phone;
        $mentor->save();

        return redirect("/dashboard/mentor");
    }


    /**
     * Display the specified resource.
     */
    public function show(Mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($mentor_id)
    {
        $languages = Language::all();
        $mentor = Mentor::where("id", $mentor_id)->first();
        return view("mentor.editMentor", compact("mentor", "languages"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MentorUpdateRequest $request)
    {
        $mentor = Mentor::where("id", $request->id)->first();

        $mentor->type = $request->type;
        $mentor->language_id = $request->language;
        $mentor->address = $request->address;
        $mentor->phone = $request->phone;
        $mentor->save();

        return redirect("/dashboard/mentor");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $mentor)
    {
        //
    }
}
