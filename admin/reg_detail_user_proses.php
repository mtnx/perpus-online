<?php
include "../conn/koneksi.php";

$id_konfirmasi= $_GET['id_konfirmasi'];
$id_registrasi= $_GET['id_registrasi'];
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password	 = $_POST['password']; 
$tempat		= $_POST['tempat'];
$tgl_lahir	= $_POST['tgl_lahir'];
$no_telepon	= $_POST['no_telepon'];



				$tanggal	= date("Y-m-d");
				$tgl_masuk		= $tanggal;

$kelamin	= $_POST['kelamin'];


$insert = mysql_query("insert into tb_user values ('$id_user','$nama','$username','$password','$tempat','$tgl_lahir','$no_telepon','$tgl_masuk','$kelamin');");


mysql_query("DELETE FROM tb_konfirmasi WHERE id_konfirmasi='$id_konfirmasi'");


if ($insert) {
	mysql_query("DELETE FROM tb_konfirmasi WHERE id_konfirmasi='$id_konfirmasi'");
	mysql_query("DELETE FROM tb_registrasi WHERE id_registrasi='$id_registrasi'");
	
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=user_detail&id_user=$id_user'>";
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=user_data'>";	
}
?>
