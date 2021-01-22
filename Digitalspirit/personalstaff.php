<?php include("include/connection.php");?>
<?php /*session_start();
if(!isset($_SESSION["id"]))
{
header("location:index.php");
}*/
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
  ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">

          </div>
        </div>
       
      

        <!--/.row
</table>
            </section>
            <!--Project Activity end-->
    <div class="container">
      <div class="col-md-12"></div>
      <div class="col-lg-12"></div>
      <div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div><div class="col-lg-12"></div>
    </div>

        <div class="row">
        <?php
$status="";
if(isset($_POST["btn1"]))
{
  extract($_POST);
 
  $qry="insert into staffpersonaldetail(`name`, `phone`, `aadhar`,`role`,`join_date`)
  values('$name','$phone','$aadhar','$role','$joindate')";
//$qry="insert into emppersonaldetail(pfile,`full name`,`mobile no.`, email, `aadhar_number`, pancard, gender, dob,`blood group`, `father name`, `father occupation`, `father num`, address, state, city, pincode) values('$target_file','$name',$phone,'$email',$aadhar,$pan,'$gender','$dob','$bloodgroup','$fname','$occupation',$fnum,'$address','$state','$city',$pincode)";

//$qry="insert into emppersonaldetail(pfile,`full name`,`mobile no.`, email, `aadhar_number`, pancard, gender, dob,`blood group`, `father name`, `father occupation`, `father num`, address, state, city, pincode) values('gehehe','52uejehj',14242,'ewwtyeye',45667,7788,'gender','dob','bl','fname','occupation',526272,'address','state','city',5252)";

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

        <!-- Today status end -->
        <div class="container-fluid mt--7">
<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
    
    </div>

    <h1 style="font-size: 25px;text-align: center;">Personal Details</h1>
        <div class="card-body">
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST" enctype="multipart/form-data">
    

        <!-- <h2 class="text-center">LIC Form</h2> -->
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->
 
          
          
          <div class="col-sm-6 form-group" style="">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name-f" placeholder=" Full Name." style="font-size:15px;"><br>
           </div>
           <div class="col-sm-6 form-group">
            <label for="Date">Phone No:</label>
            <input type="text" name="phone" class="form-control" id="Date" placeholder=" Phone No."  style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
            <label for="e_group">Adhar no.:</label>
            <input type="text" class="form-control" name="aadhar" id="name-f" placeholder=" Adhar Number" style="font-size:15px;margin-bottom:50px;">
          </div>
          <div class="col-sm-6 form-group">
            <label for="e_group">Role:</label>
            <input type="text" class="form-control" name="role" id="name-f" placeholder="Role"  style="font-size:15px;margin-bottom:10px;">
          </div>

      <div class="col-sm-6 form-group">
        <label for="join date">Joining Date</label>
        <input type="date" name="joindate"  class="form-control datetimepicker" id="Date" placeholder=" Address"  style="font-size:15px;">
      </div>

      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" style="font-size:15px;"><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" name="btn1"><h2 style="font-size:20px; font-weight:bold; color:#ffffff;">Submit</h2></button>
     </div>
     
   </div>
 </form>
</div> 
</div>
</div>
</div>
</div>


        <!-- statics end -->



    </section>            
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/style.js"></script> 
<script type="text/javascript" src="js/personal.js"></script>
 <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
</script>

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
    <script src="js/personal.js"></script>
    <script>
    function upload(){
 
 var imgcanvas = document.getElementById("canv1");
 var fileinput = document.getElementById("finput");
 var image = new SimpleImage(fileinput);
 image.drawTo(imgcanvas);
}

 $(document).ready(function(){
// Prepare the preview for profile picture
   $("#wizard-picture").change(function(){
       readURL(this);
   });
});
function readURL(input) {
   if (input.files && input.files[0]) {
       var reader = new FileReader();

       reader.onload = function (e) {
           $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
       }
       reader.readAsDataURL(input.files[0]);
   }
}
</script>


    <script>

      
    </script>

</body>

</html>
