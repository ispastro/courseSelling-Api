<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (only for logged-in users)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Course routes
    Route::post('/courses', [CourseController::class, 'store']);                 // Create course
    Route::get('/instructor/courses', [CourseController::class, 'myCourses']);   // List own courses
    Route::put('/courses/{id}', [CourseController::class, 'update']);            // Update course
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);   
         // Delete course

    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/{id}', [CourseController::class, 'show']);
    
    Route::post('/enroll/{course_id}', [EnrollmentController::class, 'enroll']);
    Route::get('/my-courses', [EnrollmentController::class, 'myCourses']);

    // search by name 

    Route::get('/courses/search', [CourseController::class, 'searchCourses']);

});
