<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller


{

    // search 
    public function searchCourses(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        return response()->json(['status' => 'error', 'message' => 'Search query is required.'], 400);
    }

    $courses = Course::where('title', 'like', '%' . $query . '%')
        ->orderByRaw("LENGTH(title) - LENGTH(REPLACE(LOWER(title), LOWER(?), '')) DESC", [$query])
        ->get();

    return response()->json([
        'status' => 'success',
        'results' => $courses,
    ]);
}



    public function index()
{
    // Get all courses along with their instructors (eager loading)
    $courses = Course::with('instructor')->get();

    return response()->json([
        'status' => 'success',
        'courses' => $courses,
    ]);
}

public function show($id)
{
    // Find the course by id or throw 404 if not found, include instructor info
    $course = Course::with('instructor')->findOrFail($id);

    return response()->json([
        'status' => 'success',
        'course' => $course,
    ]);
}


    // 1. Create a new course
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $data['user_id'] = $request->user()->id;

        $course = Course::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Course created successfully',
            'course' => $course,
        ], 201);
    }

    // 2. List own courses
    public function myCourses(Request $request)
    {$user = $request->user();
    if (!$user) {
        return response()->json(['status' => 'error', 'message' => 'No authenticated user found']);
    }

    $courses = Course::where('user_id', $user->id)->get();

    if ($courses->isEmpty()) {
        return response()->json([
            'status' => 'success',
            'message' => 'No courses found for this instructor',
            'courses' => [],
        ]);
    }

    return response()->json([
        'status' => 'success',
        'courses' => $courses,
    ]);
    }

    // 3. Update owned course
    public function update(Request $request, $id)
    {
        $course = Course::where('id', $id)
                        ->where('user_id', $request->user()->id)
                        ->firstOrFail();

        $data = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'price' => 'sometimes|numeric|min:0',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($course->thumbnail) {
                Storage::disk('public')->delete($course->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $course->update($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Course updated successfully',
            'course' => $course,
        ]);
    }

    // 4. Delete owned course
    public function destroy(Request $request, $id)
    {
        $course = Course::where('id', $id)
                        ->where('user_id', $request->user()->id)
                        ->firstOrFail();

        if ($course->thumbnail) {
            Storage::disk('public')->delete($course->thumbnail);
        }

        $course->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Course deleted successfully',
        ], 200);
    }
}
