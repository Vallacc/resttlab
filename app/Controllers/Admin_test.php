<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Rest;


class Admin extends BaseController
{
    protected $rest;
    public function __construct()
    {
        $this->rest = new Rest();
    }
    public function index()
    {
        $mahasiswaAktif = $this->rest->callRest('');
        $data = [
            'title' => 'Home || Laboratorium',
            'mahasiswaAktif' => $mahasiswaAktif
        ];
        return view('halaman/admin', $data);
    }
}
