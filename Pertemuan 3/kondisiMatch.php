<?php

    $food = 'cake';

    $myfood = match($food){
        'apple' => 'Saya makan apel',
        'coklat' => 'Saya makan coklat',
        'cake' => 'Saya makan cake',
    };

    echo $myfood;
?>