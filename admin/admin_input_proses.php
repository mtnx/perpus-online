<?php
include "../conn/koneksi.php";


$id_admin=$_POST['id_admin'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password	 = $_POST['password']; 
$tempat		= $_POST['tempat'];
$tgl_lahir	= $_POST['tgl_lahir'];
$no_telepon	= $_POST['no_telepon'];


				$tanggal	= date("Y-m-d");
				$jam		= date('H:i:s');
				$tgl_masuk		= $tanggal;

$kelamin	= $_POST['kelamin'];


$insert = mysql_query("insert into tb_admin values ('$id_admin','$nama','$username','$password','$tempat','$tgl_lahir','$no_telepon','$tgl_masuk','$kelamin');");


if ($insert) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_detail&nama=$nama'>";
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_data'>";	
}
?>
