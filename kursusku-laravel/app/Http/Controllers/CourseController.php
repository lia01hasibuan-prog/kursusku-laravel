<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // 1. Tampilkan daftar kursus
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses.index', compact('courses'));
    }

    // 2. Tampilkan form tambah kursus
    public function create()
    {
        return view('courses.create');
    }

    // 3. Simpan kursus baru ke database
    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil ditambahkan.');
    }

    // 4. Tampilkan detail satu kursus
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // 5. Tampilkan form edit kursus
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // 6. Simpan perubahan kursus
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        return to_route('courses.show', $course)
            ->with('success', 'Kursus berhasil diperbarui.');
    }

    // 7. Hapus kursus
    public function destroy(Course $course)
    {
        $course->delete();

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil dihapus.');
    }
}