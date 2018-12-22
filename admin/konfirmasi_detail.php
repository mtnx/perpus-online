<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">  DETAIL KONFIRMASI</div>

<div id="tabel">
  <p>&nbsp;</p>
  <div align="center">
    <table width="429" border="0">

      
      <?php
            $id_konfirmasi	= isset($_GET['id_konfirmasi']) ? $_GET['id_konfirmasi'] : "";
			$query=mysql_query("SELECT * FROM tb_konfirmasi WHERE id_konfirmasi='$id_konfirmasi'", $dbconn);
			$data=mysql_fetch_array($query);
			?>      
      <tr>
        <td width="157" height="31"><strong>ID. Konfirmasi</strong></td>
        <td width="11">:</td>
        <td width="247"><?php echo $data['id_konfirmasi']; ?></td>
      </tr>
      <tr>
        <td height="28"><strong>ID. Registrasi</strong></td>
        <td>:</td>
        <td><?php echo $data['id_registrasi']; ?></td>
      </tr>
      <tr>
        <td height="29">Tanggal Konfirmasi</td>
        <td>:</td>
        <td><?php echo $data['tgl_konfirmasi']; ?></td>
      </tr>
      <tr>
        <td height="26">Nominal</td>
        <td>:</td>
        <td><?php echo $data['nominal']; ?></td>
      </tr>
      <tr>
        <td height="30">Bank</td>
        <td>:</td>
        <td><?php echo $data['bank']; ?></td>
      </tr>
      <tr>
        <td height="29">No. Rekening</td>
        <td>:</td>
        <td><?php echo $data['no_rekening']; ?></td>
      </tr>
      <tr>
        <td height="29">Atas Nama</td>
        <td>:</td>
        <td><?php echo $data['atas_nama']; ?></td>
      </tr>
  </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>

<div id="back"> <a style="text-decoration: none"; href="index.php?page=konfirmasi_data">Kembali</a> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
