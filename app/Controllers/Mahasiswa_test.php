<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{
    protected $rest;

    function __construct()
    {
        $this->rest = new Rest();
    }
    public function index()
    {
        $mahasiswaAktif = $this->rest->callRest('mahasiswalab');
        dd($mahasiswaAktif);
        die;
        $data = [
            'title' => 'Home || Mahasiswa',
            'mahasiswaAktif' => $mahasiswaAktif
        ];
        return view('halaman/mahasiswa', $data);
        // return $this->respond($data);
    }
}
