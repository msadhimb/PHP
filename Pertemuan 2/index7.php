<?php
    $t = date("H");
    echo "<p> The hour (of the server) is ".$t;
    echo ", and will give you the following message </p>";

    if ($t < "10"){
        echo "Have a good morning";
    } elseif ($t < "20"){
        echo "Have a good night";
    } else echo "Have a good night";
    
    echo date(" Y-M-D H:i:S");