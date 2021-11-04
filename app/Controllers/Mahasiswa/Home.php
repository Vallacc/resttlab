<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Mahasiswa";
        return view("halaman/mahasiswa", $data);
    }
}
