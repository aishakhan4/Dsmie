<?php

include('include/connection_login.php');
session_start();
?>
<?php
if(isset($_POST['submit']))
{
    $email=$_SESSION['email'];
    $password=$_POST['new_password'];
    $conpassword=$_POST['confirm_password'];
    $p="SELECT * from account WHERE email='$email'";
    $result = mysqli_query($con,$p);
    $row=mysqli_fetch_array($result);

    if($password==$conpassword)
    {
      $qury="update account set password='$password' where email='$email'";
      $q=mysqli_query($con,$qury);
    
    
    	header("Location:index.php");
    }
      else
    {
    	echo"password not update";
    }
    
}
?>

<!DOCTYPE html> <html lang="en"> <head> <title>renewpassword page</title> <meta
charset="utf-8"> <meta name="viewport" content="width=device-width,
initial-scale=1"> <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
src="htps://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	#form{
		border:1px solid black;
		margin-top: 150px;
		padding: 50px 50px;
		 box-shadow: 2px 3px black;

	}
	button{
		margin-left: 60px;
	}
</style>
</head>
<body>
	<div class="container" >
		<div class="col-md-12">	
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form id="form" method="POST" action="">
				<div class="form-group">
				<!-- <p style="font-size:16px; color:red" > <?php if($msg){
    echo $msg;
  }  ?> </p> -->
				<label>Enter new password</label>
				<input type="password" name="new_password" class="form-control"></input><br>
				<label>Confirm password</label>
				<input type="password" name="confirm_password" class="form-control"></input><br>
				<button type="submit" name="submit" value="submit"  class="btn btn-success " class="form-control">SET</button> 
			</div>
		    </div>	
				</form>
			</div>
			</div>
</body>
</html>
