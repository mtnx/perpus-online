<?php
include '../conn/koneksi.php';
$username= $GET['username'];
$query = mysql_query("DELETE FROM tb_admin WHERE username='$username'");
if ($query) { 
	
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=profil_data'>";
	}


?>