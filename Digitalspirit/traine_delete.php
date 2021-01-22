<?php
include("include/connection.php");

$id = $_GET['Tid'];
header('location:showtraine.php');
//$id = $_GET['id'];

$qry ="delete from tranpersonaldetail where Tid=$id";
$rs=readrecord($qry);


if($rs)
{


    
  ?>  
<script>
alert('data Delete');
</script>

<?php
header('location:showtraine.php');
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
