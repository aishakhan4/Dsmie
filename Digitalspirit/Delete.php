<?php
include("include/connection.php");

$id = $_GET['id'];
header('location:showemp.php');
//$id = $_GET['id'];

$qry ="delete from emppersonaldetail where id=$id";
$rs=readrecord($qry);


if($rs)
{


    
  ?>  
<script>
alert('data Delete');
</script>

<?php
header('location:showemp.php');
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
