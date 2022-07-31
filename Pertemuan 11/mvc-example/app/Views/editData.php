<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<style>
		body{
			background-color: #FF7700;
			overflow-y: hidden;
		}
		.back{
			height: 80vh;
			background-color: #2A2550;
			margin-bottom: -20vh;
		}
		.input{
      		width: 40%;
			margin-bottom: -15px;
			padding-top: 50px;
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

	<div class="container-fluid back">
		<!-- Awal Form -->
		<div class="container input text-white">
			  <h1 class="text-center mb-3">Edit Data</h1>
			  <form method="POST" action="/Kuliah/Kuliah%204/Pertemuan%2011/mvc-example/?act=edited">
			  <div class="mb-3">
				  <label for="exampleInputEmail1" class="form-label">Nama</label>
				  <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $rs['nama']?>">
			  </div>
			  <div class="mb-3">
				  <label for="exampleInputPassword1" class="form-label">Nim</label>
				  <input type="text" class="form-control" id="exampleInputPassword1" name="nim" value="<?php echo $rs['nim'] ?>">
				  <input type="hidden" name="id" value="<?php echo base64_encode(sha1(rand())."|".$rs['id'])?>">
			  </div>
			  <button type="submit" class="btn btn-danger">Save</button>
		  </form>
		  </div>
		<!-- Akhir Form -->
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF7700" fill-opacity="1" d="M0,224L0,128L288,128L288,256L576,256L576,32L864,32L864,96L1152,96L1152,256L1440,256L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z"></path></svg>
	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>