<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->youtube_link = $request->input('youtube_link');
        $course->video_url = $request->input('video_url'); // Menyimpan URL video ke dalam field video_url
        $course->save();
    
        return redirect()->route('courses.index')->with('success', 'Kursus berhasil ditambahkan');
    }
}
