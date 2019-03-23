<?php 


$pengirim=$_SESSION['id_user'];
$id_user=$_GET['id_user'];
$penerima=$id_user;
$query="SELECT * FROM tbl_user WHERE id_user='$id_user'";
$execute=mysqli_query($konek,$query);
$result=mysqli_fetch_assoc($execute);
$query1=lihat("SELECT pesan,nama_user as pengirim FROM tbl_chat,tbl_user WHERE ((id_pengirim='$pengirim' and id_penerima='$id_user') or (id_pengirim='$id_user' and id_penerima='$pengirim')) and id_user=id_pengirim order by id_chat DESC");



 ?>


<div class="col-sm-9">
	
<h2>Send Message To : <?php echo $result['nama_user']; ?></h2>
<hr style=" border:2px solid #1e90ff;">
	<div class="row">
		<div class="col-sm-11 col-md-offset-1">
	<section class="box-chat" id="box-chat">
	<?php foreach ($query1 as $b) { ?>
		<div style="color:#1e90ff; line-height: 15px;">
		<p><?php echo $b['pengirim']; ?></p>
		<p style="font-size: 25px; color:green;"><?php echo $b['pesan']; ?></p>
		</div>
	<?php	} ?>
	</section>
	</div>
	</div>

		<div class="input-chat">
			<div class="row" style="margin-top:20px;">
         	<div class="col-md-9 col-md-offset-1">
         	<form action="" id="formSend">	
         	<input type="text" class="form-control" placeholder="-- Your Message --" id="message" autocomplete="off">
         	<input type="hidden" value="<?php echo $_SESSION['id_user']; ?>" id="pengirim">
         	<input type="hidden" value="<?php echo $id_user; ?>" id="penerima">
         	</div>
         	<div class="">
         		<button type="submit" class="btn btn-info" id="btn-send"> Send <span class="glyphicon glyphicon-log-in"></span></button>
         	</div>
         	</form>
         </div>
</div>
</div>
<script>
      // ajax untuk ambil data baru di message
    var auto_refresh = setInterval(
    function () {
       $('#box-chat').load("../chat/message/ajax_message.php?penerima=<?php echo $penerima;?>&pengirim=<?php echo $pengirim; ?>").fadeIn("slow");
    }, 2000); // refresh setiap 10000 milliseconds
    </script>