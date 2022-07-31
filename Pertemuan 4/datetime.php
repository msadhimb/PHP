<?php

	$tanggal = date("Y-m-d");
	echo "Tanggal hari ini adalah: $tanggal<br>";
	$besok = strtotime("tomorrow");
	$tglBesok = date("Y-m-d",$besok);
	echo "Tanggal besok adalah: $tglBesok<br>";

	$bulanDepan = strtotime("+1 Month");
	$tglBulanDepan = date("Y-m-d",$bulanDepan);
	echo "Tanggal bulan depan adalah: $tglBulanDepan<br>";

	$thnLalu = strtotime("-1 Year");
	$tglThnLalu = date("Y-m-d",$thnLalu);
	echo "Tanggal tahun lalu adalah: $tglThnLalu<br>";

	$tgl1 = date_create($tanggal);
	$tgl2 = date_create($tglBulanDepan);
	$diff = date_diff($tgl1,$tgl2);
	var_dump($diff);
