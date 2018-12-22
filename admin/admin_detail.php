<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul"> ADMIN DETAIL</div>

<div id="tabel">
  <p>&nbsp;</p>
  <div align="center">
    <table width="429" border="0">
      
      <?php
            $nama	= isset($_GET['nama']) ? $_GET['nama'] : "";
			$query=mysql_query("SELECT * FROM tb_admin WHERE nama='$nama'", $dbconn);
			$data=mysql_fetch_array($query);
			?>
      
      <tr>
        <td width="157">Nama</td>
        <td width="11">:</td>
        <td width="247"><?php echo $data['nama']; ?></td>
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
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=admin_data">Kembali</a> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
