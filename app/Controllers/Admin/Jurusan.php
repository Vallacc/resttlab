<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JurusanModel;
use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Jurusan extends ResourceController
{
    protected $rest;
    // protected $dataJurusan;
    public function __construct()
    {
        $this->rest = new Rest();
        // $this->dataJurusan = new JurusanModel();
    }
    public function index()
    {
        $jurusan = $this->rest->callRest('ProgramStudi');


        $data = [
            "title" => 'Jurusan || Laboratorium',
            "jurusab" => $jurusan
        ];
        return view("halaman/jurusan", $data);
    }
}
