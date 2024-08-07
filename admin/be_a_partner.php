<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("../connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
     if(empty($_POST['username']) || 
		empty($_POST['email']) ||  
		empty($_POST['password'])||
		empty($_POST['cpassword']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
	$check_username= mysqli_query($db, "SELECT username FROM admin where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM admin where email = '".$_POST['email']."' ");
		

	
	if($_POST['password'] != $_POST['cpassword']){  
       	
          echo "<script>alert('Password not match');</script>"; 
    }
	elseif(strlen($_POST['password']) < 6)  
	{
      echo "<script>alert('Password Must be >=6');</script>"; 
	}
    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
          echo "<script>alert('Invalid email address please type a valid email!');</script>"; 
    }
	elseif(mysqli_num_rows($check_username) > 0) 
     {
       echo "<script>alert('Username Already exists!');</script>"; 
     }
	elseif(mysqli_num_rows($check_email) > 0) 
     {
       echo "<script>alert('Email Already exists!');</script>"; 
     }
	else{
       
	 
	$mql = "INSERT INTO admin(username,email,password) VALUES('".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."')";
	mysqli_query($db, $mql);
    header("refresh:0.1;url=index.php");
        echo "<script>alert('Registration Successful!');</script>"; 
    }
	}

}

?>

<head>
  <meta charset="UTF-8">
  <title>Restaurant Registration</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>

  
<div class="container">
  <div class="info">
    <h1>Restaurant Registration</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="images/manager.png"/></div>
  <span style="color:red;"><?php echo $message; ?></span>
   <span style="color:green;"><?php echo $success; ?></span>
  <form class="login-form" action="" method="post">
    <input type="text" placeholder="Username" name="username"/>
    <input type="email" placeholder="Email" name="email"/>
    <input type="password" placeholder="Password" name="password"/>
    <input type="password" placeholder="Confirm Password" name="cpassword"/>
    <input type="submit"  name="submit" value="Signup" />

  </form>
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/index.js'></script>
</body>

</html>