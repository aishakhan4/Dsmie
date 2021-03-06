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
  <style type="text/css">
    #form{
    border:1px solid black;
    margin-top: 50px;
    padding: 50px 50px;
     box-shadow: 2px 3px black;
     background-color: lightgray;
  }
 form h2{
    text-align: center;
    font-size:30px;
  }

  </style>

</head>

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
        <div class="col-xl-3 col-md-6">
            <div class="info-box" style="background-Color:#045a6b;">
               
            
              <div class="mr-5">
              
              </div>
              <?php
             $qry="SELECT id FROM emppersonaldetail ORDER BY id";
             $rs=readrecord($qry);
              $row2= mysqli_num_rows($rs);
              echo ' <h4 style="font-size:30px;text-align:center;color:white;"><i class="fas fa-user"></i> '.$row2.'</h4>';
      ?>
      <h1 style="color:white;font-size:200%;text-align:center">Total Employees</h1>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-xl-3 col-md-6 ">
            <div class="info-box "  style="background-Color:#1d7846;">
              
             
              <div class="mr-5">
              
              </div>
              <?php
             $qry="SELECT uid FROM internpersnoldetail ORDER BY uid";
             $rs=readrecord($qry);
              $row1= mysqli_num_rows($rs);
              echo '<h4 style="font-size:30px;text-align:center;color:white;"><i class="fas fa-user-tie"></i> '.$row1.'</h4>';
      ?>
      <h1 style="color:white;font-size:200%;text-align:center">Total TRAINEES</h1>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-xl-3 col-md-6 ">
            <div class="info-box " style="background-color:#bee6da;">
              
                           <div class="mr-5">
                           
                           </div>
                           <?php
             $qry="SELECT Tid FROM tranpersonaldetail ORDER BY Tid";
             $rs=readrecord($qry);
              $row3= mysqli_num_rows($rs);
              echo '<h4 style="font-size:30px;text-align:center;" ><i class="icon_documents_alt"></i> '.$row3.'</h4>';
      ?>
      <h1 style="color:white;font-size:200%;text-align:center">Total Interns</h1>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-xl-3 col-md-6" >
            <div class="info-box " style="background-color:#fa7900;">
              
             
              <div class="mr-5">
              
              </div>
              <?php
                $read=$row1+$row2+$row3; 
              echo '<h4 style="font-size:30px;text-align:center;" > <i class="fas fa-users"></i>'.$read.'</h4>';
      ?>
      <h1 style="color:white;font-size:200%;text-align:center">OVER ALL INFORMATIONS</h1>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>        <!--/.row-->


        <div class="row">
        <?php
$status="";
if(isset($_POST["btn1"]))
{
extract($_POST);
$uid=$_SESSION["id"];
$qry="update account set email='$email', password='$pswd'
where id='$uid'";
$rs=executequery($qry);
if($rs=="success")
{
$status="<h3>user information updated successfully</h3>";
}
else
{
$status="<h3>error to update</h3>";
}
}
?>
<?php
$uid=$_SESSION["id"];
$qry="select * from account where id='$uid'";
$rs=readrecord($qry);
$email="";
if(mysqli_num_rows($rs)>0)
{
$row=mysqli_fetch_array($rs);
$email=$row["email"];
}
?>

<div class="container">
  <form  id="form" action="" method="POST">
    <h2>Admin</h2>
    <div class="form-group">
      <h1>Enter your Email</h1>
        <input type="email" name="email" class="form-control" placeholder="email" required value="<?php echo $email;?>" style="font-size:15px;"></input><br>
    </div>
    <div class="form-group">
      <h1>Password</h1>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value=""  style="font-size:15px;">
    </div><br>
    <div class="form-group">
      <h1>Confirm Password</h1>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Confirm password" name="pswd" value=""  style="font-size:15px;">
    </div><br>
    <button type="submit" class="btn btn-primary" name="btn1"><h1>update</h1></button>
  </form>
</div
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
