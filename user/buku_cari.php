<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">PENCARIAN BUKU</div>

<div id="tabel">
<div align="left">
  <table width="100%" height="124" align="center" cellspacing="0" cellpadding="5" border="0">
    <thead align="center">
      <tr>
        <td colspan="2"><form action="?page=buku_cari" method="post">
          <div align="left"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  ></a></strong>
            <input type="text" name="cari" size="50" placeholder="Judul Buku, Penulis, Jenis Buku"required="required" />
            <input type="submit" name="button" id="submit" value="Cari" />
            </div>
        </form></td>
        <td height="47">&nbsp;</td>
      </tr>
      <tr>
        <td width="22%">&nbsp;</td>
        <td width="71%" height="47">Hasil Pencarian &quot; <?php echo $_POST['cari'] ;?> &quot; ditemukan :</td>
        <td width="7%" height="47">&nbsp;</td>
        </tr>
      </thead>
    <?php

	$query = "SELECT * FROM tb_buku ORDER by id_buku";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	$no = 1;
	
	while ($data=mysql_fetch_array($sql)) { ?>
    <tbody align="center">
      <?php $no++; } ?>
      </tbody>
  </table>
</div>
<table width="100%" height="auto" align="center" cellspacing="0" cellpadding="5" border="1">
  <thead align="center">
    <tr>
      <td width="10" height="47"><strong>No</strong></td>
      <td width="90"><strong>Judul Buku</strong></td>
      <td width="90"><strong>Penulis</strong></td>
      <td width="50"><strong>Jenis</strong></td>
      </tr>
  </thead>
           <?php
		   		include '../conn/koneksi.php';
		   		$cari = $_POST['cari'];
				$query = "SELECT * FROM tb_buku where judul_buku like '%$cari%' OR penulis like '%$cari%' OR jenis like '%$cari%' ";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
  <tbody align="center">
    <tr>
		<td height="36"><?php echo $no; ?></td>
   	            <td><div align="center"><a style="text-decoration: none;" href="<?php echo $data['file']; ?>"<?php echo $data['id_buku']; ?>" target="new"><?php echo $data['judul_buku']; ?></a></div></td>
		<td><?php echo $data['penulis']; ?></td>
		<td><?php echo $data['jenis']; ?></td>
	  </tr>
    <?php $no++; } ?>
  </tbody>
</table>

<p>&nbsp;</p>
<table width="100%" style="border:0px solid #9cc;">
  <tr>
    <td width="50%">Jumlah : <?php echo $total; ?> buku</td>
  </tr>
</table>
<p>&nbsp;</p>
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=buku_data">Kembali</a> </div>
