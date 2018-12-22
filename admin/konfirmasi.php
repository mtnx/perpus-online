<link rel="stylesheet" type="text/css" href="artikelcss.css">
<?php
include('../conn/koneksi.php');

$char ='KNF'; 
$today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI

   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(id_konfirmasi) as maxID FROM tb_konfirmasi WHERE id_konfirmasi LIKE '$char$today%' ";
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



<div id="judul">KONFIRMASI PEMBAYARAN</div>
<div id="tabel">

    <p>&nbsp;</p>

  <form action="?page=cek_registrasi" method="post" name="pencarian" id="pencarian">  
    <p align="center"><strong>SILAHKAN CEK ID.REGISTRASI ANDA</strong> 
         <input type="text" name="id_registrasi" id="id_registrasi" required="required">  
         <input type="submit" name="submit" id="submit" value="CEK">
    </p>
    </form>  

        
        
        <?php $id_registrasi=$_POST['id_registrasi']    ;?>       
        
        
        </p>
      </p>
      <p>&nbsp; </p>
    <p>&nbsp;</p>
    <form method="post" enctype="multipart/form-data" action="admin/konfirmasi_input.php">
    <div align="center">
      <p><strong>Silahkan lakukan transfer dengan nominal Rp 50.000,- ke</strong></p>
      <p><strong>Rekening 7575652467 Bank Mandiri</strong></p>
      <p><strong>Atas Nama Perpustakaan Online</strong></p>
      <p>&nbsp;</p>
      <table class="table" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
          <td height="30" class="title">ID. Registrasi</td>
          <td height="30" class="title">:</td>
          <td width="234" height="30" class="title"><input name="id_registrasi" type="text" id="id_registrasi" placeholder="Silahkan Dicek Dahulu" value="<?php echo $id_registrasi; ?>" required="required" /></td>
        </tr>
        <tr>
          <td class="title">Nominal</td>
          <td height="30" class="title">:</td>
          <td height="30" class="title"><input name="nominal" type="text" id="nominal" value="50000" readonly="readonly"/></td>
        </tr>
        <tr>
          <td class="title">Bank</td>
          <td height="30" class="title">:</td>
          <td height="30" class="title"><input name="bank" type="text" id="bank" placeholder="Nama Bank" required="required"/></td>
        </tr>
        <tr>
          <td class="title">No.Rekening</td>
          <td height="30" class="title">:</td>
          <td height="30" class="title"><input name="no_rekening" type="text" id="no_rekening" placeholder="No. Rekening" required="required"/></td>
        </tr>
        <tr>
          <td class="title">Atas Nama</td>
          <td height="30" class="title">:</td>
          <td height="30" class="title"><input name="atas_nama" type="text" id="atas_nama" placeholder="Atas Nama" required="required"/></td>
        </tr>
        <tr>
          <td width="125" height="38">Bukti Transfer</td>
          <td width="13">:</td>
          <td><input name="bukti_transfer" type="file" id="bukti_transfer"/></td>
        </tr>
        <tr>
          <td height="46" colspan="2"></td>
          <td><p>
             <input type="reset" name="reset" id="reset" value="ULANG" />
             <input type="submit" name="upload" value="SIMPAN" />
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        </tr>
      </table>
    </div>
</form>
</div>
