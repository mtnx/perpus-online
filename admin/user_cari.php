<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">PENCARIAN USER</div>

<div id="tabel">
<div align="left">
  <table width="100%" height="94" align="center" cellspacing="0" cellpadding="5" border="0">
    <thead align="center">
      <tr>
        <td colspan="2"><form action="?page=user_cari" method="post">
          <div align="left"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  ></a></strong>
            <input type="text" name="cari" size="50" placeholder="Nama, Username, atau ID.User" required="required"/>
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

	$query = "SELECT * FROM tb_user where nama like '%$cari%' OR username like '%$cari%' OR id_user like '%$cari%'";
	$sql = mysql_query($query);
	$total = mysql_num_rows($sql);
	$no = 1;
	
	while ($data=mysql_fetch_array($sql)) { ?>
  <tbody align="center">
    <tr>
      <td height="36"><?php echo $no; ?></td>
      <td><?php echo $data['id_user']; ?></td>
      <td><a style="text-decoration: none;" href="?page=user_detail&amp;id_user=<?php echo $data['id_user']; ?>"> <?php echo $data['nama']; ?></a></td>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['tgl_masuk']; ?></td>
      <td><a href="?page=user_hapus&amp;id_user=<?php echo $data['id_user']; ?>" onclick="return confirm('Anda yakin ingin menghapus User <?php echo $data['nama']; ?> ?')"><img src="../images/hapus.png" alt=""/ width="15px" height="15px" /></a></td>
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


<div id="back"> <a style="text-decoration: none"; href="index.php?page=user_data">Kembali</a> </div>