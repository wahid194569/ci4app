<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // method index / method UTAMA
    public function index()
    {
        $data = [
            'title' => 'Sistem Pengajuan Surat Izin Cuti',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        // cari file namanya home.php dalam folder views
        // echo view('layout/header', $data);
        return view('pages/home', $data);
        // echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
        ];

        // cari file namanya about.php dalam folder views
        // echo view('layout/header', $data);
        return view('pages/about', $data);
        // echo view('layout/footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
        ];

        return view('pages/contact', $data);
    }
}
