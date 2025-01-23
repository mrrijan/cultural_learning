<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProfileController;
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
Route::get('/dashboard/course/create/{mentor_id}',[MentorController::class,'create']);

//for mentors
Route::get('/dashboard/mentor',[MentorController::class,'index'])->name('mentor.dashboard');
Route::get("/dashboard/mentor/add",[MentorController::class,'create'])->name('mentor.add');
Route::post("/dashboard/mentor/create",[MentorController::class,'store'])->name('mentor.store');
Route::get("/dashboard/mentor/edit/{mentor_id}",[MentorController::class,'edit'])->name('mentor.edit');
Route::post("/dashboard/mentor/update",[MentorCOntroller::class,'update'])->name('mentor.update');

//for courses
Route::get("/dashboard/ongoing-courses/{mentor_id}",[CourseController::class,'showOngoingCourses'])->name('mentor.showOnGoingCourses');
Route::get("/dashboard/course/accept/{course_id}",[CourseController::class,'acceptCourse'])->name('mentor.acceptCourse');
Route::get("/dashboard/accepted-courses/{mentor_id}",[CourseController::class,'showAcceptedCourses'])->name('mentor.showAcceptedCourses');
require __DIR__.'/auth.php';
