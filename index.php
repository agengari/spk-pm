<?php
	//menghilangkan pesan warning
	error_reporting(0);
	ini_set('display_errors', 0);

	session_start();

	//panggil koneksi database
	include("./admin/library/koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

	<!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

	<!-- Judul Tab -->
	<title>SPK Pemilihan Makanan</title>
</head>

<body id="home">
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

	<!-- Inputan -->
	<div>
		<?php include "inc/input.php"; ?>
	</div>
    <!-- Akhir Inputan -->

    <!-- Tabel Hasil-->
	<div>
		<?php include "inc/hasil.php"; ?>
	</div>
    <!-- Akhir Tabel Hasil -->


	<!-- Footer -->
	<div>
		<?php include "inc/footer.php" ?>
	</div>
	<!-- Akhir Footer -->
</body>

</html>