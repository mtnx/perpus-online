<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul"> PROFIL USER</div>

<div id="tabel">

  <p align="center">&nbsp;</p>
<div align="center">
    <table width="326" border="0">
      
      <?php
            $username	= isset($_GET['username']) ? $_GET['username'] : "";
			$query=mysql_query("SELECT * FROM tb_user WHERE username='$username'", $dbconn);
			$data=mysql_fetch_array($query);
			?>
      
      <tr>
        <td width="157">Nama</td>
        <td width="11">:</td>
        <td width="144"><?php echo $data['nama']; ?></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><?php echo $data['username']; ?></td>
      </tr>
      <tr>
        <td>Tempat</td>
        <td>:</td>
        <td><?php echo $data['tempat']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $data['tgl_lahir']; ?></td>
      </tr>
      <tr>
        <td>No. Telepon</td>
        <td>:</td>
        <td><?php echo $data['no_telepon']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><?php echo $data['tgl_masuk']; ?></td>
      </tr>
      <tr>
        <td>Kelamin</td>
        <td>:</td>
        <td><?php echo $data['kelamin']; ?></td>
      </tr>
  </table>
    <p>&nbsp;</p>
  </div>

<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
