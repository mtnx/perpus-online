<?php
include '../conn/koneksi.php';

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$tempat = $_POST['tempat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$kelamin = $_POST['kelamin'];



$query = mysql_query("UPDATE tb_user SET
	nama		='$nama',
	username	='$username',
	password	='$password',
	tempat		='$tempat',
	tgl_lahir	='$tgl_lahir',
	kelamin		='$kelamin',
	where id_user='$_GET[id_user]'");			

if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='index.php?page=user_detail&nama=$nama'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href=index.php?page=user_data'</script>\n";
}
?>
