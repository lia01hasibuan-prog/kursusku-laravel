<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $siteName = 'KursusKu';
        $tagline = 'Belajar Teknologi, Bangun Masa Depan';
        
        // Data untuk dropdown
        $courses = [
            'WEB-01' => 'Web Dasar',
            'PHP-01' => 'PHP Dasar',
            'LAR-01' => 'Laravel Fundamental',
            'JS-01' => 'JavaScript Dasar',
        ];
        
        $methods = [
            'online' => 'Online (Live)',
            'offline' => 'Offline (Tatap Muka)',
            'hybrid' => 'Hybrid (Campuran)',
        ];
        
        return view('pendaftaran', compact('siteName', 'tagline', 'courses', 'methods'));
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'hp' => 'required|string|max:15',
            'prodi' => 'required|string|max:100',
            'kursus' => 'required',
            'metode' => 'required',
            'jenis' => 'required|in:mahasiswa,umum,guru',
            'minat' => 'required|array',
            'catatan' => 'nullable|string',
        ]);
        
        // Untuk sementara, tampilkan data yang diinput
        return response()->json([
            'message' => 'Pendaftaran berhasil!',
            'data' => $validated
        ]);
    }
}