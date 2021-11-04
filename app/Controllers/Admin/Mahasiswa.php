<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;
use App\Models\RoleModel;

class Mahasiswa extends ResourceController
{
    protected $rest;
    protected $RoleModel;
    public function __construct()
    {
        $this->rest = new Rest();
        $this->RoleModel = new RoleModel();
    }
    public function index()
    {
        $mahasiswaAktif = $this->rest->callRest('mahasiswalab');
        $data = [
            'title' => 'Admin || Laboratorium',
            'mahasiswaAktif' => $mahasiswaAktif
        ];

        return view('halaman/admin', $data);
    }

    public function insert()
    {
    }

    public function read()
    {
    }
}
