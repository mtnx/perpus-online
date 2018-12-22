<?php
include '../conn/koneksi.php';

$id_admin= $_GET['id_admin'];
$query = mysql_query("DELETE FROM tb_admin WHERE id_admin='$id_admin'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_data'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_data'>";
	}


?>