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
<script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">



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
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            

          </div>
        </div>
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



        <div class="row">
          
        <!-- Today status end -->

        <?php  
$status="";
if(isset($_POST["btn3"]))
{
 $number = count($_POST["skill"]);


$skills="";
$positions="";
$experiences="";
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {
       if( $_POST["skill"][$i] != '' && $_POST["position"][$i] != '' && $_POST["experience"][$i] != '' ) 
           {  
             $skill=mysqli_real_escape_string( getconnect(), $_POST["skill"][$i]);
             $position=mysqli_real_escape_string(getconnect(), $_POST["position"][$i]);
             $experience=mysqli_real_escape_string(getconnect(), $_POST["experience"][$i]);
            
            $skills.=$skill.',';
            $positions.=$position.',';
            $experiences.=$experience.',';
           }
      
      }

    }
           $sql = "INSERT INTO skill(skill,position,experience) VALUES('$skills','$positions','$experiences')";  
                $rs=executequery($sql);
           }

           
           ?>

      

      <?php 
 $status="";
 if(isset($_POST["btn4"]))
 {
 extract($_POST);
 $qry="insert into companydetail (compname, designation,cont_num, Email, gotdetails, relationships, belongs_department)
 values('$name','$design','$contact','$email','$question','$relationship','$department')";
 $rs=executequery($qry);
 if($rs)
 {
   ?>
<script type='text/javascript'>
Swal.fire('<h1> Successfully Inserted</h1>');
</script>
   <?php
 }
 else{
   ?>
 <script type='text/javascript'>
     Swal.fire('<h5>Not Inserted</h5>');
     </script>
     <?php
     }


    }
?>

<div class="container-fluid mt--7">
<div class="row">

                </tbody>
              </table>
            </section>
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
         
      <h3 style="font-size: 25px; text-align: center;" >Company Reference Details</h3>
    </div>
    <div class="card-body">
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST">
        <!-- <h2 class="text-center">LIC Form</h2> -->
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->

          <!--<div class="col-sm-6 form-group" style="margin-top: -20px;"> -->
            <!--High school-->
      
            <div class="col-sm-6 form-group">
            <label for=" name">Name</label>
            <input type="text" class="form-control" name="name" id="name-f" placeholder="  Name" required style="font-size:15px;"><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="besignation">Designation</label>
            <input type="text" class="form-control" name="design" id="name-l" placeholder=" Designation"  style="font-size:15px;">
          </div>
        
          <div class="col-sm-6 form-group">
            <label for="contact no.">contact no.</label>
            <input type="phone" class="form-control" name="contact" id="name-l" placeholder=" Contact no." required style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Email</label>
            <input type="text" class="form-control" name="email" id="name-l" placeholder=" Email" required style="font-size:15px;"> 
          </div>
       

          <div class="col-sm-6 form-group">
          </div>
          <div class="col-sm-6 form-group">
          </div>
          
       
          <div class="col-sm-6 form-group">
          </div>
          <div class="col-sm-6 form-group">
          </div>
       
       
          <div class="col-sm-6 form-group">
          </div>
          <div class="col-sm-6 form-group">
          </div>
       
       
       











          <div class="col-sm-6 form-group">
             <label for="passing year">How Do You Know Him/Her</label>
            <input type="text" class="form-control" name="question" id="name-l" placeholder=" How Do You Know Him/Her"  style="font-size:15px;"> 
          </div>   <div class="col-sm-6 form-group">
             <label for="passing year">Relationship With Employee</label>
            <input type="text" class="form-control" name="relationship" id="name-l" placeholder=" Reletionship with Employee"  style="font-size:15px;"> 
          </div>   <div class="col-sm-6 form-group">


          
          <div class="col-sm-6 form-group">
          </div>
          <div class="col-sm-6 form-group">
          </div>
          
       
          <div class="col-sm-6 form-group">
          </div>
          <div class="col-sm-6 form-group">
          </div>
       
       
          <div class="col-sm-6 form-group">
          </div>
          <div class="col-sm-6 form-group">
          </div>
       
             <label for="passing year">Belongs To Department</label>
            <input type="text" class="form-control" name="department" id="name-l" placeholder=" Department name"  style="font-size:15px;"> 
          </div>
       
       
          
       <br>   
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" name="btn4" style="font-size:21px;">Submit</button>
     </div>
     
   </div>
 </form>
</div> 
</div>
</div>
</div>
</div>

        <!-- statics end -->



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
