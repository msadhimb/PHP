<?php
    $x = 'a';
    $y = 'b';
    echo $x.$y.'cde', "\n";
    $y.= $x.$x;
    echo $y;