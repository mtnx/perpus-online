<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">DATA USER</div>

<div id="tabel">
<div align="left">
  <table width="100%" height="auto" align="center" cellspacing="0" cellpadding="5" border="0">
    <thead align="center">
      <tr>
        <td width="22%">&nbsp;</td>
        <td width="33%"><strong><a style="text-decoration: none; color: #000;" href=""  ></a></strong></td>
        <td width="45%" height="47">
        
        <form action="?page=user_cari" method="post">
          <div align="left"><strong><a style="text-decoration: none; color: #000;" href="?page=user_input"  ></a></strong>
            <input type="text" name="cari" size="30" placeholder="Nama, Username, Atau ID.User" required>
            <input type="submit" name="button" id="submit" value="Cari" />
          </div>
        </form>
        
        </td>
        </tr>
      </thead>
    <?php

	$query = "SELECT * FROM tb_user ORDER by id_user";
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
      <td width="20" height="47"><strong>No</strong></td>
      <td width="66"><strong>ID. User</strong></td>
      <td width="74"><strong>Nama</strong></td>
      <td width="68"><strong>Username</strong></td>
      <td width="90"><strong>Tanggal Masuk</strong></td>
      <td width="46"><strong>Hapus</strong></td>
    </tr>
  </thead>
  <?php

	$query = "SELECT * FROM tb_user ORDER by nama";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	$no = 1;
	
	while ($data=mysql_fetch_array($sql)) { ?>
  <tbody align="center">
    <tr>
		<td height="36"><?php echo $no; ?></td>
		<td><?php echo $data['id_user']; ?></td>
		<td><a style="text-decoration: none;" href="?page=user_detail&id_user=<?php echo $data['id_user']; ?>"> <?php echo $data['nama']; ?></a></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['tgl_masuk']; ?></td>
        <td><a href="?page=user_hapus&id_user=<?php echo $data['id_user']; ?>" onclick="return confirm('Anda yakin ingin menghapus User <?php echo $data['nama']; ?> ?')"><img src="../images/hapus.png"/ width="15px" height="15px"></a></td>
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
<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p></p>
<p>&nbsp;</p>