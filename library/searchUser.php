<?php 
session_start();
$id_user=$_SESSION['id_user'];
include 'koneksi.php';

$searchUser=$_GET['listSearch'];

$query="SELECT * FROM tbl_user WHERE id_user!=$id_user and nama_user like '%$searchUser%' limit 20";
$execute=mysqli_query($konek,$query);
$rows=mysqli_num_rows($execute);
while ($row = mysqli_fetch_assoc($execute)) {
	$data[] = $row;
}


echo json_encode($data);


 ?>