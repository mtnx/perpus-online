<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
} else {

?>

<!DOCTYPE HTML PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan Online</title>

    <!----- STYLE ----->
	<!-- css reset -->
    <link rel="stylesheet" type="text/css" href="../reset.css">    
	<!-- css reset -->
	<!-- css style -->
    <link rel="stylesheet" type="text/css" href="../style.css">    
	<!-- css style -->
    <!----- STYLE ----->    
    


</head>

<body>
<div id="wrapper">

<div id="header">
	<div id="logo"><img src="../images/logo.png" width="180" height="180"></div>
</div> <!--id HEADER broo-->

<div id="ini">
<div id="nam">USER</div>
<div id="iki"><?php echo $_SESSION['username']; ?></div>
</div>

</div>
<div id="konten">
	<div id="artikel">

    
	<?php
	error_reporting(0);
	switch($_GET['page'])
	{
		default:
		include "home.php";
		break;

		// menu buku	

		case "buku_data";
		include "buku_data.php";
		break;					
		case "buku_input";
		include "buku_input.php";
		break;
		case "buku_cari";
		include "buku_cari.php";
		break;		
		case "buku_hapus";
		include "buku_hapus.php";
		break;	
		case "buku_edit";
		include "buku_edit.php";
		break;			
		case "buku_edit_proses";
		include "buku_edit_proses.php";
		break;	
		
		// menu pengguna				
		case "user_data";
		include "user_data.php";
		break;
		case "user_detail";
		include "user_detail.php";
		break;
		case "user_edit_proses";
		include "user_edit_proses.php";
		break;
		case "user_input";
		include "user_input.php";
		break;	
		case "user_cari";
		include "user_cari.php";
		break;
		case "user_edit";
		include "user_edit.php";
		break;
					}
			?>
	</div>
	<div id="sidebar">
	  <p align="center">      
	  <h1 align="center"><strong>Menu	:</strong></h1>
	  <p align="center">&nbsp;</p>
	  </p>
	  <div align="center">
	    <table width="200" border="1">
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="?page=home">Home</a></h6></td>
          </tr>
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="?page=buku_data">Buku</a></h6></td>
          </tr>
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none; font-size: 100%;" color: #000; href="index.php?page=user_detail&username=<?php echo $_SESSION['username']; ?>">Profil User</a></h6></td>
          </tr>
	        <td><h6 align="center"><a style="text-decoration: none; font-size: 100%;" color: #000; href="index.php?page=user_edit&username=<?php echo $_SESSION['username']; ?>">Edit Profil</a></h6></td>
          </tr>
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="logout.php">Logout</a></h6></td>
          </tr>
	      </table>
      </div>
	  <p align="center">&nbsp;</p>
	</div>
</div> <!--konten broo-->


<div id="name"><strong>Perpustakaan Online &copy; 2017 </strong></div>
</div> <!--wrapper broo-->
 
</body>
</html>

<?php } ?>
