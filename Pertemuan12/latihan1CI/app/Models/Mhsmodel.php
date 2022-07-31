<?php

namespace App\Models;

use CodeIgniter\Model;

class Mhsmodel extends Model
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->db->table('mahasiswa')->get();
    }

    function getDataMhs()
    {
        $rs = $this->db->query("SELECT * FROM mahasiswa");
        return $rs;
    }
}
