<?php
include "conn/koneksi.php";


$id_registrasi=$_POST['id_registrasi'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password	 = $_POST['password']; 
$tempat		= $_POST['tempat'];
$tgl_lahir	= $_POST['tgl_lahir'];
$no_telepon	= $_POST['no_telepon'];


				$tanggal	= date("Y-m-d");
				$tgl_registrasi		= $tanggal;

$kelamin	= $_POST['kelamin'];

//================


//PERINTAH MENGECEK AGAR TIDAK TERDAPAT USER YANG SAMA
$cek_username=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE username='$_POST[username]'"));
if ($cek_username > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan !");
              </script>';
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=registrasi'>";	
              exit();
}



//================

$insert = mysql_query("insert into tb_registrasi values ('$id_registrasi','$nama','$username','$password','$tempat','$tgl_lahir','$no_telepon','$tgl_registrasi','$kelamin');");


if ($insert) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=konfirmasi'>";
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=registrasi'>";	
}
?>
