<?php 
	include '../conn/koneksi.php';

	$id_admin		= $_GET['id_admin'];

	$query = "SELECT * FROM tb_admin WHERE id_admin=$id_admin";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	
	$nama = $data['nama'];
	$username = $data['username'];;
	$password = $data['password'];
	$tempat = $data['tempat'];
	$tgl_lahir = $data['tgl_lahir'];
	$kelamin = $data['kelamin'];
	$level = $data['level'];

?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">EDIT PROFIL ADMIN</div>


<div id="tabel">

<form id="form1" name="form1" method="post" action="?page=admin_edit_proses">
<div align="center">
      <p>&nbsp;</p>
      <table width="401" border="0">
  
  <?php
            $id_admin	= isset($_GET['id_admin']) ? $_GET['id_admin'] : "";
			$query=mysql_query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'", $dbconn);
			$data=mysql_fetch_array($query);
			?>
            
    <tr>
    <td width="154">Nama</td>
    <td width="11">:</td>
    <td width="214"><input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>username</td>
    <td>:</td>
    <td><input name="username" type="text" required="required" id="username" value="<?php echo $data['username']; ?>" readonly="readonly"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>&nbsp;</td>
    <td><input type="password" name="password" value="<?php echo $data['password']; ?>" required></td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td>:</td>
    <td><input type="text" name="tempat" id="tempat" value="<?php echo $data['tempat']; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>No. Telepon</td>
    <td>:</td>
    <td><input type="text" name="no_telepon" id="no_telepon" value="<?php echo $data['no_telepon']; ?>" required="required"/></td>
  </tr>

  <tr>
    <td>Kelamin</td>
    <td>:</td>
    <td><select name="kelamin" id="kelamin"required="required">
      <option value="L" <?php if( $kelamin=='L'){echo "selected"; } ?>>Laki-laki</option>
      <option value="P" <?php if( $kelamin=='P'){echo "selected"; } ?>>Perempuan</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p>
      <p>
        <input type="submit" value="Update" />
        </p></td>
  </tr>
</table>
    </div>
</form>
</div>

<div id="back"> <a style="text-decoration: none"; href="index.php?page=profil_admin">Kembali</a> </div>