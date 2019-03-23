<?php
include '../library/koneksi.php';
include '../library/function.php';
session_start();
$id_user=$_SESSION['id_user'];
$query_1=lihat("SELECT id_chat,id_penerima,id_pengirim FROM tbl_chat WHERE id_penerima='$id_user' group by id_penerima,id_pengirim");


 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>toChat System</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style1.css">
  <style>
    .tutup{
    opacity: 0;
    transform: translate(0px, -100px);
    transition: 0.9s;
    } 
    

    .tutup.muncul{
    opacity: 1;
    transform: translate(0,-10px);
    }
  </style>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
           </button>

          <a href="#home" class="navbar-brand page-scroll logo">  toChat <i class="glyphicon glyphicon-envelope"></i></a>
          <a href="" class="navbar-brand page-scroll"><?php echo date("d-M-Y l"); ?></a>
          
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../logout.php" class="page-scroll"><i class="glyphicon glyphicon-log-out"></i> Sign Out</a></li>
            
          </ul>
        </div>

      </div>
    </nav>
    <br>
    <div class="container-fluid">
  <div class="row content" style="margin-top: 50px;">
		
    <?php
    if(isset($_GET['page'])){


    $page=$_GET['page'];

     if($page == "view_profile"){
      include '../chat/profile/profile.php';
     }elseif($page =="send"){
      include '../chat/message/message.php';
     }} else{


      ?>
  		<div class="col-sm-9">
  		<div class="text-center">
          <h2>Welcome toChat System</h2>
          <h3>You Can Connected the other People in the World</h3>
          
        </div>

         <div class="row" style="margin-top:20px;">
         	<div class="col-md-8 col-sm-offset-2">
         		<form action="" id="formSearch">
         	<input type="text" class="form-control" placeholder="Search People example @bilhaqi28" id="list-search" required autocomplete="off">
         	</div>
         	<div class="col-sm-offset-0">
         		<button class="btn btn-info" id="btn-search">Search</button>
         	</div>
          </form>
         </div>
         <div id="box">
         	<br>
         </div>

        </div>
		<?php } ?> 

  		<div class="col-sm-3 sidebar-offcanvas" id="sidebar">
        <h3  style="color:#5bc0de;">History : <?php echo $_SESSION['nama_user']; ?></h3>
          

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

          </div>
 </div>
</div>
</div>

   

	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  	<script src="../js/script.js"></script>
    

</body>
</html>