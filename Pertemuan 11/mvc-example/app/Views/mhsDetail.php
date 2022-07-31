<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<style>
		body{
			background-color: #2A2550;
		}
		.container{
            margin-bottom: 50px;
			margin-top: 50px;
        }
		.data{
			width: 50%;
			margin-top: 30px;
			background-color: #251D3A;
			padding: 50px 0;
			border-radius: 20px;
		}
	</style>
  </head>
  <body>
	<!-- Awal Navbar -->
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand ms-4" href="#">CRUD - Model View Controller</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto me-4">
					<li class="nav-item">
					<a class="nav-link disabled" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link disabled" href="/mvc-example/?act=tampil-data">Data</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Akhir Navbar -->

	<!-- Awal Data -->
    <div class="container text-white">
		<h1 class="text-center mb-3">Data Mahasiswa</h1>
		<div class="row justify-content-center">
			<div class="data text-center">
				<h4>Id : <?php echo $rs['id']?> </h4>
				<h4>Nama : <?php echo $rs['nama']?> </h4>
				<h4>Nim : <?php echo $rs['nim']?> </h4>
			</div>
		</div>
	</div>
	<!-- Akhir Data -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>