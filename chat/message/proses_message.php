<?php 

include '../../library/koneksi.php';

$message=$_POST['message'];
$pengirim=$_POST['pengirim'];
$penerima=$_POST['penerima'];
$tgl_pesan=date("Y-m-d");
$waktu="10:20:02";
$query="INSERT INTO `tbl_chat` (`id_chat`, `id_pengirim`, `id_penerima`, `pesan`, `tgl_pesan`, `waktu_pesan`) VALUES (NULL, '$pengirim', '$penerima', '$message', '$tgl_pesan', '$waktu')";


$execute=mysqli_query($konek,$query);

 ?>