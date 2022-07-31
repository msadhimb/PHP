<?php
	$ipk = ['joko'=>3.5,
		'budi'=>2.7,
		'indah'=>3.8,
		'akbar'=>2.5,
		'joni'=>3.1,
	];

	$ipk['tomi'] = 4.0;

	$jml_data = count($ipk);
	$jml_size = sizeof($ipk);
	echo $jml_data," ",$jml_size,"<br>";
	
	foreach($ipk as $key=>$value)
	{
		echo "IPK dari ",$key," adalah ",$value,"<br>";
	}

	$sum = 0;
	foreach($ipk as $dataipk)
	{
		$sum+=$dataipk;
	}
	echo "Rata-rata IPK: ",round(($sum/$jml_data),2),"<br>";

	echo max($ipk),"<br>",min($ipk),"<br>";
	exit();
	$angka = 838774.93383626;
	echo number_format($angka,2);
