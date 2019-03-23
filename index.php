<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat System</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/chat1.jpg">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style1.css">
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
            <li><a href="index.php" class="page-scroll"><i class="glyphicon glyphicon-log-in"></i> Sign In </a></li>
            <li><a href="index.php" class="page-scroll"><i class="glyphicon glyphicon-user"></i> Sign Up </a></li>
            <li><a href="#contact" class="page-scroll"><i class="glyphicon glyphicon-wrench"></i> Help </a></li>
          </ul>
        </div>

      </div>
    </nav>
	<br>
    <div class="text-center index">
        <img src="images/chat1.jpg" class="img-circle" width="350px" height="230px" style="margin-top:60px;">
        <h3 class="judul_login">welcome toChat system</h3>
        <p class="sub-judul-login">Apps To Change In Facebook</p>
      </div>

      <section class="contact" id="contact">
        <div class="container">
          

          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <form action="" id="login">

                	<label for="">Username</label>
				          <input type="text" id="username" class="form-control" placeholder="input username" required autocomplete="off">
                
<br>
				        <label for="">Password</label>
                <input type="password" id="password" class="form-control" placeholder="input password" required autocomplete="off">
<br>
                  
                
                <button type="login" name="login" class="btn btn-info btn-lg pull-right">Login <span class="glyphicon glyphicon-log-in"></span></button>
              </form>
            </div>
          </div>
        </div>
      </section>


	

	



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>