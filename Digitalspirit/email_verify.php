<?php
error_reporting(0);
include("include/connection_login.php");

include("include/mail/mailer/class.phpmailer.php");
?>

<!DOCTYPE html>  
<html lang="en"> 
<head> <title>email_verify</title>
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="htps://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
          <p style="font-size:16px; color:red" > <?php if($msg){
    echo $msg;
  }  ?> </p>
			    <label>Email</label>
				<input type="email" name="email" class="form-control"></input><br>
				
				
				<button type="submit" name="btn" value="email_verify" class="btn btn-success " class="form-control">EMAIL VERIFY</button> 
			     </div>
				</div>	
				</form>
			</div>
		</div>
</body>
</html>
<?php
// session_start();
if(isset($_POST['btn']))
{

  $email=$_POST['email'];


  $query="SELECT id FROM account WHERE email='$email'";
  $r=mysqli_query($con,$query);
  $f=mysqli_fetch_array($r);
  //$row=mysqli_num_rows($f);
  // echo $row;
  // echo $query;
  // echo $f;

  if($f)
  {
  $otp=rand(1012,9918);
  $from="themindzworld@gmail.com";
  $password="TeamWork@mindzworld@";
  $sub="email verification";
  $msg="<h1>Please Verify OTP</h1>
       <h2><b>Your Otp Is</b></h2>
   ".$otp;

  
  $mail = new PHPMailer();
  $mail->IsSMTP(); 
  $mail->SMTPDebug = 1;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure='ssl';
  $mail->Username = $from;
  $mail->Password = $password;
  $mail->SetFrom($from);
  $mail->AddAddress($email);
  $mail->Subject = $sub;
  $mail->MsgHTML($msg);
  
   if (!$mail->send()) 
   {
     echo 'Mailer Error: ' . $mail->ErrorInfo;
   }
   else 
   {
     echo 'Message sent!';
     $p=mysqli_query($con,"update account set otp='$otp' where email='$email'");
     if($p)
     {
      header( "Location: otp_verify.php" );
     }
  }
}
else
{
  $msg="Invalid Password.";
}
}
?>