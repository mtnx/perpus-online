<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">PENCARIAN ADMIN</div>

<div id="tabel">
<div align="left">
  <table width="100%" height="94" align="center" cellspacing="0" cellpadding="5" border="0">
    <thead align="center">
      <tr>
        <td colspan="2"><form action="?page=admin_cari" method="post">
          <div align="left"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  ></a></strong>
            <input type="text" name="cari" size="50" placeholder="Nama, Username, atau ID.Admin" required="required"/>
            <input type="submit" name="button" id="submit" value="Cari" />
            </div>
        </form></td>
        <td height="47">&nbsp;</td>
      </tr>
      <tr>
        <td width="28%">&nbsp;</td>
        <td width="57%">Hasil Pencarian &quot; <?php echo $_POST['cari'] ;?> &quot; ditemukan :</td>
        <td width="15%" height="47">&nbsp;</td>
        </tr>
      </thead>
    <?php

	$query = "SELECT * FROM tb_admin ORDER by id_admin";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	$no = 1;
	
	while ($data=mysql_fetch_array($sql)) { ?>
    <tbody align="center">
      <?php $no++; } ?>
      </tbody>
  </table>
</div>
<table width="100%" height="85" align="center" cellspacing="0" cellpadding="5" border="1">
  <thead align="center">
    <tr>
      <td height="47"><strong>No</strong></td>
      <td><strong>ID. Admin</strong></td>
      <td><strong>Nama</strong></td>
      <td><strong>Username</strong></td>
      <td><strong>Tanggal Masuk</strong></td>
      <td><strong>Hapus</strong></td>
    </tr>
  </thead>
          <?php
		   		include '../conn/koneksi.php';
		   		$cari = $_POST['cari'];
				$query = "SELECT * FROM tb_admin where nama like '%$cari%' OR username like '%$cari%' OR id_admin like '%$cari%' ";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
  <tbody align="center">
    <tr>
      <td width="10" height="36"><?php echo $no; ?></td>
      <td width="90"><?php echo $data['id_admin']; ?></td>
      <td width="50"><a style="text-decoration: none;" href="?page=admin_detail&amp;nama=<?php echo $data['nama']; ?>"> <?php echo $data['nama']; ?></a></td>
      <td width="90"><?php echo $data['username']; ?></td>
      <td width="10"><?php echo $data['tgl_masuk']; ?></td>
      <td width="10"><a href="?page=admin_hapus&amp;id_admin=<?php echo $data['id_admin']; ?>" onclick="return confirm('Anda yakin ingin menghapus Admin <?php echo $data['nama']; ?> ?')"><img src="../images/hapus.png" alt=""/ width="15px" height="15px" /></a></td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>

<p>&nbsp;</p>
<table width="100%" style="border:0px solid #9cc;">
  <tr>
    <td width="50%">Jumlah : <?php echo $total; ?> anggota</td>
  </tr>
</table>
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=admin_data">Kembali</a> </div>