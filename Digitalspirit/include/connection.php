<?php
function getconnect()
{
$con=mysqli_connect("localhost","root","","ds");
return $con;
}
function executequery($qry)
{
$status="";
$con=mysqli_connect("localhost","root","","ds");
$rs=mysqli_query($con,$qry);
if(!$rs)
{
$status="fail";
}
else
{
$status="success";
}
return $status;
}
function readrecord($qry)
{
$rs=mysqli_query(getconnect(),$qry);
return $rs;
}
function fillselect($qry)
{
	$status="";
	$rs=readrecord($qry);
	while($row=mysqli_fetch_array($rs))
	{
		$status.="<option value='$row[0]'>$row[1]</option>";
	}
	return $status;
}
?>
