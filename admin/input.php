<?php
  session_start();
  if(empty($_SESSION['username'])){
    echo "<script>alert('Maaf, untuk dapat mengakses halaman ini, anda memerlukan login sebagai admin!');
            document.location='../index.php'</script>";
  }

  //panggil koneksi database
  include "library/koneksi.php";
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

    <title>Admin-SPK Profile Matching</title>
  </head>
  <body id="home">
	<!-- Navbar -->
	<div>
		<?php include "inc/navbar.php"; ?>
	</div>
    <!-- Akhir Navbar -->

    <section style="background-color: #f3f4f5">
      <div class="container" style="padding-top: 5rem">
        <div class="row">
          <div class="col">
            <h2 class="text-center">Konversi Nilai Nutrisi</h2>
          </div>
        </div>

        <!-- Tambah Konversi Nilai Makanan Baru -->
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card mt-3 mb-1">
              <div class="card-header text-white" style="background-color: #c03369">Konversi Nilai Kandungan Nutrisi ke Skala Penilaian</div>
              <div class="card-body">
                <form method="post" action="simpan.php">
                  <div class="mb-3">
                    <label for="sb_food" class="form-label">Pilih Dari Database</label>
                    <select name="food" id="food" onChange="changeValue(this.value)" class="form-control">
                      <option value=0>-Pilih-</option>
                      <?php
                      $result = mysql_query("SELECT * FROM food ");
                      $foodArray = "var dataFood = new Array();\n";
                      while ($row = mysql_fetch_array($result)) {
                        echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
                        $foodArray .= "dataFood['" . $row['id_makanan'] . "'] = {namaMakanan:'" . addslashes($row['name']) . "',nilaiNatrium:'" . addslashes($row['natrium']) . "',nilaiLemak:'" . addslashes($row['lemak']) . "',nilaiProtein:'" . addslashes($row['protein']) . "'};\n";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="tb_komposisi" class="form-label">Komposisi</label>
                    <input type="text" data-field="x_username" id="name" name="name" class="form-control mt-1" placeholder="Nama Makanan" readonly />
                    <input type="text" data-field="x_username" id="natrium" name="natrium" class="form-control mt-1" placeholder="Nilai Natrium" readonly />
                    <input type="text" data-field="x_username" id="lemak" name="lemak" class="form-control mt-1" placeholder="Nilai Lemak" readonly />
                    <input type="text" data-field="x_username" id="protein" name="protein" class="form-control mt-1" placeholder="Nilai Protein" readonly />
                  </div>
                  <button type="submit" class="btn btn-primary mt-1" name="btn_simpan">Simpan</button>
                  <button type="reset" class="btn btn-danger mt-1" name="btn_reset">Kosongkan</button>
                </form>

				<script type="text/javascript">
					<?php echo $foodArray; ?>

					function changeValue(id_makanan) {
            document.getElementById('name').value = dataFood[id_makanan].namaMakanan;
						document.getElementById('natrium').value = dataFood[id_makanan].nilaiNatrium;
						document.getElementById('lemak').value = dataFood[id_makanan].nilaiLemak;
						document.getElementById('protein').value = dataFood[id_makanan].nilaiProtein;
					};
				</script>				

              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Tambah Konversi Nilai Makanan Baru -->
  	  </div>

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
