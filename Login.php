<?php
session_start();
include("config.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
    <link href="css/documentation.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #00BCD4;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0; 
  color: #00BCD4;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
</style>

<body>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <center><img src="User.png" style="width:150px" alt="Avatar" class="avatar"></center>
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label><br>
      <input type="text" name="username" id="username" style="width:400px"class="form-control" required><br>

      <label for="password"><b>Password</b></label><br>
      <input type="password" name="password" id="password"  style="width:400px" class="form-control" required><br>

      <button type="submit" name="submit" class="btn btn-success">Login</button>
      <button type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="width:400px;background-color:#E91E63">
      
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div class="header-wrapper">
 <div class="logo-container">
          <div class="logo">
              <img src="assets/img/KAMAL1.png" alt="Creative Tim Logo" style="position:fixed;width:150px;z-index:9 !important">
          </div>
          <div class="brand" style="position:fixed;z-index:9 !important;width:70%;margin-left:10%">
                <br><h3>ADITYA EDUCATIONAL INSTITUTION</h3>
          </div>
          <div class="clearfix"></div>
      </div>
        <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation" color-on-scroll>
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
              </button>
              
                  
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
              <ul  class="nav navbar-nav navbar-right">
                    <li>
                        <a href='https:google.com' target="_blank" id="issueButton" class="btn btn-simple btn-neutral">Have an issue?</a>
                    </li>
               </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="header" style="background-image: url('assets/img/ASHISH.jpg');
">
            <div class="filter"></div>
            <div class="title-container text-center">
                    <h1>T-Shaped Engineer</h1>
                    <h3 class="category"></h3>
                    <h4 class="description text-center">We are constantly doing updates for you.</h4>
                    
                    <div class="col-md-offset-5 col-md-7">
                    	<div class="form group">
                    	<div class="col-md-3 dropdown">
 <!--<a href="#" class="btn dropdown-toggle" style="border-color: WHITE" data-toggle="dropdown">-->
    
     <button style="background:none; border-radius:20px" onclick="document.getElementById('id01').style.display='block'"><h5>LOGIN CREDENTIALS</h5></button>
     	
      <b><class="caret"></b>
  </a>
  <!--<ul class="dropdown-menu">
    <button type="dropdown-item "class="btn btn-primary">STUDENT LOGIN</button>
    
    <button type="dropdown-item" class=" btn btn-primary">EMPLOYEE LOGIN</button>

    
  </ul>-->
  </div>
</div>
</div>
  </div>
            </div>
        </div>
</div>





<footer class="footer footer-demo">
	<div class="container">
		<nav class="pull-left">
			<ul>
				<li>
					<a href="http://www.creative-tim.com/product/light-bootstrap-dashboard">
						Light Bootstrap Dashboard
					</a>
				</li>
				<li>
					<a href="http://www.creative-tim.com">
						Creative Tim
					</a>
				</li>
				<li>
					<a href="http://blog.creative-tim.com">
					   Blog
					</a>
				</li>
			</ul>
		</nav>
		<div class="social-area pull-right">
			<a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
				<i class="fa fa-twitter"></i>
			</a>
			<a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
				<i class="fa fa-facebook-square"></i>
			</a>
			<a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
				<i class="fa fa-google-plus"></i>
			</a>
		</div>
		<div class="copyright">
			&copy; <script>document.write(new Date().getFullYear())</script> Team:Harsh,Ashish,Sunil,Kamal
		</div>
	</div>
</footer>
</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>
</html>
<?php
if(isset($_POST['submit']))
{
   
  $user=$_POST['username'];
  $pass=$_POST['password'];
  $sel="select *from admin where username='$user' and password='$pass'  ";
  $res=mysqli_query($conn,$sel);
  $rc=mysqli_num_rows($res);
  if($rc==1)
  {
    $_SESSION['username']=$user;
    // $_SESSION['username']=$_POST['username'];
    echo "<script>alert('login success');</script>";
    echo "<script>location.href='dashboard.php';</script>";
    
  }
  else
  {
    echo "<script>alert('INVALID LOGIN');</script>";
    echo "<script>location.href='login.php'</script>";
    }
  }
    ?>