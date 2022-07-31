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
		}
		.back{
			height: 80vh;
			background-color: #2A2550;
			margin-bottom: -40vh;
		}
		.tabel{
            width: 60%;
			position: relative;
			padding-top: 50px;
        }
		a{
			text-decoration: none;
			color: white;
		}
		a:hover{
			color: #E04D01;
		}
		.modal-header{
			background-color: #212529;
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
					<a class="nav-link" aria-current="page" href="/Kuliah/Kuliah%204/Pertemuan%2011/mvc-example/?act=home">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" href="#">Data</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Akhir Navbar -->

	<div class="container-fluid back">
		<!-- Awal Table -->
		<div class="container tabel text-white">
			<h1 class="text-center mb-5">List Data Mahasiswa</h1>
			<table class="table table-dark table-striped text-center">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nim</th>
						<th scope="col">Nama</th>
						<th scope="col">Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php 
						$i = 1;
						foreach ($rs as $mahasiswa => $list) { ?>
						<tr>
							<td> <?php echo $i ?> </td>
							<td><?php echo $list['nim'] ?></td>
							<td><a href="?act=tampil-data&i=<?php echo base64_encode(sha1(rand())."|".$list['id']) ?>"><?php echo $list['nama'] ?></a></td>
							<td><a class="btn btn-success edit" data-bs-toggle="modal" data-bs-target="#exampleModal" >Edit</a> | <a  class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">Delete</a></td>
						</tr>
						<?php 
							$i++;
						} ?>
					</tbody>
				</table>
		</div>
		<!-- Akhir Table -->
	</div>

	<!-- Modal 1-->
	<div class="modal fade dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header text-white">
					<h5 class="modal-title" id="exampleModalLabel">Confiramtion Needed</h5>
				</div>
				<div class="modal-body">
					Apakah anda yakin?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="?act=edit&i=<?php echo base64_encode(sha1(rand())."|".$list['id']) ?>" class="btn btn-danger">Edit</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 2-->
	<div class="modal fade dark" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header text-white">
					<h5 class="modal-title" id="exampleModalLabel">Confirmation Needed</h5>
				</div>
				<div class="modal-body">
					Apakah anda yakin?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="?act=delete&i=<?php echo base64_encode(sha1(rand())."|".$list['id'])?>" class="btn btn-danger">Delete</a>
				</div>
			</div>
		</div>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF7700" fill-opacity="1" d="M0,160L0,128L144,128L144,96L288,96L288,160L432,160L432,192L576,192L576,160L720,160L720,192L864,192L864,288L1008,288L1008,128L1152,128L1152,192L1296,192L1296,320L1440,320L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z"></path></svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>