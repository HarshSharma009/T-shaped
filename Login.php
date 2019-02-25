<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Dark blue Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div id="particles-js"></div>
<body class="login">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="logo">
				<i class="fa fa-sign-in"></i>
			</div>
			<div class="welcome"><strong>Welcome,</strong> please login</div>

			<form class="form-horizontal login-form" action="" method="post">
				<div class="form-group relative">
					<input id="login_username" name="username" class="form-control input-lg" type="text" placeholder="Username" required>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group relative password">
					<input id="login_password" name="password" class="form-control input-lg" type="password" placeholder="Password" required>
					<i class="fa fa-lock"></i>
				</div>
			  <div class="form-group">
			    <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Login</button>
			  </div>
        <div class="checkbox pull-left">
			    <label><input type="checkbox"> Remember</label>
			  </div>
			  <div class="checkbox pull-right">
			    <label> <a class="forget" href="" title="forget">Forgot your password</a> </label>
			  </div>
			</form>
		</div>
    
    <h4 class="text-center">
      <a target="_blank" href="https://codepen.io/Peeyush200/pen/mLwvJB">
        Check out Social login form 
      </a>
    </h4>
	</div>

  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

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
