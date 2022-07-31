<?php
    namespace App\User;

    class User{
        function __construct(){
            
        }

        function index(){
            echo "Hello World";
        }

        function bilGanjil($a){
            if($a%2 == 0){
                echo "1. ".$a." adalah Bilangan Genap";
            }else{
                echo "1. ".$a." adalah Bilangan Ganjil";
            }
        }

        function bilPrima($a){
            echo "2. Bilangan prima antara 0 sampai ".$a." : ";
            for($a; $a > 0;$a--){
                if($a % 2 == 1){
                    if($a == 1){
                        echo "2 ";
                    }else{
                        echo $a." ";
                    }
                }
            }
        }


    }
