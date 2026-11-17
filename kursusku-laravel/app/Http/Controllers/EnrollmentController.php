<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['participant', 'course'])
            ->latest()
            ->get();

        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        // 1. Ambil semua participant, urutkan berdasarkan nama
        $participants = Participant::orderBy('name')->get();
        
        // 2. Ambil SEMUA course (TANPA filter status) agar dropdown PASTI terisi
        // Ini adalah "bulletproof fix" untuk menghindari masalah kolom status yang error sebelumnya
        $courses = Course::orderBy('name')->get();

        return view('enrollments.create', compact('participants', 'courses'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'participant_id' => ['required', 'exists:participants,id'],
            'course_id' => [
                'required',
                'exists:courses,id',
                Rule::unique('enrollments')->where(
                    fn($query) => $query->where('participant_id', $request->participant_id)
                ),
            ],
        ], [
            'course_id.unique' => 'Participant ini sudah terdaftar pada course tersebut.',
        ]);

        Enrollment::create($data);

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment berhasil disimpan.');
    }
}