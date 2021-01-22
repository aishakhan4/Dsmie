<?php
include("include/connection.php");

$id = $_GET['sid'];
header('location:showstaff.php');
//$id = $_GET['id'];

$qry ="delete from staffpersonaldetail where sid=$id";
$rs=readrecord($qry);


if($rs)
{


    
  ?>  
<script>
alert('data Delete');
</script>

<?php
header('location:showstaff.php');
}
else
{
  ?>
<script>
alert('data  not Delete');
</script>
<?php
}

?>
