<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function showUnverifiedMentors()
    {
        $mentors = Mentor::where("verified",0)->latest()->paginate(10);
        return view('admin.unverifiedMentors',compact('mentors'));
    }

    public function showVerifiedMentors()
    {
        $mentors = Mentor::where("verified",1)->latest()->paginate(10);
        return view('admin.verifiedMentors',compact('mentors'));
    }
    public function verifyMentor($mentor_id)
    {
        $mentor = Mentor::where("id",$mentor_id)->first();

        $mentor->verified = 1;
        $mentor->save();

        return redirect()->back();
    }

    public function unverifyMentor($mentor_id)
    {
        $mentor = Mentor::where("id",$mentor_id)->first();

        $mentor->verified = 0;
        $mentor->save();

        return redirect()->back();
    }
}
