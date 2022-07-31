<?php
	$username = $_POST['uname'];
	$password = $_POST['passwd'];

	if($username == 'salmanAdhim' AND $password == 'semarang123'){
		session_start();//untuk memulai session
		//melakukan assignment terhadap variabel session
		$_SESSION['uname'] = $username;
		$_SESSION['jam_mulai'] = date("Y-m-d H:i:s");
		$_SESSION['jam_selesai'] = date("Y-m-d H:i:s",strtotime("+1 hour"));
		$_SESSION['isLogin'] = true;

		header("Location: home.php");
	}else{
		echo "Username atau password salah";
	}
