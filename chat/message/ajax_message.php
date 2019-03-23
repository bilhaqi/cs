
 <?php 
include '../../library/koneksi.php';
include '../../library/function.php';
$pengirim=$_GET['pengirim'];
$penerima=$_GET['penerima'];
$query1=lihat("SELECT pesan,nama_user as pengirim FROM tbl_chat,tbl_user WHERE ((id_pengirim='$pengirim' and id_penerima='$penerima') or (id_pengirim='$penerima' and id_penerima='$pengirim')) and id_user=id_pengirim order by id_chat DESC");


  ?>

  <?php foreach ($query1 as $b) { ?>
		<div style="color:#1e90ff; line-height: 15px;">
		<p><?php echo $b['pengirim']; ?></p>
		<p style="font-size: 25px; color:green;"><?php echo $b['pesan']; ?></p>
		</div>
	<?php	} ?>