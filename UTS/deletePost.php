<?php
     include "database.php";

     $id = explode("|", base64_decode($_GET['id']));

     $del = $db->prepare("DELETE FROM post WHERE post_id=?");
     $del->execute([$id[1]]);

     $delFile = $db->prepare("SELECT post_image FROM post WHERE post_id=?");
     $delFile->execute([$id[1]]);

     header("Location: post.php");
?>