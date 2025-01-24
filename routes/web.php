<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//for courses
Route::get('/dashboard/course/create/{mentor_id}', [MentorController::class, 'create']);

Route::middleware(["auth", "role:mentor"])->group(function () {
    //for mentors
    Route::get('/dashboard/mentor', [MentorController::class, 'index'])->name('mentor.dashboard');
    Route::get("/dashboard/mentor/add", [MentorController::class, 'create'])->name('mentor.add');
    Route::post("/dashboard/mentor/create", [MentorController::class, 'store'])->name('mentor.store');
    Route::get("/dashboard/mentor/edit/{mentor_id}", [MentorController::class, 'edit'])->name('mentor.edit');
    Route::post("/dashboard/mentor/update", [MentorCOntroller::class, 'update'])->name('mentor.update');

//for courses
    Route::get("/dashboard/ongoing-courses/{mentor_id}", [CourseController::class, 'showOngoingCourses'])->name('mentor.showOnGoingCourses');
    Route::get("/dashboard/course/accept/{course_id}", [CourseController::class, 'acceptCourse'])->name('mentor.acceptCourse');
    Route::get("/dashboard/accepted-courses/{mentor_id}", [CourseController::class, 'showAcceptedCourses'])->name('mentor.showAcceptedCourses');
});

//for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get("/dashboard/mentors/unverified", [AdminController::class, 'showUnverifiedMentors'])->name('mentor.unverified');
    Route::get("/dashboard/mentor/verify/{mentor_id}", [AdminController::class, 'verifyMentor'])->name('mentor.verify');
    Route::get("/dashboard/mentors/verified", [AdminController::class, 'showVerifiedMentors'])->name('mentor.verified');
    Route::get("/dashboard/mentor/un-verify/{mentor_id}", [AdminController::class, 'unVerifyMentor'])->name('mentor.unVerify');
});

//for booking course
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get("/course/{language_id}/book/{mentor_id}",[CourseController::class, 'bookMentor'])->name('mentor.bookMentor');

    //for dashboard
    Route::get("/dashboard/student",[StudentController::class, 'index'])->name('student.dashboard');
    Route::get("/dashboard/requested-courses/{user_id}",[StudentController::class, 'showOngoingCourses'])->name('student.showOngoingCourses');
    Route::get("/dashboard/accepted-courses-student/{user_id}",[StudentController::class, 'showAcceptedCourses'])->name('student.showAcceptedCourses');
});
//for showing mentors according to language
Route::get("/{language_id}/beginner/mentors",[LanguageController::class, 'beginnerMentors'])->name('mentor.beginnerMentors');
Route::get("/{language_id}/intermediate/mentors",[LanguageController::class, 'intermediateMentors'])->name('mentor.beginnerMentors');
Route::get("/{language_id}/expert/mentors",[LanguageController::class, 'expertMentors'])->name('mentor.beginnerMentors');

require __DIR__ . '/auth.php';
