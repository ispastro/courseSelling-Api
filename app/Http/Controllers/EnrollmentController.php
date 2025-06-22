<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function enroll($course_id, Request $request)
    {
        $user = $request->user();
        $course = Course::findOrFail($course_id);

        // Check if already enrolled
        if ($course->students()->where('user_id', $user->id)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'You are already enrolled in this course.',
            ], 409);
        }

        // Enroll student with timestamp only
        $user->enrolledCourses()->attach($course_id, [

            'created_at' => now(),
    'updated_at' => now()
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Enrolled successfully.',
            'data' => [
                'course_id' => $course_id,
                'course_title' => $course->title,
                'enrolled_at' => now()->toDateTimeString(),
            ]
        ]);
    }

    public function myCourses(Request $request)
    {
        $courses = $request->user()->enrolledCourses()->with('instructor')->get();

        return response()->json([
            'status' => 'success',
            'courses' => $courses,
        ]);
    }
}
