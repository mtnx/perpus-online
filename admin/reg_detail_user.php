<?php include '../conn/koneksi.php';






$char ='USR'; 
$today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI

   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(id_user) as maxID FROM tb_user WHERE id_user LIKE '$char$today%' ";
    $hasil = mysql_query($query1);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxID'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 11, 3);
    $NoUrut++; //nomor urut +1


   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $char. $today .sprintf('%03s', $NoUrut);
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini



     
            $id_registrasi	= isset($_GET['id_registrasi']) ? $_GET['id_registrasi'] : "";
			$query=mysql_query("SELECT tb_registrasi.*,tb_konfirmasi.id_konfirmasi FROM tb_registrasi,tb_konfirmasi WHERE tb_registrasi.id_registrasi='$id_registrasi'", $dbconn);
			$data=mysql_fetch_array($query);
		

?>





<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">INPUT USER</div>

<div id="tabel">
  <p>&nbsp;</p>
  <div align="center">
    <form id="form1" name="form1" method="post" action="reg_detail_user_proses.php">
      <p>&nbsp;</p>
      <table width="429" border="0">
        <tr>
          <td height="31">ID. User</td>
          <td>:</td>
          <td><input name="id_user" type="text" id="id_user" value="<?php echo $NewID;?>" readonly="readonly"/></td>
        </tr>
        <tr>
          <td width="157" height="31">Nama</td>
          <td width="11">:</td>
          <td width="158"><input name="nama" type="text" id="nama" value="<?php echo $data['nama']; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="28">Username</td>
          <td>:</td>
          <td><input name="username" type="text" id="username" value="<?php echo $data['username']; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="28">Password</td>
          <td>:</td>
          <td><input name="password" type="password" id="password" value="<?php echo $data['password']; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="29">Tempat</td>
          <td>:</td>
          <td><input name="tempat" type="text" id="tempat" value="<?php echo $data['tempat']; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="26">Tanggal Lahir</td>
          <td>:</td>
          <td><input name="tgl_lahir" type="text" id="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="26">No. Telepon</td>
          <td>:</td>
          <td><input name="no_telepon" type="text" id="no_telepon" value="<?php echo $data['no_telepon']; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="30">Tanggal Masuk</td>
          <td>:</td>
          <td><p>
            <input type="text" name="tgl_registrasi" id="tgl_registrasi"  value="<?php echo $data['tgl_registrasi']; ?>" />
          </p></td>
        </tr>
        <tr>
          <td height="29">Kelamin</td>
          <td>:</td>
          <td><input name="kelamin" type="text" id="kelamin" value="<?php echo $data['kelamin']; ?>" readonly="readonly" /></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="input" id="input" value="INPUT USER" />
      </p>
      <p>&nbsp;</p>
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=konfirmasi_data">Kembali</a> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
