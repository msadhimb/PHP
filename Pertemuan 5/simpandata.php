<?php
    session_start();
    $nama = $_POST['myName'];
    $uname = $_SESSION['uname'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['kelamin'];
    $hobi = $_POST['hobi'];
    $pekerjaan = $_POST['pekerjaan'];

	if($_SESSION['isLogin'] != true || $_SESSION['jam_selesai']==date("Y-m-d H:i:s"))
	{
		header("Location: form_login.php?message=nologin");
	}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="stylebio.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Quicksand&display=swap" rel="stylesheet"> 


    <title>Praktikum</title>
  </head>
  <body>
    <div class="container justify-content-center text-white mu-auto mb-auto ">
      <form action="bio.php" method="POST">
        <!-- Nama -->
        <div class="nama">
            <p style="text-align: center"> Nama : <?php echo $nama ?></p>
        </div>
        <!-- Akhir Nama -->
        
        <!-- User Name -->
        <div class="uname ">
            <p style="text-align: center"> Username : <?php echo $uname ?></p>
            
        </div>
        <!-- Akhir Username -->
        
        <!-- Alamat -->
        <div class="alamat">
            <p style="text-align: center"> Alamat : <?php echo $alamat ?></p>
        </div>
        <!-- Akhir Alamat -->
        
        <!-- Kelamin -->
        <div class="kelamin bio">
            <p style="text-align: center"> Kelamin : <?php echo $kelamin ?></p>
        </div>
        <!-- Akhir Kelamin -->

        <!-- Hobi -->
        <div class="hobi bio">
        <p style="text-align: center"> Hobi : <?php
            if(!empty($_POST['hobi'])) {
                foreach($_POST['hobi'] as $value){
                    if($value == $hobi[count($hobi)-1]){
                        echo $value, ' ';
                    }else echo $value, ', ';
                }
            }?>
        </p>
        </div>
        <!-- Akhir Hobi -->

        <!-- Pekerjaan -->
        <div class="pekerjaan bio">
        <p style="text-align: center"> Pekerjaan : <?php
            if(!empty($pekerjaan)) {
                echo $pekerjaan;
            }?>
        </p>
        </div>
        <!-- Akhir Pekerjaan -->

      </form>
    </div>

    <a href="logout.php" class="d-flex justify-content-center mt-4" style="text-decoration: none; color: red; z-index: 1000;">Logout</a>
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
