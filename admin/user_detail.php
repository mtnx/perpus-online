<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul"> USER DETAIL</div>

<div id="tabel">
  <p>&nbsp;</p>
  <div align="center">
    <table width="371" border="0">
      
      <?php
            $id_user	= isset($_GET['id_user']) ? $_GET['id_user'] : "";
			$query=mysql_query("SELECT * FROM tb_user WHERE id_user='$id_user'", $dbconn);
			$data=mysql_fetch_array($query);
			?>
      
      <tr>
        <td width="121" height="27">Nama</td>
        <td width="12">:</td>
        <td width="224"><?php echo $data['nama']; ?></td>
      </tr>
      <tr>
        <td height="28">Username</td>
        <td>:</td>
        <td><?php echo $data['username']; ?></td>
      </tr>
      <tr>
        <td height="26">Tempat</td>
        <td>:</td>
        <td><?php echo $data['tempat']; ?></td>
      </tr>
      <tr>
        <td height="29">Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $data['tgl_lahir']; ?></td>
      </tr>
      <tr>
        <td height="28">No. Telepon</td>
        <td>:</td>
        <td><?php echo $data['no_telepon']; ?></td>
      </tr>
      <tr>
        <td height="28">Tanggal Masuk</td>
        <td>:</td>
        <td><?php echo $data['tgl_masuk']; ?></td>
      </tr>
      <tr>
        <td height="26">Kelamin</td>
        <td>:</td>
        <td><?php echo $data['kelamin']; ?></td>
      </tr>
  </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=user_data">Kembali</a> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
