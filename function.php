<?php 
   $host = "localhost"; // Menyiapkan variabel 'host' untuk mendefinisikan nama server
   $user = "root"; // Menyiapkan variabel 'user' untuk mendefinisikan nama user database MySQL
   $password = ""; // Menyiapkan variabel 'password' untuk mendefinisikan password database MySQL
   $database = "db_testing"; // Menyiapkan variabel 'database' untuk mendefinisikan nama database MySQL
  
   $connect = mysqli_connect($host,$user,$password); // Melakukan koneksi
   $selectdb = mysqli_select_db($connect,$database); // Memilih database yang sudah didefinisikan dengan perintah 'mysql_select_db'
 
   if($connect){
   }else{
      echo "Koneksi host database gagal.<br/>";
   }
 
   if($selectdb){
   }else{
      echo "Koneksi database gagal.";
   }
?>