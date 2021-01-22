<?php session_start();
if(isset($_SESSION["id"]))
{
	header("location:login.php");
}
unset($_SESSION["id"]);
unset($_SESSION["user"]);
header("location:index.php");
?>
