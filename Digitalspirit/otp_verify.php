<?php
include('mail/mailer/class.phpmailer.php');
include('include/connection_login.php');
?>
<?php
if(isset($_POST['check_otp']))
{
    //$email=$_POST['email'];
    $otp=$_POST['otp'];

    $q=mysqli_query($con,"select id from account where  otp='$otp'");
    $f=mysqli_fetch_assoc($q);
    if($f)
    {
        $p="update account set is_varify=true where otp='$otp'";
        header("Location:renewpassword.php");
    }
    else{

        ?>
        <script>alert("Wrong Otp");</script>
        <?php
    }
}
?>

<!DOCTYPE html> <html lang="en"> <head> <title>otp_verify page</title> <meta
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
				<label>OTP</label>
				<input type="password" name="otp" class="form-control"></input><br>
				<button type="submit" name="check_otp" value="CHECK OTP"  class="btn btn-success " class="form-control">CHECK OTP</button> 
			</div>
		    </div>	
				</form>
			</div>
			</div>
</body>
</html>
