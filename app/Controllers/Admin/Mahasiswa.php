<?php

namespace App\Controllers\Admin;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{

    protected $modelName = "App\Models\MahasiswaModel";
    protected $format = "json";
    protected $rest;
    public function __construct()
    {
        $this->rest = new Rest();
    }
    public function index()
    {
        $mahasiswa = $this->model->findAll();
        $data = [
            "title" => 'Mahasiswa || Laboratorium',
            "mahasiswa" => $mahasiswa
        ];
        return view("halaman/mahasiswa", $data);
    }

    public function sync()
    {
        $cek = $this->model->findAll();
        if (count($cek) == 0) {
            $mahasiswaAktif = $this->rest->callRest('mahasiswa');
            $result = $this->model->insertBatch($mahasiswaAktif);
            return $this->respond($result);
        }
    }

    public function detail($nim)
    {
        $mahasiswa = $this->model->where(['nim' => $nim])->first();
        $data = [
            'title' => 'Detail',
            'mahasiswa' => $mahasiswa
        ];
        return view('halaman/mahasiswa', $data);
    }
}
