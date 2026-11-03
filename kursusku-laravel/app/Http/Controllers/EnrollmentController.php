<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // 1. Menampilkan halaman form pendaftaran
    public function create()
    {
        $siteName = 'KursusKu';
        $tagline = 'Belajar Teknologi, Bangun Masa Depan';

        // Data untuk dropdown
        $courses = [
            'WEB-01' => 'Web Dasar',
            'PHP-01' => 'PHP Dasar',
            'LAR-01' => 'Laravel Fundamental',
            'JS-01'  => 'JavaScript Dasar',
        ];

        $methods = [
            'online'  => 'Online (Live Zoom)',
            'offline' => 'Offline (Tatap Muka)',
            'hybrid'  => 'Hybrid (Campuran)',
        ];

        return view('pendaftaran', compact('siteName', 'tagline', 'courses', 'methods'));
    }

    // 2. Memproses data saat form disubmit
    public function store(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'nama'    => 'required|string|max:100',
            'email'   => 'required|email',
            'hp'      => 'required|string|max:15',
            'prodi'   => 'required|string|max:100',
            'kursus'  => 'required',
            'metode'  => 'required',
            'jenis'   => 'required|in:mahasiswa,umum,guru',
            'minat'   => 'required|array|min:1',
            'catatan' => 'nullable|string',
        ]);

        // Untuk praktikum ini, kita cukup tampilkan pesan sukses
        return back()->with('success', 'Pendaftaran berhasil dikirim! Tim kami akan menghubungi Anda via email.');
    }

    // 3. ✅ TAMBAHKAN METHOD INI: Untuk fitur cek sisa kursi (API)
    public function cekKursi(Request $request)
    {
        // Ambil nama kursus yang dipilih dari URL (?kursus=NamaKursus)
        $namaKursus = $request->query('kursus');
        
        // Data simulasi sisa kursi (sesuai punya temanmu)
        $dataKursi = [
            'Web Dasar' => 18,
            'PHP Dasar' => 15,
            'Laravel Fundamental' => 12,
            'JavaScript Dasar' => 20,
        ];

        // Kirim balik data dalam format JSON
        return response()->json([
            'kursus' => $namaKursus,
            'sisa' => $dataKursi[$namaKursus] ?? 0 // Jika tidak ketemu, tampilkan 0
        ]);
    }
}