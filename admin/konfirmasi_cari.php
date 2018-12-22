<?php include '../conn/koneksi.php';?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">PENCARIAN KONFIRMASI</div>

<div id="tabel">
<div align="left">
  <table width="100%" height="94" align="center" cellspacing="0" cellpadding="5" border="0">
    <thead align="center">
      <tr>
        <td colspan="2"><form action="?page=konfirmasi_cari" method="post">
          <div align="left"><strong><a style="text-decoration: none; color: #000;" href="?page=buku_input"  ></a></strong>
            <input type="text" name="cari" size="50" placeholder="Ketik ID. Konfirmasi" required="required"/>
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

	$query = "SELECT * FROM tb_konfirmasi ORDER by id_konfirmasi";
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
      <td><strong>ID.Konfirmasi</strong></td>
      <td><strong>ID.Registrasi</strong></td>
      <td><strong>Tanggal Konfirmasi</strong></td>
      <td><strong>Bukti Transfer</strong></td>
      <td><strong>Hapus</strong></td>
    </tr>
  </thead>
          <?php
		   		include '../conn/koneksi.php';
		   		$cari = $_POST['cari'];
				$query = "SELECT * FROM tb_konfirmasi where id_konfirmasi like '%$cari%'";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
  <tbody align="center">
    <tr>
      <td width="10" height="36"><h6><?php echo $no; ?></h6></td>
      <td width="90"><a href="?page=konfirmasi_detail&amp;id_konfirmasi=<?php echo $data['id_konfirmasi'];?>"><?php echo $data['id_konfirmasi']; ?></a></td>
      <td width="50"><a href="?page=reg_detail_user&amp;id_registrasi=<?php echo $data['id_registrasi'];?>"><?php echo $data['id_registrasi']; ?></a></td>
      <td width="90"><?php echo $data['tgl_konfirmasi']; ?></td>
      <td width="10"><a style="text-decoration: none;" href="<?php echo $data['bukti_transfer']; ?>"<?php echo $data['id_konfirmasi']; ?>" target="new"><img src="../images/uang.png"/ width="17px" height="17px" /></a></td>
      <td width="10"><a href="?page=konfirmasi_hapus&amp;id_konfirmasi=<?php echo $data['id_konfirmasi']; ?>" onclick="return confirm('Anda yakin ingin menghapus data konfirmasi <?php echo $data['id_konfirmasi']; ?> ?')"><img src="../images/hapus.png"/ width="15px" height="15px" /></a></td>
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