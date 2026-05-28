<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    public function show(): JsonResponse
    {
        return response()->json($this->profilePayload());
    }

    private function profilePayload(): array
    {
        return [
            'profile' => [
                'name' => 'Kevin',
                'location' => 'Indonesia',
                'email' => 'kevin@example.com',
            ],
            'education' => [
                [
                    'period' => '2021 - 2024',
                    'school' => 'SMP',
                    'detail' => 'Mulai aktif belajar teknologi, desain sederhana, dan kerja kelompok.',
                ],
                [
                    'period' => '2024 - Sekarang',
                    'school' => 'SMK / SMA',
                    'detail' => 'Fokus mengembangkan dasar web development, problem solving, dan portfolio pribadi.',
                ],
            ],
            'skills' => [
                'HTML',
                'CSS',
                'JavaScript',
                'React.js',
                'Laravel',
                'UI Layout',
            ],
            'hobbies' => [
                [
                    'name' => 'Ngoding ringan',
                    'detail' => 'Eksperimen bikin halaman web kecil dan mencoba komponen baru.',
                ],
                [
                    'name' => 'Desain visual',
                    'detail' => 'Mencari layout, warna, dan tampilan yang terasa rapi tapi tetap personal.',
                ],
                [
                    'name' => 'Musik dan game',
                    'detail' => 'Tempat reset pikiran setelah belajar atau mengerjakan tugas.',
                ],
            ],
        ];
    }
}
