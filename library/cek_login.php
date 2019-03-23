<?php 
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM tbl_user WHERE username='$username'and password='$password'";
$execute=mysqli_query($konek,$query);
$row=mysqli_fetch_assoc($execute);
$_SESSION['nama_user']=$row['nama_user'];
$_SESSION['id_user']=$row['id_user'];
$result=mysqli_num_rows($execute);
$data=json_encode($result);
echo $data;


 ?>