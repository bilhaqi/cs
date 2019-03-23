<?php 

include 'koneksi.php';

$searchUser=$_GET['listSearch'];

$query="SELECT * FROM tbl_user WHERE nama_user like '%$searchUser%' limit 20";
$execute=mysqli_query($konek,$query);
$rows=mysqli_num_rows($execute);
while ($row = mysqli_fetch_assoc($execute)) {
	$data[] = $row;
}


echo json_encode($data);


 ?>