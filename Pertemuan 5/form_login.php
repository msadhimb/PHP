<?php
	if(isset($_GET['message']))
	{
		if($_GET['message']=='nologin')
		{
			echo "Anda harus login terlebih dahulu<br>";
		}
		elseif($_GET['message']=='logout')
		{
			echo "Anda berhasil logout";
		}
		elseif($_GET['message']=="blabla")
		{
			echo "Anda menulis blabla";
		}
	}
?>

	<form method="post" action="aksilogin.php">
		<p>Username:<br>
		<input type="text" name="uname" required>
		</p>

		<p>Password:<br>
		<input type="password" name="passwd" required>
		</p>
		
		<input type="submit" value="Login">
	</form>
