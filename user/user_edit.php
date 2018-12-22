<?php 
	include '../conn/koneksi.php';

?>

<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">EDIT PROFIL USER</div>


<div id="tabel">

<form id="form1" name="form1" method="post" action="?page=user_edit_proses">
<div align="center">
      <p>&nbsp;</p>
      <table width="401" border="0">
  
      <?php
            $username	= isset($_GET['username']) ? $_GET['username'] : "";
			$query=mysql_query("SELECT * FROM tb_user WHERE username='$username'", $dbconn);
			$data=mysql_fetch_array($query);
			?>
    <tr>
    <td width="154">Nama</td>
    <td width="11">:</td>
    <td width="214"><input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required="required"/></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $data['username']; ?>" required="required"/></td>
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
    <td><select name="kelamin" id="kelamin" value="<?php echo $data['kelamin']; ?>" required="required">
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
        </p>
      <p>&nbsp;</p></td>
  </tr>
</table>
    </div>
</form>
</div>