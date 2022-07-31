<?php
	$string1 = 'abc';
	echo strlen($string1),"<br>";
	echo strrev($string1),"<br>";
	echo strpos($string1,'c'),"<br>";
	$string2="aku cinta udinus";
	echo "Jumlah kata pada $string2: ", str_word_count($string2),"<br>";
	
	echo str_replace(" ","-",$string2);
