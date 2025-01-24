<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Mentor;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function beginnerMentors($language_id)
    {
        $mentors = Mentor::where("language_id", $language_id)
            ->where("type", "beginner")
            ->where("verified", 1)
            -> get();
        return view("language.beginnerMentors", compact("mentors", "language_id"));
    }

    public function intermediateMentors($language_id)
    {
        $mentors = Mentor::where("language_id", $language_id)
            ->where("type", "intermediate")
            ->where("verified", 1)
            -> get();
        return view("language.beginnerMentors", compact("mentors", "language_id"));
    }

    public function expertMentors($language_id)
    {
        $mentors = Mentor::where("language_id", $language_id)
            ->where("type", "expert")
            ->where("verified", 1)
            -> get();
        return view("language.beginnerMentors", compact("mentors", "language_id"));
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
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        //
    }
}
