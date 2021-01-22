<?php
session_start();
error_reporting(0);

  include("include/connection_login.php");
  include('mail/mailer/class.phpmailer.php');
  if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select * from account where email='$email' && Password='$password'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['id']=$ret['id'];
      $_SESSION['email']=$email;
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE html> <html lang="en"> <head> <title>sign in page</title> <meta
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
     background-color: #fff;
  }
  button{
    margin-left: 70px;
  }
  p{
    font-size: 30px;
    margin-left: 60px;
  }
  body{
    background-color: lightgray;
  }
</style>
</head>
<body>
  <div class="container" >
    <div class="col-md-12"> 
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form id="form" method="POST" action="" onsubmit="return myfun()">
          
        <div class="form-group">
          <p style="font-size:16px; color:red" > <?php if($msg){
    echo $msg;
  }  ?> </p>
          <p>Sign In</p>
        <label>Enter Your Email</label>
        <input type="email" name="email" class="form-control" placeholder="email" required></input><br>
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="password" required></input><br>
        <!-- <a href="email_verify.php">Forget Password?</a> -->
        
                            
                            <label class="pull-right">
                                <a href="email_verify.php">Forgotten Password?</a>
                            </label>

                        
        <!-- <button type="submit" name="submit" class="btn btn-success" value="submit">SIGN IN</button> -->
         <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">SING IN</button> 
        </div>
      </div>  
        </form>
      </div>
     </div>
</body>
</html>


