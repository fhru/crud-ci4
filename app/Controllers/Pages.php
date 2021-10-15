<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WPU',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | WPU'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Bitara 7',
                    'kota' => 'Bekasi'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Bintara 8',
                    'kota' => 'Bekasi'
                ]
            ]

        ];
        return view('pages/contact', $data);
    }
}
