<?php
	session_start();
	if($_SESSION['isLogin'] != true || $_SESSION['jam_selesai']==date("Y-m-d H:i:s"))
	{
		header("Location: form_login.php?message=nologin");
	}
	echo "Selamat datang, ",strtoupper($_SESSION['uname'])," login pada: ",$_SESSION['jam_mulai'];
	echo "<br>";
?>
	<a href="logout.php">Input Data</a> | <a href="view_data.php">Tampil Data</a> | <a href="logout.php">Logout</a>