<?php
include '../conn/koneksi.php';

$id_buku= $_GET['id_buku'];
$query = mysql_query("DELETE FROM tb_buku WHERE id_buku='$id_buku'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";
	}


?>