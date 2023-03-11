<?php
	$server = mysql_connect("localhost","root","");
	$db = mysql_select_db("db_pemilihan_makanan");
	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}
	if(!$db){
		echo "Maaf, Gagal tersambung dengan database !";
	}
?>