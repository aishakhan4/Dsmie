<?php

include('mailer/class.phpmailer.php');

if(isset($_POST['btn']))
{

       $from=$_POST['sender'];
       $pass=$_POST['pass'];
       
       $to=$_POST['to'];
       
       $sub=$_POST['sub'];
      $msg="<a href='http://localhost/php1.30pm/22-aug-2019/mail/update.php?one=check'>Please Verify link</a>";

       $mail = new PHPMailer();
       $mail->IsSMTP(); 
       $mail->SMTPDebug = 1;
       $mail->Host = 'smtp.gmail.com';
       $mail->Port = 465;
       $mail->SMTPAuth = true;
       $mail->SMTPSecure='ssl';
       $mail->Username = $from;
       $mail->Password = $pass;
       $mail->SetFrom($from);
       $mail->AddAddress($to,"Ramlal");
       $mail->Subject = $sub;
       $mail->MsgHTML($msg);
       
       if (!$mail->send()) 
       {
          echo 'Mailer Error: ' . $mail->ErrorInfo;
       }
       else 
       {
          echo 'Message sent!';
       }  
}
?>

<html>
<head>
	<title>mail sending</title>
</head>
<body>
<h1>php mail sending</h1>
<form method="post">
	<input type="email" name="sender" placeholder="sender mail id">
	<br><br>
	<input type="password" name="pass" placeholder="password">
	<br><br>
	<input type="email" name="to" placeholder="receiver mail id">
	<br><br>
	<input type="text" name="sub" placeholder="subject">
	<br><br>
	<input type="text" name="msg" placeholder="message">
    <br><br>
	<input type="submit" name="btn" value="send"> 
</form>
</body>
</html>
