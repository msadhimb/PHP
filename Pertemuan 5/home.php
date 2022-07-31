<?php
	session_start();
	if($_SESSION['isLogin'] != true || $_SESSION['jam_selesai']==date("Y-m-d H:i:s"))
	{
		header("Location: form_login.php?message=nologin");
	}
?>
	
	<!-- 
		tugas 2:
		tambahkan form yang method-nya post ke halaman simpandata.php
		nama lengkap: text
		username : ambil dari session
		alamat: textarea
		jenis kelamin: radio, walaupun pilihannya 2, name tetap 1
		hobi: checkbox -> diisi terserah minimal 3 pilihan, pilihannya 3, name juga 3
		pekerjaan: select -> diisi terserah minimal 3 pilihan, sama kayak radio

		tombol simpan


		kalo sudah klik simpan, tampilkan hasil inputannya
	-->

	<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Quicksand&display=swap" rel="stylesheet"> 


    <title>Praktikum</title>
  </head>
  <body>
  <p style="color: white; text-align: center"> Selamat datang, <?php echo strtoupper($_SESSION['uname'])?> login pada: <?php echo $_SESSION['jam_mulai']?><br>
  <a href="logout.php" style="text-decoration: none; color: red; z-index: 1000;">Logout</a>
  </p>
    <div class="container justify-content-center text-white">
      <form action="simpandata.php" method="POST">
        <!-- Nama -->
        <div class="nama d-flex justify-content-center bio">
          <div class="row align-items-center">
            <div class="col-auto">
              <input type="text" id="inputNama" class="formNama" placeholder="Nama" name="myName" required/>
            </div>
          </div>
        </div>
        <!-- Akhir Nama -->

        <!-- User Name -->
        <div class="uname d-flex justify-content-center text-white bio">
          <div class="row align-items-center">
            <div class="col-auto">
              <input type="text" id="inputNama" class="formNama" placeholder="<?php echo $_SESSION['uname']?>" name="username" readonly required/>
            </div>
          </div>
        </div>
        <!-- Akhir Username -->

        <!-- Alamat -->
        <div class="alamat d-flex justify-content-center text-white bio">
          <div class="form-floating">
            <textarea class="myAlamat" placeholder="Alamat" id="floatingTextarea" name="alamat" required></textarea>
          </div>
        </div>
        <!-- Akhir Alamat -->

        <!-- Kelamin -->
        <div class="kelamin bio">
          <label for="inputKelamin" class="d-flex justify-content-center">Jenis Kelamin</label>
          <div class="radio d-flex justify-content-center">
            <div class="form-check form-check-inline justify-content-center">
              <input class="form-check-input" type="radio" name="kelamin" id="inlineRadio1" value="Lelaki" required/>
              <label class="form-check-label" for="inlineRadio1">Lelaki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="kelamin" id="inlineRadio1" value="Perempuan" required/>
              <label class="form-check-label" for="inlineRadio1">Perempuan</label>
            </div>
          </div>
        </div>
        <!-- Akhir Kelamin -->

        <!-- Hobi -->
        <div class="hobi bio">
          <label for="inputHobi" class="d-flex justify-content-center">Hobi</label>
          <div class="check d-flex justify-content-center">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Ngoding" name="hobi[]"/>
              <label class="form-check-label" for="inlineCheckbox1">Ngoding</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Belajar" name="hobi[]"/>
              <label class="form-check-label" for="inlineCheckbox2">Belajar</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Rebahan" name="hobi[]"/>
              <label class="form-check-label" for="inlineCheckbox2">Rebahan</label>
            </div>
          </div>
        </div>
        <!-- Akhir Hobi -->

        <!-- Pekerjaan -->
        <div class="pekerjaan bio">
            <label for="inputHobi" class="d-flex justify-content-center">Pekerjaan</label>
          <div class="select d-flex justify-content-center">
            <select class="form-select-small" name="pekerjaan" placeholder="" required>
              <option value="Mahasiswa">Mahasiswa</option>
              <option value="PNS">PNS</option>
              <option value="Swasta">Swasta</option>
            </select>
          </div>
        </div>
        <!-- Akhir Pekerjaan -->

        <!-- Submit -->
        <div class="simpan d-flex justify-content-center bio">
          <input type="submit" value="Simpan" class="btn btn-primary mt-3"/>
        </div>
        <!-- Akhir Submit -->
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
