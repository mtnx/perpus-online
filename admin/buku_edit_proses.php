<?php
include '../conn/koneksi.php';

	$judul_buku = $_POST['judul_buku'];
	$penulis = $_POST['penulis'];
	$jenis = $_POST['jenis'];



 $input = mysql_query("UPDATE tb_buku SET 
 											judul_buku='$judul_buku',
											penulis='$penulis',
											jenis='$jenis'
											where judul_buku='$judul_buku'
											");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";
}

?>
