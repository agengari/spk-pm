<div>
	<!-- Inputan -->
    <section id="input" style="background-color: #e9abc3; padding-top: 5rem">
      <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Input Pilihan Alternatif Makanan :</h2>
        </div>
        </div>
        <div class="mt-4 row justify-content-center">
          <div class="col-md-8">
            <div class="card mt-1">
              <div class="card-body">
                <div class="mb-1">

                <!-- Form Input Pilihan Makanan -->
                <form action="#hasil" method="post" class="form-horizontal">
					      <div class="mb-3">
						    <label for="sb_alternatif_1" class="form-label">Alternatif Makanan 1</label>
					    	<select name="m1" id="m1" onChange="changeValue(this.value)" class="form-control" aria-label="Alternatif 1">
							    <option value="0">-Pilih-</option>
							    <?php
							    	$result = mysql_query("SELECT * FROM food ");
						    		var_dump($result);
								    $jsArray = "var dtMhs = new Array();\n";
							    	while ($row = mysql_fetch_array($result)) {
							    	echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
								    }
							    ?>
						    </select>

						    <label for="sb_alternatif_2" class="form-label">Alternatif Makanan 2</label>
						    <select name="m2" id="m2" onChange="changeValue(this.value)" class="form-control" aria-label="Alternatif 2">
							    <option value="0">-Pilih-</option>
							    <?php
								    $result = mysql_query("SELECT * FROM food ");
						  	  	var_dump($result);
						    		$jsArray = "var dtMhs = new Array();\n";
						    		while ($row = mysql_fetch_array($result)) {
						    		echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
						    		}
						    	?>
						    </select>

						    <label for="sb_alternatif_3" class="form-label">Alternatif Makanan 3</label>
					    	<select name="m3" id="m3" onChange="changeValue(this.value)" class="form-control" aria-label="Alternatif 3">
						    	<option value="0">-Pilih-</option>
						    	<?php
							    	$result = mysql_query("SELECT * FROM food ");
							    	var_dump($result);
							    	$jsArray = "var dtMhs = new Array();\n";
						    		while ($row = mysql_fetch_array($result)) {
						    		echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
						    		}
							    ?>
						    </select>
					      </div>

					      <!-- button  -->
					      <div class="text-center">
					      	<input type="submit" value="Proses" class="btn btn-primary" />
					      </div>
				        </form>
              	<!-- Akhir Form Input Pilihan Makanan -->

              	</div>
          	  </div>
    		</div>
      	  </div>
		</div>
		</div>

	  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,224L30,218.7C60,213,120,203,180,181.3C240,160,300,128,360,128C420,128,480,160,540,192C600,224,660,256,720,261.3C780,267,840,245,900,229.3C960,213,1020,203,1080,192C1140,181,1200,171,1260,186.7C1320,203,1380,245,1410,266.7L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Inputan -->
</div>