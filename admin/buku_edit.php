<?php 
	include '../conn/koneksi.php';

	$id_buku		= $_GET['id_buku'];

	$query = "SELECT * FROM tb_buku WHERE id_buku=$id_buku";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	
	$judul_buku = $data['judul_buku'];
	$penulis = $data['penulis'];
	$jenis = $data['jenis'];

?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">EDIT BUKU</div>


<div id="tabel">

<form id="form1" name="form1" method="post" action="?page=buku_edit_proses">
<div align="center">
      <p>&nbsp;</p>
      <table class="table" cellpadding="0" cellspacing="0" border="0" align="center">
      
  <?php
            $id_buku	= isset($_GET['id_buku']) ? $_GET['id_buku'] : "";
			$query=mysql_query("SELECT * FROM tb_buku WHERE id_buku='$id_buku'", $dbconn);
			$data=mysql_fetch_array($query);
			?>      
      
        <tr>
          <td width="125" height="30" class="title"><strong>ID. BUKU</strong></td>
          <td width="13" height="30" class="title">:</td>
          <td width="25" height="30" class="title"><input name="id_buku" type="text" required="required" id="id_buku" value="<?php echo $data['id_buku']; ?>" readonly="readonly"></td>
        </tr>
        <tr>
          <td height="30" class="title">Judul Buku</td>
          <td height="30" class="title">:</td>
          <td width="25" height="30" class="title"><input name="judul_buku" type="text" required="required" id="judul_buku" value="<?php echo $data['judul_buku']; ?>" /></td>
        </tr>
        <tr>
          <td height="37" class="title">Penulis</td>
          <td height="37" class="title">:</td>
          <td width="234" height="37" class="title"><input type="text" name="penulis" id="penulis" value="<?php echo $data['penulis']; ?>" required="required"></td>
        </tr>
        <tr>
          <td height="31">Jenis</td>
          <td>:</td>
          <td><select name="jenis" required>
			<option value="novel"		<?php if( $jenis=='novel'){echo "selected"; } ?>		>novel</option>
            <option value="komik"		<?php if( $jenis=='komik'){echo "selected"; } ?>		>komik</option>
            <option value="biografi"	<?php if( $jenis=='biografi'){echo "selected"; } ?>		>biografi</option>
            <option value="ensiklopedi"	<?php if( $jenis=='ensiklopedi'){echo "selected"; } ?>	>ensiklopedi</option>
            <option value="panduan"		<?php if( $jenis=='panduan'){echo "selected"; } ?>		>panduan</option>
          </select></td>
        </tr>
        <tr>
          <td height="46" colspan="2"></td>
          <td><p>
            <input type="submit" value="Update" />
          </p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
</form>
</div>

<div id="back"> <a style="text-decoration: none"; href="index.php?page=buku_data">Kembali</a> </div>