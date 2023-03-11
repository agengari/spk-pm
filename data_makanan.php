<?php
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

	<section style="background-color: #f3f4f5; padding-top: 5rem">
	<!-- Daftar Alternatif -->
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3 mb-2">
              <div class="card-header text-white" style="background-color: #c03369">Daftar Alternatif Maknanan</div>
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Natrium</th>
                      <th>Lemak</th>
                      <th>Protein</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      $tampil = mysql_query("select * from food order by name asc");
                      while($data = mysql_fetch_array($tampil)) :
                    ?>
                      <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['name']?></td>
                        <td><?=$data['natrium']?></td>
                        <td><?=$data['lemak']?></td>
                        <td><?=$data['protein']?></td>
                      </tr>
                    <?php endwhile; //penutup perulangan while ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
     </div>
    <!-- Akhir Daftar Alternatif -->

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c03369"
          fill-opacity="1"
          d="M0,96L30,90.7C60,85,120,75,180,80C240,85,300,107,360,101.3C420,96,480,64,540,80C600,96,660,160,720,160C780,160,840,96,900,85.3C960,75,1020,117,1080,112C1140,107,1200,53,1260,48C1320,43,1380,85,1410,106.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
    </svg>
	</section>
	

	<!-- Footer -->
  <div>
    <?php include "inc/footer.php"; ?>
  </div>
  <!-- Akhir Footer -->
</body>
</html>