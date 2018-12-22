<?php
include('conn/koneksi.php');




$char ='REG'; 
$today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI

   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(id_registrasi) as maxID FROM tb_registrasi WHERE id_registrasi LIKE '$char$today%' ";
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


<link rel="stylesheet" type="text/css" href="artikelcss.css">

<div id="judul">REGISTRASI</div>



<div id="tabel">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="reg_input_proses.php">
    <div align="center">
      <p><strong>Harap selalu diingat ID. Registrasi anda, untuk proses Konfirmasi.</strong></p>
      <p>&nbsp;</p>
      <table width="317" border="0">
         <tr>
          <td width="133"><strong>ID.Registrasi</strong></td>
          <td width="12">:</td>
          <td width="158"><input type="text" name="id_registrasi" id="id_registrasi" value="<?php echo $NewID ;?>" readonly=""></td>
        </tr>     
        <tr>
          <td width="133">Nama Lengkap</td>
          <td width="12">:</td>
          <td width="158"><input type="text" name="nama" id="nama" pattern="[a-z A-Z]+" placeholder="Nama" required oninvalid="this.setCustomValidity('Input hanya berupa huruf !')"/></td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" id="username" pattern=".\S+" placeholder="Username" required oninvalid="this.setCustomValidity('Tidak boleh ada spasi !')"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" id="password" pattern=".{6,12}" placeholder="Password" title="minimal 6 maksimal 12 karakter" /></td>
        </tr>
        <tr>
          <td>Tempat</td>
          <td>:</td>
          <td><input type="text" name="tempat" id="tempat" placeholder="Tempat" required="required"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td><p>
            <input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="Tahun-Bulan-Tanggal"  required="required" />
          </p></td>
        </tr>
        <tr>
          <td>No. Telepon</td>
          <td>:</td>
          <td><p>
            <input type="text" name="no_telepon" id="no_telepon" pattern="[0-9]+" placeholder="No. Telepon" required oninvalid="this.setCustomValidity('Input hanya berupa angka !')">
          </p></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><select name="kelamin" id="kelamin" required="required" oninvalid="this.setCustomValidity('Belum terisi !')">
            >
            <option> </option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select></td>
        </tr>
        <tr>

        </tr>
      </table>
    </div>
    <p align="center">&nbsp;</p>
    <p align="center">
      <input type="reset" name="reset" id="reset" value="ULANG" /> 
              <input type="submit" name="button" id="button" value="SIMPAN">
  <p>&nbsp;</p>
  <p>&nbsp;</p>      
  </form>
</div>