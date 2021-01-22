<?php include("include/connection.php"); ?>
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
</head>

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



</style><body>
<?php
include 'base.php'
?>    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            

          </div>
        </div>
        <!--overview start-->
        <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="info-box " style="background-color:#045a6b;">
        
           
              <?php
              $from_date= date("Y-m-d",strtotime("-7 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo ' <h4 style="font-size:30px;text-align:center;color:white;"><i class="fas fa-user"></i> '.$row.'</h4>';
         ?>
          <h1 style="color:white;font-size:200%; text-align:center">Since 7 days </h1>

            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-xl-3 col-md-6">
          <div class="info-box "style="background-color:#1d7846;">
             
    
              
              <?php
              $from_date= date("Y-m-d",strtotime("-15 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo ' <h4 style="font-size:30px;text-align:center;color:white;"><i class="fas fa-user"></i> '.$row.'</h4>';         ?><h2 style="color:white;font-size:200%; text-align:center">Since 15 days </h2>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-xl-3 col-md-6">
            <div class="info-box " style="background-color:#bee6da;">
          
              <?php
              $from_date= date("Y-m-d",strtotime("-30 days") ) ;
               $to_date=date("Y-m-d");
              $qry="SELECT * FROM emppersonaldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by id DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h4 style="font-size:30px;text-align:center;" > <i class="fas fa-user" style="color:#1a1a1a"></i>'.$row.'</h4>';
         ?>
         <h1 style="color:black;font-size:200%; text-align:center">Since 30 days </h1>
          </div>
          <!--/.info-box-->
        </div>
          <!--/.col-->

          <div class="col-xl-3 col-md-6">
            <div class="info-box "style="background-color:#fa7900;">
         
              <?php
             $qry="SELECT id FROM emppersonaldetail ORDER BY id";
             $rs=readrecord($qry);
              $row2= mysqli_num_rows($rs);
              echo ' <h4 style="font-size:30px;text-align:center;"><i class="fas fa-user"></i> '.$row2.'</h4>'; 
       ?>
        <h1 style="color:black;font-size:200%; text-align:center" >Total Emplo.</h1>
           </div>
           <!--/.info-box-->
         </div>

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
        <div class="row">
          
        <!-- Today status end -->



        <!-- statics end -->



                </tbody>
               <!-- <form id="frm" name="frm" action="" method="post">
<input type="hidden" id="cid" name="cid" value="/>


<input class="" type="text" id="tsearch" name="tsearch" placeholder="Search for..." style="margin-left:1200px; margin-bottom:15px; margin-top:10px;"/>    
    <input class="" type="submit" value="search" name="btnsearch" id="btnsearch"/>
</form>

  <!-- <input class="" type="text" id="tsearch" name="tsearch" placeholder="Search for..." style="margin-left:1200px;"/>    
    <input class="" type="submit" value="search" name="btnsearch" id="btnsearch"/>-->



<div class="container">
  <div class="col-sm-12">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
  </div>
</div>  
<div class="container">
  <div class="col-md-12">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
  </div>
</div>

 
    
      
      
     
          
    <?php
$status="";
$rcrd=1;
$sql="SELECT*
FROM emppersonaldetail,empeducationdetail,skill,companydetail
WHERE
emppersonaldetail.id=empeducationdetail.id
AND
emppersonaldetail.id=skill.id
AND
skill.id=companydetail.id";

if(isset($_POST["btnsearch"]))
{
extract($_POST);
$qry="SELECT id FROM emppersonaldetail WHERE full_name like '%$tsearch%' order by id";
$res=readrecord($qry);

if(mysqli_num_rows($res)>0)
{
 $row=mysqli_fetch_array($res);

 $id=$row['id'];
$sql="SELECT *
FROM emppersonaldetail,empeducationdetail,skill,companydetail
WHERE
emppersonaldetail.id=$id
AND
skill.id=$id
AND
companydetail.id=$id
AND 
empeducationdetail.id=$id";

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
<BR>
<BR>
                     <table class="table">
    <thead class="thead-light">
      <tr>
        <th><h1>ID<h1></th>
        
        <th><h1>Full Name</h1></th>
       
        <th><h1>E-mail</h1></th>
       
        <th><h1>Contact No</h1></th>
        
        <th><h1>Join Date</h1></th>
       
        
        
      
        <th ><h1>Action</h1></th>
        <th><h1></h1></th>
       

      </tr>
    </thead>
    <tbody>

<?php
$i=101;

  while($row=mysqli_fetch_array($rs))
  {
    $a="DS/EMP/".$i;
    ?>

    <tr>
   
    <td width="10%"><h1> <a href="Details.php?id=<?php echo $row["id"];?>"> <?php echo $a;?></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <td width="20%"><h1> <a href="Details.php?id=<?php echo $row["id"];?>"> <?php echo $row["full_name"];?></a></h1></td>
    
    <td width="20%"><h1><?php echo $row["email"]; ?></h1></td>
    
    <td width="20%"><h1><?php echo $row["mobile_no."]; ?></h1></td>
    
    <td width="20%">  <h1><?php echo $row["Join_date"]; ?></h1></td>
  
    
  
    
    
<td>
  
<button onclick="document.getElementById('id01').style.display='block'" id="button_color" style="background-color:#26C281;color: white; height: 40px; width: 75px; border-radius:25px;"><a href="empedit.php?id=<?php echo $row["id"];?>" style="color:white;"><h1 style="color: white;">update</h1></a></button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="" method="POST">
  <div class="col-md-4">
  </div>
        <div class="col-md-5" style="box-shadow:5px 5px 5px 5px #e6ebea ;background-color: white; border-radius:25px; margin-top:300px; border-style:groove; height:200px;width:2000px; " >
          <h1 style="font-size: 25px;text-align: center;">Update Account</h1>
          <br>
      <h1 style="font-size:20px; text-align:center;">Are you sure you want to Update this account?</h1>
    <br>
    <br>
      <div class="clearfix" style="text-align: center;">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color: red; border-radius:25px;height: 35px;width: 65px;"><h1 style="color: white;">Cancel</h1></button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="updatebtn"style="background-color: purple;height: 35px; border-radius:25px;width: 65px;><a href="empedit.php?id=<?php echo $row["id"];?>" style="color:black;"><h1 style="color: white;">update<h1></a></button>
      </div>
    </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      </form>
  
</div> 
</td>
<td>      
<button onclick="document.getElementById('id02').style.display='block'" id="button_col" style="background-color: red;border-radius:25px; height: 40px;width: 75px; "><a href="Delete.php?id=<?php echo $row["id"];?>" style="color:white;"><h1 style="color: white;">Delete</h1></a></button>
<div id="id02" class="modal">
 <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal1-content" action="">
       <div class="col-md-3"></div>
       <div class="col-md-5" style="box-shadow:5px 5px 5px 5px #e6ebea ;background-color: white; border-radius:25px; margin-top:300px; border-style:groove; height:200px;width:2000px; ">
          <h1 style="font-size: 25px;text-align: center;">Delete Account</h1>
          <br>
      <h1 style="text-align:center;font-size:25px;">Are you sure you want to delete this account?</p>
    
      <div class="clearfix" style="text-align: center;">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="height:35px;width: 65px; border-radius:25px; background-color:blue;"><h1 style="color: white;">Cancel</h1></button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="deletebtn" style="height:35px;width: 65px;  border-radius:25px;background-color: red;"><a href="Delete.php?id=<?php echo $row["id"];?>" style="color:black;"><h1 style="color: white;">Delete</h1></a></button>
      </div>
       </div>

       <div class="col-md-4"></div>
     </div>
    </div>
  </form>
  </div> 
  <button  id="button_color" style="background-color:#1a2732; color:white; height: 40px; width: 100px; border-radius:25px;margin-left:10px;"><a href="particularemp.php?id=<?php echo $row["id"];?>" style="color:white;"><h1 style="color: white;">Attendance</h1></a></button>
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
<h1 style="text-align:center";>Record Not Found</h1>
<?php
}
   ?> 
   </tbody>
            
    















      
      <!-- Area Chart Example-->

    
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
