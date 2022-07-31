<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function print($nama = null, $sex = null)
    {
        echo "Selamat Datang " . $nama . ", " . $sex;
    }
}
