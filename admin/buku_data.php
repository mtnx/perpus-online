<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">DATA BUKU</div>

<div id="tabel">
<div align="left">
  <table width="100%" height="auto" align="center" cellspacing="0" cellpadding="5" border="0">
    <thead align="center">
      <tr>
        <td width="17%"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  >Input Buku</a></strong></td>
        <td width="38%"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  ></a></strong></td>
        <td width="45%" height="47">
        
        
        <form action="?page=buku_cari" method="post">
          <div align="left"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  ></a></strong>
            <input type="text" name="cari" size="30" placeholder="Ketik Judul, Penulis, Jenis Buku"required>
            <input type="submit" name="button" id="submit" value="Cari" />
          </div>
        </form></td>
        </tr>
      </thead>
    <?php

	$query = "SELECT * FROM tb_buku ORDER by id_buku DESC";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	$no = 1;
	
	while ($data=mysql_fetch_array($sql)) { ?>
    <tbody align="center">
      <?php $no++; } ?>
      </tbody>
  </table>
</div>
<p>&nbsp;</p>
<table width="100%" height="auto" align="center" cellspacing="0" cellpadding="5" border="1">
  <thead align="center">
    <tr>
      <td width="10" height="47"><strong>No</strong></td>
      <td width="90"><strong>ID.Buku</strong></td>
      <td width="90"><strong>Judul Buku</strong></td>
      <td width="90"><strong>Penulis</strong></td>
      <td width="50"><strong>Jenis</strong></td>
      <td width="80"><strong>Tanggal Input</strong></td>
      <td width="10"><strong>Edit</strong></td>
      <td width="10"><strong>Hapus</strong></td>
    </tr>
  </thead>
  <?php

	$query = "SELECT * FROM tb_buku ORDER by id_buku DESC";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	$no = 1;
	
	while ($data=mysql_fetch_array($sql)) { ?>
    
  <tbody align="center">
    <tr>
		<td height="36"><?php echo $no; ?></td>
		<td><?php echo $data['id_buku']; ?></td>
   	            <td><div align="center"><a style="text-decoration: none;" href="<?php echo $data['file']; ?>"<?php echo $data['id_buku']; ?>" target="new"><?php echo $data['judul_buku']; ?></a></div></td>
		<td><?php echo $data['penulis']; ?></td>
		<td><?php echo $data['jenis']; ?></td>
		<td><?php echo $data['tgl_upload']; ?></td>		<td><a href="?page=buku_edit&id_buku=<?php echo $data['id_buku']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
		<td><a href="?page=buku_hapus&id_buku=<?php echo $data['id_buku']; ?>" onclick="return confirm('Anda yakin ingin menghapus Buku <?php echo $data['judul_buku']; ?> ?')"><img src="../images/hapus.png"/ width="15px" height="15px"></a></td>
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
</div>
<p>&nbsp;</p>
<p></p>
<p>&nbsp;</p>
