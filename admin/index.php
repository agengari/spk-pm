<?php
session_start();
error_reporting(0);
if(empty($_SESSION['username'])){
    echo "<script>alert('Maaf, untuk dapat mengakses halaman ini, anda memerlukan login sebagai admin!');
            document.location='../index.php'</script>";
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

	<!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

	<!-- Judul Tab -->
	<title>Admin SPK Pemilihan Makanan</title>
</head>

<body>
  <!-- Navbar -->
	<div>
		<?php include "inc/navbar.php"; ?>
	</div>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
	<div>
		<?php include "inc/jumbotron.php"; ?>
	</div>
  <!-- Akhir Jumbotron -->

  <!-- Kriteria -->
	<div>
		<?php include "inc/kriteria.php"; ?>
	</div>
  <!-- Akhir Kriteria -->

  <!-- Footer -->
  <div>
    <?php include "inc/footer.php"; ?>
  </div>
  <!-- Akhir Footer -->
</body>

    </html>
<?php
?>