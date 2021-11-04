<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function admin()
    {
        $data = [
            'title' => 'Admin || Laboratorium'
        ];
        return view('halaman/admin', $data);
    }
    public function mahasiswa()
    {
        $data = [
            'title' => 'Home || Laboratorium'
        ];
        return view('halaman/mahasiswa', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Us!'
        ];
        return view('halaman/about', $data);
    }
}
