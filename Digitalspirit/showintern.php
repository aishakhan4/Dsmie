<?php include("include/connection.php");?>
<?php session_start();
if(!isset($_SESSION["id"]))
{
header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>ds-project</title>


  <link href="css/bootstrap.min.css" rel="stylesheet">
 
  <link href="css/bootstrap-theme.css" rel="stylesheet">
 
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
   <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
 
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
 
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
   <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <style>
 {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border-radius:5px 2px #ffff00 ;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #57889C;
  font-size: 17px;
  border:5px 2px #ffff00 ;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 900px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.Record 
{
  text-align:center;
  font-size:30px;
  margin-top:60px;
  margin-right:160px;
  margin-left:540px;
}



</style>
</head>

<body>
<?php
include 'base.php'
?>    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            

          </div>
        </div>
        <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="info-box " style="background-color:#045a6b;">
        
            <?php
              $from_date= date("Y-m-d",strtotime("-7 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM internpersnoldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by uid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h4 style="font-size:30px;text-align:center; color:white;" ><i class="icon_documents_alt"></i> '.$row.'</h4>';
         ?>
         <h1 style="color:white;font-size:200%; text-align:center">Since 7 days </h1>
          </div>
          <!--/.info-box-->
        </div>

        <!--/.col-->
        <div class="col-xl-3 col-md-6">
          <div class="info-box "style="background-color:#1d7846;">
             
            <div class="mr-5">

            </div>
            <?php
              $from_date= date("Y-m-d",strtotime("-15 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM internpersnoldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by uid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h4 style="font-size:30px;text-align:center; color:white;" ><i class="icon_documents_alt"></i> '.$row.'</h4>';
         ?>
<h2 style="color:white;font-size:200%; text-align:center">Since 15 days </h2>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-xl-3 col-md-6">
          <div class="info-box " style="background-color:#bee6da;">
            <!-- <i class="fas fa-user-tie" ></i>-->
            <div class="mr-5">
            </div>
            <?php
              $from_date= date("Y-m-d",strtotime("-30 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM internpersnoldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by uid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h4 style="font-size:30px;text-align:center;" > <i class="icon_documents_alt" style="color:#1a1a1a"></i>'.$row.'</h4>';
         ?>
         <h1 style="color:black;font-size:200%; text-align:center">Since 30 days </h1>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-xl-3 col-md-6">
          <div class="info-box "style="background-color:#fa7900;">
       
            <div class="mr-5">
              
            </div>
            <?php
             $qry="SELECT uid FROM internpersnoldetail ORDER BY uid";
             $rs=readrecord($qry);
              $row1= mysqli_num_rows($rs);
              echo '<h4 style="font-size:30px;text-align:center;" ><i class="icon_documents_alt"></i> '.$row1.'</h4>';
 
            
      ?>
       <h1 style="color:black;font-size:200%; text-align:center" >Total Interns</h1>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

      </div>
    
        <!--/.row-->


        <div class="topnav">
  <div class="search-container">
    <form action="" method="POST">
      <input type="text"  name="tsearch" placeholder="Search.." name="search">
      <button type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div> 
        <!-- Today status end -->



        <!-- statics end -->



                </tbody>
                <?php
$status="";
$rcrd=1;
$sql="SELECT*
FROM internpersnoldetail,internprofessionaldetail
WHERE
internpersnoldetail.uid=
internprofessionaldetail.uid";

if(isset($_POST["btnsearch"]))
{
extract($_POST);
$qry="SELECT uid FROM internpersnoldetail WHERE name like '%$tsearch%' order by uid";
$res=readrecord($qry);

if(mysqli_num_rows($res)>0)
{
 $row=mysqli_fetch_array($res);

 $uid=$row['uid'];
$sql="SELECT*
FROM internpersnoldetail,internprofessionaldetail
WHERE
internpersnoldetail.uid=$uid 
AND internprofessionaldetail.uid=$uid";
}
else
{
  $rcrd=0;
}
}
if($rcrd>0)
{
$rs=readrecord($sql);
if(mysqli_num_rows($rs)>0)
{

?>
       <div class="table-responsive">
            <table class="table">
    <thead class="thead-light">
      <tr>
        <th><h1>ID</h1></th>
        <th><h1>Full Name</h1></th>
        <th><h1>E-mail</h1></th>
        <th><h1>Contact No</h1></th>
        <th><h1>Address</h1></th>
        <th><h1>Action</h1></th>
      </tr>
    </thead>
    
<?php
$i=101;
  while($row=mysqli_fetch_array($rs))
  {
    $a="DS/IN/".$i;

    ?>
    <tbody>
    <tr>
   
    <td><h1> <a href="interndetail.php?uid=<?php echo $row["uid"];?>"> <?php echo $a;?></a></h1>
    </td>&nbsp;
    <td><h1> <a href="interndetail.php?uid=<?php echo $row["uid"];?>"> <?php echo $row["name"];?></a></h1></td>
    <td><h1><?php echo $row["email"]; ?></h1></td>
    <td><h1><?php echo $row["phone_no"]; ?></h1></td>
    <td><h1><?php echo $row["address"]; ?></h1></td>
    
<td>
        
<button onclick="document.getElementById('id01').style.display='block'" id="button_color" style="background-color:#26C281;height: 40px;width: 75px;border-radius:25px; "><!--<a href="internupdate.php?uid=<?php //echo $row["uid"];?>" style="color:white; ">--><h1 style="color: white;">update</h1></a></button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-6" style=" box-shadow:5px 5px 5px 5px #e6ebea ;background-color: white; border-radius:25px; margin-top:300px; border-style:groove; height:200px;width:2000px;  ">
          
      <h1 style="font-size: 25px; text-align:center; font-weight:bold;">Update Account</h1>
      <br>
      <h1 style="font-size:20px; text-align:center;">Are you sure you want to Update this account?</h1>
      <br>
    <br>
      <div class="clearfix" style="text-align:center;">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="height: 45px; width: 75px; background-color: red ;border-radius:25px;"><h1 style="color: white;">Cancel</h1></button>
        
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="updatebtn"style="height: 45px;width: 75px;background-color:#26C281 ; border-radius:25px;"><a href="internupdate.php?uid=<?php echo $row["uid"];?>" style="color:black;"><h1 style="color: white;">update</h1></a></button>
      </div>
    </div>
        </div>
        <div class="col-md-3"></div>
      </div>
  </form>
</div>        
<button onclick="document.getElementById('id02').style.display='block'" id="button_col" style="background-color:red;height: 40px;width: 75px; border-radius:25px;margin-left:10px; "><a href="intern_delete.php?uid=<?php echo $row["uid"];?>" style="color:white; "><h1 style="color: white;">Delete</h1></a></button>

<div id="id02" class="modal">
 <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="showintern.php">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-6" style=" box-shadow:5px 5px 5px 5px #e6ebea ;background-color: white; border-radius:25px; margin-top:300px; border-style:groove; height:200px;width:2000px;">
          
      <h1 style="font-size: 25px; text-align:center; font-weight:bold;">Delete Account</h1>
      <br><h1 style="font-size:20px; text-align:center;">Are you sure you want to delete this account?</h1>
      <br>    </br>
      <div class="clearfix" style="text-align:center;">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="height: 45px; width: 75px; background-color: red ;border-radius:25px;"><h1 style="color:white;">Cancel</h1></button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="deletebtn" style="height: 45px;width: 75px;background-color:#26C281 ; border-radius:25px;"><a href="intern_delete.php?uid=<?php echo $row["uid"];?>" style="color:black;"><h1 style="color: white">Delete</h1></a></button>
      </div>
    
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </form>
</div>      
<button  id="button_color" style="background-color:#1a2732; color:white; height: 40px; width: 100px; border-radius:25px;margin-left:10px;"><a href="particularintern.php?uid=<?php echo $row["uid"];?>" style="color:white;"><h1 style="color: white;">Attendance</h1></a></button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="" method="POST">
  <div class="col-md-4">
  </div>
        </td>
      </tr>
      <?php
      $i++;
  }
}
}
else{
  ?>
<h1 style="text-align:center;">Record Not Found</h1>
<?php
}
   ?> 

   </tbody>    
</table>
  </div>
  </div>
  </div>
  </div>

              </table>
            </section>
            <!--Project Activity end-->
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
