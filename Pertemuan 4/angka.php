<?php

	$angka1 = 74.9763;
	
	$angka2 = -$angka1;

	echo "Angka absolut dari $angka2: ",abs($angka2),"<br>";
	echo "Akar pangkat 2 dari $angka1: ",sqrt($angka1),"<br>";
	echo "Pembulatan untuk $angka1:",round($angka1,2),"<br>";
	echo "Pembulatan ke atas dari $angka1: ",ceil($angka1),"<br>";
	echo "Pembulatan ke bawah dari $angka1: ",floor($angka1),"<br>";

	echo "<br><br>Angka acak<br>";
	echo rand(),"<br>";
	echo rand(0,10000),"<br>";
