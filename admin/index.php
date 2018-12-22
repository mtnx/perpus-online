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
<title>E-Library 6</title>

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
<div id="nam">ADMIN</div>
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

		// menu admin				
		case "admin_data";
		include "admin_data.php";
		break;
		case "admin_detail";
		include "admin_detail.php";
		break;
		case "admin_edit_proses";
		include "admin_edit_proses.php";
		break;
		case "admin_input";
		include "admin_input.php";
		break;	
		case "admin_cari";
		include "admin_cari.php";
		break;
		case "admin_edit";
		include "admin_edit.php";
		break;
		case "admin_hapus";
		include "admin_hapus.php";
		break;

		
		// menu user				
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
		case "user_hapus";
		include "user_hapus.php";
		break;


		// menu registrasi				
		case "reg_data";
		include "reg_data.php";
		break;
		case "reg_detail";
		include "reg_detail.php";
		break;
		case "reg_edit_proses";
		include "reg_edit_proses.php";
		break;
		case "reg_input";
		include "reg_input.php";
		break;	
		case "reg_cari";
		include "reg_cari.php";
		break;
		case "reg_edit";
		include "reg_edit.php";
		break;
		case "reg_hapus";
		include "reg_hapus.php";
		break;
		
		// menu konfirmasi				
		case "konfirmasi_data";
		include "konfirmasi_data.php";
		break;
		case "reg_detail_user";
		include "reg_detail_user.php";
		break;
		case "konfirmasi_detail";
		include "konfirmasi_detail.php";
		break;
		case "konfirmasi_hapus";
		include "konfirmasi_hapus.php";
		break;
		case "konfirmasi_cari";
		include "konfirmasi_cari.php";
		break;


		// menu profil				
		case "profil_admin";
		include "profil_admin.php";
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
          
           <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="index.php?page=profil_admin&username=<?php echo $_SESSION['username']; ?>">Profil Admin</a></h6></td>
          </tr>  
          
	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="?page=reg_data">Registrasi</a></h6></td>
          </tr>  
          
          	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="?page=konfirmasi_data">Konfirmasi</a></h6></td>
          </tr>         
          
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="?page=buku_data">Buku</a></h6></td>
          </tr>
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none; font-size: 100%;" color: #000; href="?page=admin_data">Admin</a></h6></td>
          </tr>

	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none; font-size: 100%;" color: #000; href="?page=user_data">User</a></h6></td>
          </tr>          
          
	      <tr>
	        <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="../logout.php">Logout</a></h6></td>
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