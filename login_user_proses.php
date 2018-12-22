<?php
include 'conn/koneksi.php';



$username = $_POST['username'];
$password     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM tb_user WHERE username = '$username' AND password='$password'");
$row=mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['password'] == $password)
{
  session_start();
  $username = $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  
  
  echo '<script language="javascript">alert("Anda berhasil login sebagai USER !! "); document.location="user/index.php";</script>';
}
else
{
	
echo '<script language="javascript">alert("Username dan Password yang anda masukkan tidak sesuai !"); document.location="index.php";</script>';


}

?>