<?php 
include '../library/koneksi.php';
$id_user=$_GET['id_user'];
$query="SELECT * FROM tbl_user WHERE id_user='$id_user'";
$execute=mysqli_query($konek,$query);
$result=mysqli_fetch_assoc($execute);

 ?>


<div class="col-sm-9">
	
<h2>Profile <?php echo $result['nama_user']; ?></h2>
<hr style=" border:2px solid #1e90ff;">
<div class="text-center">
<img src="../images/<?php echo $result['foto_user']; ?>" class="img-circle tutup" alt="" width="300px" height="300px" style="border:1px solid gray;"><br>
<p>' every single human being has value '</p>
<h3>My Birthday : <?php echo $result['tgl_lahir']; ?></h3>
</div>
</div>