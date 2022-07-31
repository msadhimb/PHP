<?php

namespace Controllers;

use App\Models\Mhsmodel;
use Models\Model_mhs;

class Mahasiswa
{
    public function __construct()
    {
        $this->mhs = new Model_mhs();
    }

    public function index()
    {
        require_once 'app/Views/index.php';
    }

    function show_data()
    {
        if (!isset($_GET['i'])) {
            //jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
            $rs = $this->mhs->lihatData();
            require_once('app/Views/mhsList.php');
        } else {
            //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
            $rs = $this->mhs->lihatDataDetail($_GET['i']);
            require_once('app/Views/mhsDetail.php');
        }
    }

    function save()
    {
        $nim =  $_POST['nim'];
        $nama = $_POST['nama'];

        //penyimpanan data ke model
        $this->mhs->simpanData($nim, $nama);
        $this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
    }

    function editData()
    {
        //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
        $rs = $this->mhs->lihatDataDetail($_GET['i']);
        require_once('app/Views/editData.php');
    }

    function editedData()
    {
        $nim =  $_POST['nim'];
        $nama = $_POST['nama'];
        $id_dari_form = $_POST['id'];

        $id = explode("|", base64_decode($id_dari_form));
        $data = ['nim' => $nim, 'nama' => $nama, 'id' => $id['1']];
        $this->mhs->editData($data);
        header("Location:/Kuliah/Kuliah%204/Pertemuan%2011/mvc-example/?act=tampil-data");
    }

    function deleteData()
    {
        $this->mhs->deleteDataModel($_GET['i']);
        header("Location:/Kuliah/Kuliah%204/Pertemuan%2011/mvc-example/?act=tampil-data");
    }
}
