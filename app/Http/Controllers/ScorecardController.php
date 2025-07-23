<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScorecardController extends Controller
{
    public function index()
    {
        return view('scorecard.me');
    }

    public function me()
    {
        $data = [
            (object)[
                'month' => 'January',
                'name' => 'Vivi Vina E Siregar',
                'superior' => 'Novita Sari',
                'program' => 'Layanan Kerjasama, Pembiayaan, Kepegawaian',
                'aht' => '00:04:10',
                'fcr' => '100.00%',
                'quiz' => '100.00%',
                'qm_score' => '100.00%',
                'absen' => 0
            ],
            // ... Tambahkan data lainnya jika perlu
        ];

        return view('scorecard.me', compact('data'));
    }

}

