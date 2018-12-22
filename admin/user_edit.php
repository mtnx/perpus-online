<?php 
	include '../conn/koneksi.php';

	$id_user		= $_GET['id_user'];

	$query = "SELECT * FROM tb_user WHERE id_user=$id_user";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	
	$nama = $data['nama'];
	$username = $data['username'];
	$password = $data['password'];
	$tempat = $data['tempat'];
	$tgl_lahir = $data['tgl_lahir'];
	$kelamin = $data['kelamin'];
	$level = $data['level'];

?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">EDIT USER</div>


<div id="tabel">

<form id="form1" name="form1" method="post" action="?page=user_edit_proses">
<div align="center">
      <p>&nbsp;</p>
      <table width="401" border="0">
  
  <?php
            $id_user	= isset($_GET['id_user']) ? $_GET['id_user'] : "";
			$query=mysql_query("SELECT * FROM tb_user WHERE id_user='$id_user'", $dbconn);
			$data=mysql_fetch_array($query);
			?>
            
    <tr>
    <td width="154">Nama</td>
    <td width="11">:</td>
    <td width="214"><input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $username; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>&nbsp;</td>
    <td><input type="password" name="password" value="<?php echo $password; ?>" required></td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td>:</td>
    <td><input type="text" name="tempat" id="tempat" value="<?php echo $tempat; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required="required"/></td>
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

<div id="back"> <a style="text-decoration: none"; href="index.php?page=user_data">Kembali</a> </div>