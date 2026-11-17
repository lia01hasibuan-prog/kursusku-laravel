<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participant;

class ParticipantSeeder extends Seeder
{
    public function run(): void
    {
        Participant::create([
            'name'  => 'Alya Rahma',
            'email' => 'alya@example.test',
            'phone' => '081234567890',
        ]);

        Participant::create([
            'name'  => 'Budi Santoso',
            'email' => 'budi@example.test',
            'phone' => '081234567891',
        ]);

        Participant::create([
            'name'  => 'Citra Dewi',
            'email' => 'citra@example.test',
            'phone' => '081234567892',
        ]);
    }
}