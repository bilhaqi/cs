
<?php 
session_start();
include '../../library/koneksi.php';
include '../../library/function.php';
$id_user=$_SESSION['id_user'];
$query_1=lihat("SELECT id_chat,id_penerima,id_pengirim FROM tbl_chat WHERE id_penerima='$id_user' group by id_penerima,id_pengirim");




 ?>

<div class="list-group">
        <?php foreach ($query_1 as $b ) { 
          $pengirim=$b['id_pengirim']; 
          $penerima=$b['id_penerima']; ?>
          <?php
          $query1=lihat("SELECT id_user,nama_user as nama_pengirim FROM tbl_user WHERE id_user=$pengirim ");
          foreach ($query1 as $c ) { ?>
            <a href="?page=send&id_user=<?php echo $c['id_user'];  ?>" class="list-group-item"><?php echo $c['nama_pengirim']; ?></a>
          <?php } ?>
        <?php } ?>
</div>