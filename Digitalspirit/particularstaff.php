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

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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


.topnav .search-container {
  float: right;
}

.topnav select[type=text] {
  padding: 5px;
  margin-top: 8px;
  font-size: 16px;
  margin-bottom:10px;

}
.topnav input[type=text] {
  padding: 3px;
  margin-top: 3px;
  font-size: 14px;
  margin-bottom:10px;
  width:100px;
  

}

.topnav .search-container button {
  float: right;
  padding: 5px;
  margin-top: 8px;
  margin-left: 1px;
  background: #57889C;
  font-size: 12px;
  
  cursor: pointer;
  margin-bottom:10px;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 900px) {
  .topnav .search-container {
    float: none;
  }
   .topnav select[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
   .topnav input[type=text]{
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav select[type=text] {
    border: 1px solid #ccc;  
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
<body>

<?php
include 'base.php';
?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header" ><i class="fa fa-laptop"></i><b> Dashboard</h3>
            

          </div>
        </div>
        <div class="topnav">
  <div class="search-container">
    <form action="" method="POST">
     
    
      <select type="text" name="month"  >
<option value=01>January</option>
<option value=02>Februry</option>
<option value=03>March</option>
<option value=04>April</option>
<option value=05>May</option>
<option value=06>June</option>
<option value=07>July</option>
<option value=08>August</option>
<option value=09>September</option>
<option value=10>October</option>
<option value=11>November</option>
<option value=12>December</option>
      </select>
    <!--<select  type="text"   name="year" >
<option value=Year>Year</option>
<option value=2019>2019</option>
<option value=2020>2020</option>
<option value=2021>2021</option>
<option value=2022>2022</option>
<option value=2023>2023</option>
<option value=2024>2024</option>
<option value=2025>2025</option>
<option value=2026>2026</option>
<option value=2027>2027</option>
<option value=2028>2028</option>
<option value=2029>2029</option>
</select>-->
<input type="text" name="year" placeholder="Year..">
      <button type="submit" name="btnsearch" value="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
        <!--/.row-->

<?php 
	include "include/header.php"; 
?>
<div class="container">
		<div class="card">
        <?php 
        $id=$_GET['sid'];
			
?>
           
			<div class="card-body">
				<form action="" method="post">
      
					<table class="table table-striped">
						<tr>
							<th width="30%"><h1>S/L</h1></th>
							<th width="50%"><h1>Attendance Date</h1></th>
							<th width="25%"><h1>Attendance</h1></th>
						</tr>

                        <?php 
                    $month=date('m');
                    $year=date('y');
                  
                        $sql="SELECT * FROM staff_attendance where sid=$id";
$r=readrecord($sql);
$i=1;

if(isset($_POST["btnsearch"]))
{
  
extract($_POST);
$qry="SELECT * FROM staff_attendance where  sid=$id";
$r=readrecord($qry);
}
$get=mysqli_num_rows($r);

while($row=mysqli_fetch_array($r))
{

  if ($month==date('m',strtotime($row['att_time'])) and  $year==date('Y',strtotime($row['att_time'])))
  {
    
?>

						<tr>
                        
							<td><h1><?php echo $i;?></h1></td>
							<td><h1><?php echo $row['att_time'];?></h1></td>

							<td><h1>
		<input type="radio" name="attend[<?php echo $row['sid'];?>]"  value="present" <?php if($row['attend'] == "present") {echo "checked";} ?>>P
		<input type="radio" name="attend[<?php echo $row['sid'];?>]" value="absent" <?php if($row['attend'] == "absent") {echo "checked";} ?>>A
	</h1></td>
						</tr>
						<?php 
						$i++;
            
          }
        }
      
						?>
					</table>
				</form>
       
			</div>
		</div>
	</div>
        <div class="row">
          
        <!-- Today status end -->



        <!-- statics end -->



                </tbody>
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
