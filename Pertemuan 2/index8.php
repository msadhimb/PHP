<?php
     $nim = "A11.2019.12641";

     //menggunakan substring 
     $nimBlkg = substr($nim, -5);
     $nimTgh = substr($nim, 4, 4);
     $nimDpn = substr($nim, 0, 3);

     echo $nimDpn, " ", $nimTgh, " ", $nimBlkg, "<br>";

     //menggunakan explode 
     $_nim = explode(".", $nim);
     echo $_nim[0], $_nim[1], $_nim[2], "<br><br>";
     
     if (date("Y") == $_nim[1]){
         echo "Freshmen<br>";
     }else if($_nim[1] >= 2018 and $_nim[1] < date("t`Y")){
         echo "Existing student<br>";
     }else echo "old student<br>";
