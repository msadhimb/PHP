<?php
    /*
        A11 = Teknik Informatika - S1
        A12 = Sistem Infromasi - S1
        B11 = Manajemen - S1
        B12 = Akuntansi - S1
    */
    $progdi = 'G12';

    if($progdi == 'A11'){
        echo "Teknik Informatika - S1";
    }elseif($progdi == 'B11'){
        echo "Manajemen - S1";
    }else if($progdi == 'A12'){
        echo "Sistem Informasi - S1";
    }else if($progdi == 'B12'){
        echo "Akuntansi - S1";
    }else{
        echo "Tidak ada progdi yang dimaksud";
    }

    // perbedaan switch dengan if adalah jika if bisa menggunakan range
?>