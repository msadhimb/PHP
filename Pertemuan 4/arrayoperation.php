<?php

	$cars = ["Volvo","BMW","Toyota"];

	$jumlah = count($cars);

	echo $cars[0]," ",$cars[1]," ",$cars[2],"<br>";

	for($i=0;$i<$jumlah;$i++)
	{
		echo $cars[$i],"<br>";
	}

	echo "<br><br>";

	foreach($cars as $mobil)
	{	
		echo $mobil,"<br>";
	}
