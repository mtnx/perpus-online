<?php
include('../conn/koneksi.php');



$char ='ADM'; 
$today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI

   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(id_admin) as maxID FROM tb_admin WHERE id_admin LIKE '$char$today%' ";
    $hasil = mysql_query($query1);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxID'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 11, 3);
    $NoUrut++; //nomor urut +1


   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $char. $today .sprintf('%03s', $NoUrut);
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini

?>



<link rel="stylesheet" type="text/css" href="../artikelcss.css">

<div id="judul">INPUT ADMIN</div>



<div id="tabel">
  <p>&nbsp;</p>
  <form name="form1" method="post" action="admin_input_proses.php">
    <div align="center">
      <table width="317" border="0">
        <tr>
          <td><strong>ID. Admin</strong></td>
          <td>:</td>
          <td><input name="id_admin" type="text" id="id_admin" value="<?php echo $NewID;?>" readonly="readonly"/></td>
        </tr>
        <tr>
          <td width="133">Nama Lengkap</td>
          <td width="12">:</td>
          <td width="158"><input type="text" name="nama" id="nama" required="required"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" id="username" required="required"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" id="password" required="required"></td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td>:</td>
          <td><input type="text" name="tempat" id="tempat" required="required" ></td>
        </tr>
        <tr>
          <td>No. Telepon</td>
          <td>:</td>
          <td><input type="text" name="no_telepon" id="no_telepon" required="required" /></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td><p>
            <input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="Tahun-Bulan-Tanggal"  required="required">
          </p></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><select name="kelamin" id="kelamin" required>
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select></td>
        </tr>
      </table>
    </div>
    <p align="center">&nbsp;</p>
    <p align="center">
      <input type="submit" name="button" id="button" value="Simpan">
    </p>
    <p align="center">&nbsp;</p>
  </form>
</div>

<div id="back"> <a style="text-decoration: none"; href="index.php?page=admin_data">Kembali</a> </div>