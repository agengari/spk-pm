<?php
  //panggil koneksi database
  include "library/koneksi.php";

  $username = mysql_escape_string($_POST['username']);
  $password = mysql_escape_string($_POST['password']);

  //cek username di db
  $cek_user = mysql_query("SELECT * FROM admin WHERE username = '$username' ");
  $user_valid = mysql_fetch_array($cek_user);
  //uji jika username ada di db
  if($user_valid){
      //cek password username di db
      if($password == $user_valid['password']){
          //jika password sesuai (membuat session)
          session_start();
          $_SESSION['username'] = $user_valid['username'];
           header('location:index.php');
      }else{
          echo "<script>alert('Maaf, login gagal. Password anda tidak sesuai!');
          document.location='../index.php'</script>";
      }
  }else{
      echo "<script>alert('Maaf, login gagal. Username anda tidak terdaftar!');
      document.location='../index.php'</script>";
  }
?>

