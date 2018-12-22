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


$namafolder="gambar/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("elibrary")  or die("Gagal");
if (!empty($_FILES["bukti_transfer"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['bukti_transfer']['type'];
    $id_registrasi=$_POST['id_registrasi'];
				$id_konfirmasi			= $NewID;
						$tanggal= date("Y-m-d");
				$tgl_konfirmasi		= $tanggal;
				$nominal				= $_POST['nominal'];
				$bank					= $_POST['bank'];
				$no_rekening			= $_POST['no_rekening'];	
				$atas_nama				= $_POST['atas_nama'];	
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['bukti_transfer']['name']);       
        if (move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], $gambar)) {
          echo "<script> alert('Data Berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php?page=konfirmasi'>";

            $sql="insert into tb_konfirmasi (id_konfirmasi,id_registrasi,tgl_konfirmasi,nominal,bank,no_rekening,atas_nama,bukti_transfer) values ('$id_konfirmasi','$id_registrasi','$tgl_konfirmasi','$nominal','$bank','$no_rekening','$atas_nama','$gambar')";
            $res=mysql_query($sql) or die (mysql_error());
        } else {
          echo "<script> alert('Data Gagal Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=konfirmasi'>";
        }
   } else {
          echo "<script> alert('Jenis Gambar Harus JPEG') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=konfirmasi'>";
   }
} else {
          echo "<script> alert('Anda Belum Memilih Gambar') </script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=user_detail&id_user=$id_user'>";
}
?>
