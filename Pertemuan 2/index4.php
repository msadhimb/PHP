<?php
    $a = 10;
    $isGenap = $a % 2 == 0 ? 'true':'false';
    echo $isGenap, "<br>";

    echo $isGenap?? 'bilangan genap';