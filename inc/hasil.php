<div>
    <!-- Tabel Hasil-->
    <section id="hasil" style="background-color: #f3f4f5; padding-top: 5rem">
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <h2>Hasil Pilihan Alternatif Makanan :</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p>
              Berikut ini adalah peringkat makanan dari 3 alternatif yang telah anda pilih, silahkan gunakan sebagai pertimbangan dalam menentukan pilihan makanan dengan bijak!
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Alternatif</th>
				          <th>NCF</th>
				          <th>NSF</th>
                  <th>NT</th>
                  <th>Peringkat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $queryutama3 = mysql_query("SELECT  *  FROM  hasil order by nt desc");
                  $n = 1;
                  while ($data3 = mysql_fetch_array($queryutama3)) {
                  $kar = mysql_fetch_array(mysql_query("select * from food where id_makanan='$data3[idproses]'"));
                ?>
                <?php if (isset($_POST) == true) {
                  if ($data3['idproses'] == $_POST['m1']) {
                ?>
                <tr>
                  <td><?php echo $kar['name']; ?></td>
                  <td><?php echo number_format($data3['ncf'], 2); ?></td>
                  <td><?php echo number_format($data3['nsf'], 2); ?></td>
                  <td><?php echo number_format($data3['nt'], 2); ?></td>
                  <td align=center><?php echo $n; $n++ ?></td>
                </tr>
                <?php }
                  if ($data3['idproses'] == $_POST['m2']) {
                ?>
                <tr>
                  <td><?php echo $kar['name']; ?></td>
                  <td><?php echo number_format($data3['ncf'], 2); ?></td>
                  <td><?php echo number_format($data3['nsf'], 2); ?></td>
                  <td><?php echo number_format($data3['nt'], 2); ?></td>
                  <td align=center><?php echo $n; $n++ ?></td>
                </tr>
                <?php }
                  if ($data3['idproses'] == $_POST['m3']) {
                ?>
                <tr>
                  <td><?php echo $kar['name']; ?></td>
                  <td><?php echo number_format($data3['ncf'], 2); ?></td>
                  <td><?php echo number_format($data3['nsf'], 2); ?></td>
                  <td><?php echo number_format($data3['nt'], 2); ?></td>
                  <td align=center><?php echo $n; $n++ ?></td>
                </tr>
                <?php } ?>
                <?php }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

	  <div class="row ms-5" style="padding-top: 2rem">
          <div class="col-md-8">
            <p>
              Keterangan :
            </p>
			<p>
				1. NCF : Nilai Core Factor<br>
				2. NSF : Nilai Secondary Factor<br>
				3. NT : Nilai Total<br>
			</p>
          </div>
        </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c03369"
          fill-opacity="1"
          d="M0,160L30,160C60,160,120,160,180,165.3C240,171,300,181,360,192C420,203,480,213,540,208C600,203,660,181,720,154.7C780,128,840,96,900,90.7C960,85,1020,107,1080,117.3C1140,128,1200,128,1260,138.7C1320,149,1380,171,1410,181.3L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Tabel Hasil -->
</div>