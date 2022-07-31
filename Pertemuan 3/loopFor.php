<?php
    /**
     * Looping dengan for digunakan jika kita sudah mengetahu9i berapa kali loopingnya
     */

     $end = 11;
     $sum = 0;
     $genap = 0;
     $ganjil = 0;
     for ($start = 1; $start <= $end; $start++){
        // tampilkan sum of $start
         $sum = $start + $sum;
         if($start == $end){
             echo $start, " = ";
            }else{
                echo $start, " + ";
         }

         // tampilkan jumlah bilangan ganjil dan genap
         if($start % 2 == 0){
             $genap++;
         }elseif($start % 2 == 1){
            $ganjil++;
         }
        
     }

     echo $sum;
     echo "<br>Nilai akhir dari variabel start : ", $sum, "<br><br>"; //1 - 11
     
     echo "jumlah bilangan ganjil = ", $ganjil;
     echo "<br>jumlah bilangan genap = ", $genap;

     
?>