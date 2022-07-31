<?php

    require_once __DIR__."/vendor/autoload.php";

    use App\User\User;

    $coba = new User();
    $coba->index();
    echo "<br>";
    
    $coba->bilGanjil(4);
    echo "<br>";
    $coba->bilPrima(6);
    