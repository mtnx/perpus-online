<?php
include('../conn/koneksi.php');

$char ='BKU'; 
$today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI

   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(id_buku) as maxID FROM tb_buku WHERE id_buku LIKE '$char$today%' ";
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

<div id="judul">INPUT BUKU</div>
<div id="tabel">


    <?php
			if($_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$judul_buku			= $_POST['judul_buku'];
				$id_buku	= $NewID;
				$tanggal	= date("Y-m-d");
				$tgl		= $tanggal;
				
				$penulis		= $_POST['penulis'];
				$jenis		= $_POST['jenis'];
								
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 104407000){
						$lokasi = '../files/'.$judul_buku.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO tb_buku values('$id_buku', '$tgl', '$judul_buku', '$file_ext', '$file_size', '$lokasi', '$penulis', '$jenis')");
						if($in){
							echo "<script>alert('Buku berhasil diinput')</script>";
							echo "<meta http-equiv='refresh' content='0; url=?page=buku_data'>";
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 10 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>





<form method="post" enctype="multipart/form-data" action="">
    <div align="center">
      <p>&nbsp;</p>
      <table class="table" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
          <td height="30" class="title"><strong>ID. Buku</strong></td>
          <td height="30" class="title">:</td>
          <td height="30" class="title"><input name="id_buku" type="text" id="id_buku" value="<?php echo $NewID;?>" readonly="readonly"/></td>
        </tr>
        <tr>
          <td height="30" class="title">Judul Buku</td>
          <td height="30" class="title">:</td>
          <td height="30" class="title"><input type="text" name="judul_buku" id="judul_buku" required="required"/></td>
        </tr>
        <tr>
          <td height="37" class="title">Penulis</td>
          <td height="37" class="title">:</td>
          <td width="234" height="37" class="title"><input type="text" name="penulis" id="penulis"required="required" /></td>
        </tr>
        <tr>
          <td height="31">Jenis</td>
          <td>:</td>
          <td><select name="jenis" id="jenis" required>
            <option></option>
            <option value="novel">novel</option>
            <option value="komik">komik</option>
            <option value="biografi">biografi</option>
            <option value="ensiklopedi">ensiklopedi</option>
            <option value="panduan">panduan</option>
          </select></td>
        </tr>
        <tr>
          <td width="125" height="38">Pilih File</td>
          <td width="13">:</td>
          <td><input type="file" name="file" required="required" /></td>
        </tr>
        <tr>
          <td height="46" colspan="2"></td>
          <td><p>
            <input type="submit" name="upload" value="Upload" />
          </p>
          <p>&nbsp;</p></td>
        </tr>
      </table>
    </div>
</form>
</div>


<div id="back"> <a style="text-decoration: none"; href="index.php?page=buku_data">Kembali</a> </div>


