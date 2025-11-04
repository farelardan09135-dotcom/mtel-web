<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        $towers = [
            [
                'name' => 'SST 3 Leg Siku 42M',
                'description' => 'Tower baja dengan struktur 3 kaki siku, digunakan untuk telekomunikasi menengah.',
                'heights' => [
                    [
                        'height' => '42m',
                        'variants' => [
                            [
                                'variant_code' => 'B',
                                'antenna_load' => [
                                    '- 1 MW Ø 1.2m EL. 41 m',
                                    '- 1 MW Ø 0.6m EL. 41 m',
                                    '- 3 SECTORAL (2.68x0.35x0.16m), EL. 40 m',
                                    '- 3 SECTORAL (2.68x0.35x0.16m), EL. 37 m',
                                    '- 6 RRU (0.40x0.30x0.17m), EL. 40 m',
                                    '- 3 RRU (0.40x0.30x0.17m), EL. 37 m',
                                ],
                                'design_criteria' => [
                                    'Basic wind speed 120 km/h (33.33 m/s, 3 Sec - Gust)',
                                    'Twist and sway < 0.50 degree at operational wind speed 97.2 km/h',
                                    'Deflection < H/200 at operational wind speed 97.2 km/h',
                                    'Design standard : TIA-222-G',
                                    'Classification of structure : 2 (hazard to human life)',
                                    'Topographic category : 1 (flat or rolling terrain)',
                                    'Exposure category : B (urban and sub-urban areas, wooded areas)',
                                ],
                                'design_seismic' => [
                                    'Standard : SNI-03-1726-2019',
                                    'PGA short period (Ss) : 1.5',
                                    'PGA 1sec period (S1) : 0.6',
                                    'Soil type : SE (Tanah lunak, N-SPT<5 / qc<20 kg/cm²)',
                                    'Risk category : III',
                                ],
                                'design_capacity' => [
                                    'Strength ratio : 0.890 < 0.90',
                                    'Twist (degree) : 0.020 < 0.50',
                                    'Sway (degree) : 0.211 < 0.50',
                                    'Displacement (m) : 0.092 < H/200 (0.36)',
                                    'Frequency (Hz) : < 1.00',
                                ],
                                'design_material' => [
                                    'Steel shape & plate : ASTM A36 / JIS G3101 / SS400',
                                    'Bolt & nuts (galvanized) : ASTM A325 / JIS B1180 (GRADE 8.8)',
                                    'Anchor bolt : ASTM A307',
                                    'Hot dip galvanized : ASTM A123 (90 micron thickness)',
                                    'Welds : AWS D1.1 E601XX',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        // Kirim data ke view
        return view('sst3leg', compact('towers'));
    }
}
