<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mhsmodel;


class Mahasiswa extends Controller
{

    function __construct()
    {
        $this->mhs = new Mhsmodel();
    }

    function index()
    {
        $data["data"] = $this->mhs->getDataMhs();
        return view('mhsList', $data);
    }
}
