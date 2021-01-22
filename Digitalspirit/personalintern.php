<?php 
include ("include/connection.php");
?>
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
?>
  <!--sidebar end-->

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
              $qry="SELECT * FROM internpersnoldetail WHERE Join_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'
ORDER by uid DESC";
                 $rs=readrecord($qry);
                 $row= mysqli_num_rows($rs);
                 echo '<h4 style="font-size:30px;text-align:center;color:white;" ><i class="icon_documents_alt"></i> '.$row.'</h4>';
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
                 echo '<h4 style="font-size:30px;text-align:center;color:white;" ><i class="icon_documents_alt"></i> '.$row.'</h4>';
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


      <div class="row">

        <!-- Today status end -->



        <!-- statics end -->



        </tbody>
        <div class="container-fluid mt--7" style="padding-top: 100px;">
          <div class="row">
            <div class="col">
              <div class="card shadow">
                <div class="card-header bg-transparent">
                  <div>


                  </div>
                  <div class="card-body">
                    <div class="container">
                      <form name="myformcont" class="my-2" action="proffesionalintern.php" method="POST"
                        enctype="multipart/form-data">

                        <h3 style="text-align: center;font-size: 25px;">Persnol Details</h3>
                        <!-- <h2 class="text-center">LIC Form</h2> -->
                        <div class="row jumbotron">

                          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->
                          <div class="col-sm-6 form-group" style="margin-top: -20px;">
                            <label for="name">Name :</label>
                            <input type="text" class="form-control" name="name" id="name-f" placeholder=" Full Name."
                              style="font-size:15px;"><br>
                          </div>


                          <div class="col-sm-6 form-group" style="margin-top: -20px;">

                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="name-l" placeholder=" Email"
                               style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="phone_no">Phone No:</label>
                            <input type="phone" name="phone" class="form-control" id="Date" placeholder=" Phone No."
                               style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="aadhar card">Adhar no..</label>
                            <input type="phone" class="form-control" name="aadhar_no" id="name-f"
                              placeholder=" Adhar Number"  style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="pan card"> Pan Card</label>
                            <input type="text" class="form-control" name="pan_card" id="cost_center"
                              placeholder=" Pain Card Number" style="font-size:15px;">
                          </div>

                          <!-- <div class="col-sm-6 form-group">
            <label for="grade">Policy Type</label>
            <input type="text" class="form-control" name="policy_type" id="zip" placeholder="Enter grade " required>
        </div>
      -->
                          <div class="col-sm-6 form-group">
                            <label for="gender">Gender</label>
                            <select input type="text" class="form-control" name="gender" id="name-l" value="Gender"
                              placeholder="Gender"  style="font-size:15px;">
                              <option>Female</option>
                              <option>Male</option>

                            </select>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="dob">Date Of Birth</label>
                            <input type="Date" class="form-control" name="dob" id="name-l" placeholder="DOB" 
                              style="font-size:15px;">
                          </div>

                          <div class="col-sm-6 form-group">
                            <label for="bloodgroup"> Blood Group</label>
                            <select input type="text" class="form-control" name="bloodgroup" id="address-1"
                              placeholder=" Blood Group"  style="font-size:15px;">
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>

                            </select>
                          </div>


                          <div class="col-sm-6 form-group">
                            <label for="father name">Father's Name</label>
                            <input type="text" class="form-control" name="fathername" id="description"
                              placeholder=" Father Name"  style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="father_occupation"> Father's Occupation</label>
                            <input type="text" class="form-control" name="fatheroccu" id="pan-no"
                              placeholder=" Father Occoupation "  style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="father_no">Father's Number</label>
                            <input type="phone" class="form-control" name="fatherno" id="pan-no"
                              placeholder=" Father Number"  style="font-size:15px;">
                          </div>

                          <div class="col-sm-6 form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control datetimepicker" id="Date"
                              placeholder=" City"  style="font-size:15px;">
                          </div>

                          <div class="col-sm-6 form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control datetimepicker" id="Date"
                              placeholder="State " style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="pincode">Pincode</label>
                            <input type="phone" name="pincode" class="form-control datetimepicker" id="Date"
                              placeholder=" Pincode" style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control datetimepicker" id="Date"
                              placeholder=" Address"  style="font-size:15px;">
                          </div>
                          <div class="col-sm-6 form-group">
                            <label for="join date">Joining Date</label>
                            <input type="date" name="joindate" class="form-control datetimepicker" id="Date"
                              placeholder=" Address"  style="font-size:15px;">
                          </div>

                          <div class="col-sm-6">
      <label for="choose">Choose Picture:</label>

                            <div class="input-group mb-3">
                            <input type="file" class="form-control" name="file" id="name-l" placeholder=" Document" style="font-size:13px; height:40px;" >
                              
                            </div>






                          </div>

                          <div class="col-sm-12">
                            <input type="checkbox" class="form-check d-inline" id="chb" ><label for="chb"
                              class="form-check-label">&nbsp;I accept all terms and conditions.
                            </label>
                          </div>

                          <div class="col-sm-12 form-group mb-0">
                            <button class="btn btn-primary float-right" name="btn1"
                              style="font-size:21px; background-color:#57889c;">Next</button>
                          </div>

                        </div>
                      </form>
                    </div>
                  </div>
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
  <<script src="js/fullcalendar.min.js">
    </script>
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

</body>

</html>
