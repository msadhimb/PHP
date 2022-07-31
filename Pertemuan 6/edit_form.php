<?php
    include "database.php";

    $uname = $_POST['username'];
    $passwd = $_POST['passwd'];
    $cpasswd = $_POST['cpasswd'];
    $id_dari_form = $_POST['id'];

    if($passwd==$cpasswd)
    {
    	$id = explode("|",base64_decode($id_dari_form));

        $psw = password_hash($passwd,PASSWORD_DEFAULT);

	    $upd = $db->prepare("UPDATE users SET username=?,passwd=? WHERE id=?");
	    $upd->execute([$uname,$psw,$id[1]]);
        header("Location: view_data.php?message=success");  	
    }
    else
    {
        header("Location: edit.php?message=not-match");
    }
?>
