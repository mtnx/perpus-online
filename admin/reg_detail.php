<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">  DETAIL REGISTRASI</div>

<div id="tabel">
  <p>&nbsp;</p>
  <div align="center">
    <table width="429" border="0">

      
      <?php
            $id_registrasi	= isset($_GET['id_registrasi']) ? $_GET['id_registrasi'] : "";
			$query=mysql_query("SELECT * FROM tb_registrasi WHERE id_registrasi='$id_registrasi'", $dbconn);
			$data=mysql_fetch_array($query);
			?>      
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
        <td height="30">Tanggal Registrasi</td>
        <td>:</td>
        <td><?php echo $data['tgl_registrasi']; ?></td>
      </tr>
      <tr>
        <td height="29">No. Telepon</td>
        <td>:</td>
        <td><?php echo $data['no_telepon']; ?></td>
      </tr>
      <tr>
        <td height="29">Kelamin</td>
        <td>:</td>
        <td><?php echo $data['kelamin']; ?></td>
      </tr>
  </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=reg_data">Kembali</a> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
