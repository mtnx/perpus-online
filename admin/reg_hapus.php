<?php
include '../conn/koneksi.php';

$id_registrasi= $_GET['id_registrasi'];
$query = mysql_query("DELETE FROM tb_registrasi WHERE id_registrasi='$id_registrasi'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=reg_data'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=reg_data'>";
	}


?>