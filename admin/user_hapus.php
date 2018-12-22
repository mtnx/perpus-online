<?php
include '../conn/koneksi.php';

$id_user= $_GET['id_user'];
$query = mysql_query("DELETE FROM tb_user WHERE id_user='$id_user'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=user_data'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=user_data'>";
	}


?>