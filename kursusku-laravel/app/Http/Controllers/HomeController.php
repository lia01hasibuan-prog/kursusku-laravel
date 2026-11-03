<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $siteName = 'KursusKu';
        
        // ✅ PERUBAHAN 1: Tambahkan variabel tagline
        $tagline = 'Belajar Teknologi, Bangun Masa Depan'; 

        $featured = [
            [
                'code' => 'WEB-01',
                'name' => 'Web Dasar',
                'description' => 'Belajar struktur HTML dan CSS dasar.',
            ],
            [
                'code' => 'PHP-01',
                'name' => 'PHP Dasar',
                'description' => 'Belajar variabel, function, form, dan logika PHP.',
            ],
            [
                'code' => 'LAR-01',
                'name' => 'Laravel Fundamental',
                'description' => 'Belajar route, controller, Blade, dan MVC.',
            ],
        ];

        // ✅ PERUBAHAN 2: Masukkan 'tagline' ke dalam compact()
        return view('home', compact('siteName', 'tagline', 'featured'));
    }
}