<?php
    /*
        A = Fakultas Ilmu Komputer
        B = Fakultas Ekonomi dan BisniS
        C = Fakultas Ilmu Budaya
        D = Fakultas Kesehatan
        E = Fakultas Teknik
    */
    $fakultas = "C";
    switch($fakultas){
        case 'A': echo "Fakultas Ilmu Komputer"; break;
        case 'B': echo "Fakultas Ekonomi dan Bisnis"; break;
        case 'C': echo "Fakultas Ilmu Budaya"; break;
        case 'D': echo "Fakultas Kesehatan"; break;
        case 'E': echo "Fakultas Teknik"; break;
        default : echo "Fakultas tidak ditemukan"; break;
    }
?>