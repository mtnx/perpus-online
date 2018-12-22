<?php
include '../conn/koneksi.php';

$id_konfirmasi= $_GET['id_konfirmasi'];
$query = mysql_query("DELETE FROM tb_konfirmasi WHERE id_konfirmasi='$id_konfirmasi'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=konfirmasi_data'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=konfirmasi_data'>";
	}


?>