<?php
  session_start();
  if(empty($_SESSION['username'])){
    echo "<script>alert('Maaf, untuk dapat mengakses halaman ini, anda memerlukan login sebagai admin!');
            document.location='../index.php'</script>";
  }

  //panggil koneksi database
  include "library/koneksi.php";

  //jika tombol simpan diklik
    if(isset($_POST['btn_simpan']))
    {
        //data diedit atau disimpan
        if($_GET['hal'] == "edit")
        {
            //data akan di edit
            $edit = mysql_query("UPDATE food set 
                                            name = '$_POST[tb_name]',
                                            natrium = '$_POST[tb_natrium]',
                                            lemak = '$_POST[tb_lemak]',
                                            protein = '$_POST[tb_protein]'
                                            WHERE id_makanan = '$_GET[id]'
                                            ");
            if($edit) // Alert Jika Simpanan Berhasil
            {
                echo "<script>
                        alert('Edit data sukses!');
                        document.location='alternatif.php';
                    </script>";
            }else
            {
                echo "<script>
                        alert('Edit data Gagal!');
                        document.location='alternatif.php';
                    </script>";
            }
        }else
        {
            //data akan disimpan baru
            $simpan = mysql_query("INSERT INTO food (name, natrium, lemak, protein)
                                            VALUES ('$_POST[tb_name]',
                                                    '$_POST[tb_natrium]',
                                                    '$_POST[tb_lemak]',
                                                    '$_POST[tb_protein]')
                                            ");
            if($simpan) // Alert Jika Simpanan Berhasil
            {
                echo "<script>
                        alert('Simpanan data sukses!');
                        document.location='alternatif.php';
                    </script>";
            }else
            {
                echo "<script>
                        alert('Simpanan data Gagal!');
                        document.location='alternatif.php';
                    </script>";
            }
        }
    }

    //Jika tombol edit/hapus diklik
    if(isset($_GET['hal']))
    {
        //edit data
        if($_GET['hal'] == "edit")
        {
            //tampilkan data yang di edit
            $tampil = mysql_query("SELECT * FROM food WHERE id_makanan = '$_GET[id]' ");
            $data = mysql_fetch_array($tampil);
            if($data)
            {
                //jika data ditemukan, maka data ditampung dulu kedalam variabel
                $vname = $data['name'];
                $vnatrium = $data['natrium'];
                $vlemak = $data['lemak'];
                $vprotein = $data['protein'];
            }
        }
        else if($_GET['hal'] == "hapus")
        {
            //persiapan hapus data
            $hapus = mysql_query("DELETE FROM food WHERE id_makanan = '$_GET[id]' ");
            if($hapus) {
                echo "<script>
                        alert('Hapus data sukses!');
                        document.location='alternatif.php';
                    </script>";
            }
        }
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
            <h2 class="text-center">Kandungan Alternatif Pilihan Makanan</h2>
          </div>
        </div>

        <!-- Tambah Alternatif Baru -->
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card mt-3 mb-1">
              <div class="card-header text-white" style="background-color: #c03369">Tambah Baru</div>
              <div class="card-body">
                <form method="post" action="">
                  <div class="mb-3">
                    <label for="tb_name" class="form-label">Nama</label>
                    <input type="text" name="tb_name" value="<?=@$vname?>" class="form-control" placeholder="Masukan nama makanan disini!" required />
                  </div>
                  <div class="mb-3">
                    <label for="tb_komposisi" class="form-label">Komposisi</label>
                    <input type="float" name="tb_natrium" value="<?=@$vnatrium?>" class="form-control mt-1" placeholder="Masukan komposisi natrium disini!" required />
                    <input type="float" name="tb_lemak" value="<?=@$vlemak?>" class="form-control mt-1" placeholder="Masukan komposisi lemak disini!" required />
                    <input type="float" name="tb_protein" value="<?=@$vprotein?>" class="form-control mt-1" placeholder="Masukan komposisi protein disini!" required />
                  </div>
                  <button type="submit" class="btn btn-primary mt-1" name="btn_simpan">Simpan</button>
                  <button type="reset" class="btn btn-danger mt-1" name="btn_reset">Kosongkan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Tambah Alternatif Baru Alternatif -->

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
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      $tampil = mysql_query("SELECT * FROM food order by id_makanan asc");
                      while($data = mysql_fetch_array($tampil)):
                    ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$data['name']?></td>
                      <td><?=$data['natrium']?></td>
                      <td><?=$data['lemak']?></td>
                      <td><?=$data['protein']?></td>
                      <td class="text-center" >
                        <a href="alternatif.php?hal=edit&id=<?=$data['id_makanan']?>" class="btn btn-warning mb-1">Edit</a>
                        <a href="alternatif.php?hal=hapus&id=<?=$data['id_makanan']?>" 
                        onclik="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger">Hapus</a>
                      </td>
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
