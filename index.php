<!DOCTYPE HTML PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan Online</title>

    <!----- STYLE ----->
	<!-- css reset -->
    <link rel="stylesheet" type="text/css" href="reset.css">    
	<!-- css reset -->
	<!-- css style -->
    <link rel="stylesheet" type="text/css" href="style.css">    
	<!-- css style -->
    <!----- STYLE ----->    
    
    <!----- SLIDER ----->    
    <!--slider broo -->
    <script src="slider/jquery.js"></script>
    <script src="slider/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="slider/amazingslider-1.css">
    <script src="slider/initslider-1.js"></script>
    <!--slider broo -->
    <!----- SLIDER ----->

    <!------ MENU ----->    
	<!-- css menu -->    
    <link href="menu/menu_style.css" rel="stylesheet" type="text/css">
	<!-- css menu -->
    <!----- MENU ----->  

</head>

<body>
<div id="wrapper">

<div id="header">
	<div id="logo"><img src="images/logo.png" width="180" height="180"></div>
</div> <!--id HEADER broo-->

<div id="menu">
	<ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="?page=home">Home</a>

      </li>
      <li><a href="?page=profil">Profil</a></li>
      <li><a href="?page=visi_misi">Visi & Misi</a></li>
      <li><a href="?page=kontak">Kontak</a></li>
      <li><a href="login.php">Login Admin</a></li>
	</ul>
</div> 

  <!--- ini penutup menunya bro.. --->
  
</div> <!--id menu broo-->
<div id="slider">




   
    <!-- slider coy.. -->
   <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/1.jpg" alt="1"  title="1" />
                </li>
                <li><img src="images/3.jpg" alt="3"  title="3" />
                </li>
                <li><img src="images/4.jpg" alt="4"  title="4" />
                </li>
                <li><img src="images/9.jpg" alt="9"  title="9" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/1-tn.jpg" alt="1" title="1" /></li>
                <li><img src="images/3-tn.jpg" alt="3" title="3" /></li>
                <li><img src="images/4-tn.jpg" alt="4" title="4" /></li>
                <li><img src="images/9-tn.jpg" alt="9" title="9" /></li>
            </ul>
        </div>
    </div>
    <!-- End of slider -->





</div>
<div id="konten"> <!--konten broo-->
	<div id="artikel">

    
	<?php
	include('conn/koneksi.php');
	error_reporting(0);
	switch($_GET['page'])
	{
		default:
		include "home.php";
		break;

		// Menu Utama
		case "profil";
		include "profil.php";
		break;	
		case "visi_misi";
		include "visi_misi.php";
		break;
		case "kontak";
		include "kontak.php";
		break;	
			
		// menu buku				
		case "buku_data";
		include "buku_data.php";
		break;	
		case "buku_cari";
		include "buku_cari.php";
		break;	
		
		
		// menu registrasi				
		case "registrasi";
		include "reg_input.php";
		break;	
		
		// menu konfirmasi				
		case "konfirmasi";
		include "admin/konfirmasi.php";
		break;
		case "cek_registrasi";
		include "cek_registrasi.php";
		break;		
					}
			?>

	</div>
	<div id="sidebar">
	  <div id="sidebar2">
	    <p align="center">
        <h1 align="center"><strong>Menu	:</strong></h1>
	    <p align="center">&nbsp;</p>
	    </p>
	    <div align="center">
	      <table width="200" border="1">
	        <tr bgcolor="#BFFFFF">
	          <td><h6 align="center"><a style="text-decoration: none;" color: #000; href="?page=buku_data">Daftar Buku</a></h6></td>
              
            </tr>
             <tr bgcolor="#BFFFFF">
	          <td><h6 align="center"><a style="text-decoration: none;" href="?page=registrasi">Registrasi</a></h6></td>
              
            </tr>
  <tr bgcolor="#BFFFFF">
	          <td><h6 align="center"><a style="text-decoration: none;" href="?page=konfirmasi">Konfirmasi</a></h6></td>
              
            </tr>           
            
          </table>
        </div>
	    <p align="center">&nbsp;</p>
	    <p align="center">&nbsp;</p>
        
<div id="login_anggota"> <!--login_anggota broo-->        
	    <form name="form1" method="post" action="login_user_proses.php">
	      <p align="center">
	        <label for="login_anggota"></label>
          <span class="LOGIN_ANGGOTA_JUDUL">LOGIN ANGGOTA</span></p>
	      <p align="center">&nbsp;</p>
	      <p align="center">Username 
	        <input type="text" name="username" id="username" required>
          </p>
	      <p align="center">&nbsp;</p>
	      <p align="center">Password 
	        <input type="password" name="password" id="password" required>
	      </p>
	      <p align="center">&nbsp;</p>
	      <p align="center">
	        <input type="submit" name="login" id="login" value="LOGIN">
	      </p>
	    </form>
</div> 
<!--login_anggota broo-->       
        
	    <p align="center">&nbsp;</p>
	  </div>
	</div>


    
</div> <!--konten broo-->

<div id="footer">
	<div id="quotes">
	  <h2>IF YOU ARE <font color="#0099CC">THINKING</font></h2>
	  <p>&nbsp;</p>
	  <p>“Now is reader, tomorrow be leader”</p>
	  <p>&nbsp;</p>
	  <p>Dengan banyak membaca akan memiliki banyak pengetahuan sehingga diharapkan kelak dapat menjadi pemimpin yang berkualitas,cerdas, dan berkepribadian Indonesia.</p>
      <p><br>
      </p>
      <div align="left"><br>
        <strong>	[Hyu . 25/11/16]</strong>
      </div>
    </div> <!--quotes broo-->
    
	<div id="sosial">
		<p><strong>Stay <font color="#0099CC">Connected</font></strong></p>
		<p>&nbsp;</p>
		<p><a href="https://www.facebook.com/error404.go.id"><img src="images/fb.png" width="80" height="80" class="sosi"  target="new"></a>
        <a href="https://twitter.com/perpusnas1"><img src="images/tw.png" width="80" height="80" class="sosi"></a>
        <a href="https://www.instagram.com/libkemenperin/"><img src="images/ig.png" width="86" height="86" class="sosi"></a></p>
    </div> <!--sosial broo-->
</div> <!--footer broo-->

<div id="name"><strong>Perpustakaan Online &copy; 2017 </strong></div>
</div> <!--wrapper broo-->

	<!-- js menu -->
    <script src="menu/newspry.js"></script>
    <!-- js menu -->
    
    
    

    
</body>
</html>