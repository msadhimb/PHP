<?php

    #1
    $negaraAsia = ["Indonesia"=>"Jakarta", "India"=>"New Delhi", "Jepang"=>"Tokyo", "Cina"=>"Beijing", "Malaysia"=>"Kuala Lumpur", "Filipina"=>"Manila", "Korea Utara"=>"Pyongyang", "Korea Selatan"=>"Seoul", "Irak"=>"Teheran", "Iran"=>"Bahgdad", "Vietnam"=>"Hanoi", "Thailand"=>"Bangkok"];

    foreach($negaraAsia as $key => $value){
        echo $key, " ibu kotanya adalah ", $value, "<br>";
    }

    #2
    echo "<br>========================";

    $suhuUdara = [29,35,38,31,34,36,39,33,34,40,35,32,37,34,31,36,33,39,30,33,41];

    $sum = 0;
    foreach($suhuUdara as $value){
        $sum = $sum + $value;
    }
    //jika dijumlahkan masing masing angka dalam array maka menghasilkan angka 730
    echo "<br><br>a. Rata - rata suhu : ", round(($sum / sizeof($suhuUdara)), 1), "<br>";
    //kemudian angka tersebut dibagi oleh banyaknya angka dalam array, sebagaimana dalam array ada 21 angka maka
    // 730 / 21 = 34.8
    $newArray = array_unique($suhuUdara);
    asort($newArray);
    
    echo "b. 5 angka terkecil : ";
    foreach($newArray as $value){
        if($value >= $newArray[4]){
            break;
        }else{
            if($value == $newArray[4]-1){
                echo $value, " ";
            }else echo $value, ", ";
        }
    }

    echo "<br>c. 5 angka tertinggi : ";
    foreach($newArray as $value){
        if($value < end($newArray)-4){
            continue;
        }else{
            if($value == end($newArray)){
                echo $value, " ";
            }else echo $value, ", ";
        }
    }

    #3
    echo "<br>========================<br><br>";
    $rate = ['usd'=>14367,'jpy'=>1192,'cny'=>2262,'krw'=>11.87,'myr'=>3416,'sgd'=>10621,'gbp'=>19074,'eur'=>15891];

    $i = 8;
    foreach($rate as $key => $value){
        echo $i, " ", $key, " dikonversi menjadi Rp. ", $value*$i, "<br>";
        $i--;
    }