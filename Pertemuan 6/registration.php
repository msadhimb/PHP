<!DOCTYPE html>
<html>

<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<h3>Registration Form</h3><br><br>
			<?php
			if (isset($_GET['msg'])) {
				if ($_GET['msg'] == 'not-match') {
			?>
					<div class="alert alert-danger">Password dan Confirm password tidak cocok</div>
				<?php
				} elseif ($_GET['msg'] == 'success') {
				?>
					<div class="alert alert-success">User berhasil dibuat</div>
			<?php
				}
			}
			?>

			<form method="post" action="save_form.php" class="form-group">
				<label>Username *)</label>
				<input class="form-control" name="username" type="text" required><br>
				<label>Password *)</label>
				<input class="form-control" name="passwd" type="password" required><br>
				<label>Confirm Password *)</label>
				<input class="form-control" name="cpasswd" type="password" required><br>
				<input class="btn btn-primary" value="Save" type="submit">
			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</body>

</html>