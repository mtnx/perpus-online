<link rel="stylesheet" type="text/css" href="artikelcss.css">

<div id="judul">CEK ID.REGISTRASI</div>

<div id="tabel">

<p>&nbsp;</p>

  <?php  
    // konfigurasi  

include "conn/koneksi.php";?>


 <form action="" method="post" name="pencarian" id="pencarian">  
    <p align="center"><strong>CEK ID.REGISTRASI ANDA</strong> 
         <input type="text" name="id_registrasi" id="id_registrasi" required="required">  
         <input type="submit" name="submit" id="submit" value="CEK">
    </p>
    </form>  
    
<p>&nbsp;</p>
      <div align="center">
        <p>&nbsp;</p>
        <p>
          <?php  
    // konfigurasi  

include "conn/koneksi.php";
      
    // menampilkan data  
    // lihat perubahannya di bawah ini:  
    if ((isset($_POST['submit'])) AND ($_POST['id_registrasi'] <> "")) {  
      $id_registrasi = $_POST['id_registrasi'];  
      $sql = mysql_query("SELECT * FROM tb_registrasi WHERE id_registrasi LIKE '%$id_registrasi%' ") or die(mysql_error());  
        while ($data=mysql_fetch_array($sql)) { ?>
          
                 
        </p>
        <table width="429" border="0">  
          
          <tr>
            <td width="157" height="31">Nama</td>
            <td width="11">:</td>
            <td width="247"><?php echo $data['nama']; ?></td>
            </tr>
          <tr>
            <td height="28">Username</td>
            <td>:</td>
            <td><?php echo $data['username']; ?></td>
            </tr>
          <tr>
            <td height="29">Tempat</td>
            <td>:</td>
            <td><?php echo $data['tempat']; ?></td>
            </tr>
          <tr>
            <td height="26">Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $data['tgl_lahir']; ?></td>
          </tr>
          <tr>
            <td height="26">No. Telepon</td>
            <td>:</td>
            <td><?php echo $data['no_telepon']; ?></td>
            </tr>
          <tr>
            <td height="30">Tanggal Registrasi</td>
            <td>:</td>
            <td><?php echo $data['tgl_registrasi']; ?></td>
            </tr>
          <tr>
            <td height="29">Kelamin</td>
            <td>:</td>
            <td><?php echo $data['kelamin']; }}?></td>
            </tr>
        </table>
      </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    <form id="form1" name="form1" method="post" action="?page=konfirmasi">
      <label for="textfield"></label>
      <p align="center">ID.REGISTRASI Anda 
        <input name="id_registrasi" type="text" id="id_registrasi" value="<?php echo $id_registrasi; ?>" readonly="readonly" />
      </p>
      <p align="center">&nbsp;</p>
  
      <p align="center">
        <input type="submit" name="button" id="button" value="INPUT KONFIRMASI" />
      </p>

</form>    
    
  <p>&nbsp;</p>
  <p>&nbsp;</p>

</div>

<div id="back"> <a style="text-decoration: none"; href="index.php?page=konfirmasi">Kembali</a> </div>