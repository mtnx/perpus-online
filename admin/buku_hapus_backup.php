<?php
include '../conn/koneksi.php';



$file=$_GET['file'];
$hapusrow = "DELETE FROM tb_buku WHERE file='$file';";
$eksekusi = mysql_query($hapusrow);

if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  echo "<META HTTP-EQUIV=Refresh CONTENT='1; URL=index.php'>";
  }





$id_buku= $_GET['id_buku'];

$data = "SELECT id_buku,file from tb_buku";
$bacadata = mysql_query($data);

while($select_result = mysql_fetch_array($bacadata))
{
$id_buku        = $select_result['id_buku'];
$file    	   = $select_result['file'];}



$query = mysql_query("DELETE FROM tb_buku WHERE id_buku='$id_buku'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";
	}


?>

