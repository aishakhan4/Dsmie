<?php
include("include/connection.php");

$id = $_GET['uid'];
header('location:showintern.php');
//$id = $_GET['id'];

$qry ="delete from internpersnoldetail where uid=$id";
$rs=readrecord($qry);


if($rs)
{


    
  ?>  
<script>
alert('data Delete');
</script>

<?php
header('location:showintern.php');
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
