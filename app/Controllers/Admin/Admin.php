<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin || Laboratorium'
        ];
        return view('halaman/admin', $data);
    }
}
