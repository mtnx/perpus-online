<?php
include '../conn/koneksi.php';

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$tempat = $_POST['tempat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$no_telepon = $_POST['no_telepon'];	
	$kelamin = $_POST['kelamin'];



$query = mysql_query("UPDATE tb_user SET
	nama		='$nama',
	username	='$username',
	password	='$password',
	tempat		='$tempat',
	tgl_lahir	='$tgl_lahir',
	no_telepon	='$no_telepon',
	kelamin		='$kelamin',
	where username='$_GET[username]'");		
$qu=mysql_query($query);
if ($qu) {
echo "<script>alert('data berhasil disimpan');
document.location.href='index.php??page=user_detail&username=$username'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='index.php?page=user_detail&username=$username'</script>\n";
}
?>
