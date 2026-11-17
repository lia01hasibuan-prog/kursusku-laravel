<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::create([
            'code'        => 'WEB-101',
            'name'        => 'Web Dasar',
            'description' => 'Belajar HTML, CSS, dan JavaScript dasar.',
            'status'      => '1',  // ← Gunakan '1', bukan 'active'
            'quota'       => 30,
        ]);

        Course::create([
            'code'        => 'LRV-101',
            'name'        => 'Laravel Dasar',
            'description' => 'Belajar framework Laravel untuk pemula.',
            'status'      => '1',  // ← Gunakan '1'
            'quota'       => 25,
        ]);

        Course::create([
            'code'        => 'PYT-101',
            'name'        => 'Python Dasar',
            'description' => 'Belajar Python dari nol.',
            'status'      => '1',  // ← Gunakan '1'
            'quota'       => 20,
        ]);
    }
}