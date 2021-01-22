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


<body>
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
          <h1 style="color:white;font-size:200%; text-align:center">since 7 days </h1>

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
                 echo ' <h4 style="font-size:30px;text-align:center;color:white;"><i class="fas fa-user"></i> '.$row.'</h4>';         ?><h2 style="color:white;font-size:200%; text-align:center">since 15 days </h2>
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
         <h1 style="color:black;font-size:200%; text-align:center">since 30 days </h1>
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


          
        <!-- Today status end -->



        <!-- statics end -->



                </tbody>
                <div class="card mb-3">
        <div class="card-header">
          
        <div class="card-body">
          <div class="table-responsive">
          <form action="" method="POST">
         <button style="height:35px;width:60px;color:black;margin-left:1150px;font-size:15px; background-color:navyblue;border-radius:25px;"> <a href="javascript:window.print()">print </button></a>
 
            <table  class="table">
        
    <?php
$status="";
$id=$_GET['id'];
//$qry="select * from emppersonaldetail where id='$id'";
$qry="SELECT*
FROM emppersonaldetail,empeducationdetail,skill,companydetail
WHERE
empeducationdetail.id=$id
AND
emppersonaldetail.id=$id
AND
skill.id=$id
AND
companydetail.id=$id";

/*if(isset($_POST["btnsearch"]))
{
extract($_POST);
$qry="select * from category where catname like '%$tsearch%' order by catid desc";
}*/
$rs=readrecord($qry);
if(mysqli_num_rows($rs)>0)
{
?>
<?php
  while($row=mysqli_fetch_array($rs))
  {
    ?>

    <tbody>
    <tr>
    <th><h1>ID</h1></th>
    <td><h1><?php echo $row["id"]; ?></h1></td>
    </tr>
    <tr>
    <th><h1>PROFILE</h1></th>
    <td><img src='<?php echo  $row["pfile"]; ?>' style="height:85px;"></td>
    </tr>
    <tr>
    <th><h1>FULL Name</h1></th>
    <td><h1><?php echo $row["full_name"]; ?></h1></td></tr>
    <tr>
    <th><h1>PHONE NO.</h1></th>
    <td><h1><?php echo $row["mobile_no."]; ?></h1></td></tr>
    <tr>
    <th><h1>EMAIL</h1></th>
    <td><h1><?php echo $row["email"]; ?><h1></td></tr>
    <tr>
    <th><h1>ADHAR NO.</h1></th>
    <td><h1><?php echo $row["aadhar_number"]; ?></h1></td></tr>
    <tr>
    <th><h1>PAN CARD</h1></th>
    <td><h1><?php echo $row["pancard"]; ?></h1></td></tr>
    <tr>
    <th><h1>GENDER</h1></th>
    <td><h1><?php echo $row["gender"]; ?></h1></td></tr>
    <tr>
    <th><h1>DOB</h1></th>
    <td><h1><?php echo $row["dob"]; ?></h1></td></tr>
    <tr>
    <th><h1>BLOOD GROUP</h1></th>
    <td><h1><?php echo $row["blood_group"]; ?></h1></td></tr>
    <tr>
    <th><h1>FATHER Name</h1></th>
    <td><h1><?php echo $row["father_name"]; ?></h1></td></tr>
    <tr>
    <th><h1>FATHER OCCUPATION</h1></th>
    <td><h1><?php echo $row["father_occupation"]; ?></h1></td></tr>
    <tr>
    <th><h1>FATHER PHONE NO.</h1></th>
    <td><h1><?php echo $row["father_num"]; ?></h1></td></tr>
    <tr>
    <th><h1>ADDRESS</h1></th>
    <td><h1><?php echo $row["address"]; ?></h1></td></tr>
    <tr>
    <th><h1>STATE</h1></th>
    <td><h1><?php echo $row["state"]; ?></h1></td></tr>
    <tr>
    <th><h1>CITY</h1></th>
    <td><h1><?php echo $row["city"]; ?></h1></td></tr>
    <tr>
    <th><h1>PINCODE</h1></th>
    <td><h1><?php echo $row["pincode"]; ?></h1></td></tr>
    <tr>
    <th><h1>JOIN DATE</h1></th>
    <td><h1><?php echo $row["Join_date"]; ?></h1></td></tr>
    <tr>
    <th><h1> High School Name</h1></th>
    <td><h1><?php echo $row["school_name"]; ?><th></td></tr>
    <tr>
    <th><h1>High school Board</h1></th>
    <td><h1><?php echo $row["board"]; ?></h1></td></tr>
    <tr>
    <th><h1>High School Percent</h1></th>
    <td><h1><?php echo $row["percent"]; ?></h1></td></tr>
    <tr>
    <th><h1>High School Passing Year</h1></th>
    <td><h1><?php echo $row["passing_year"]; ?></h1></td></tr>
    <tr>
    <th><h1> High Secondary School Name</h1></th>
    <td><h1><?php echo $row["hschool_name"]; ?></h1></td></tr>
    <tr>
    <th><h1>High Secondary school Board</h1></th>
    <td><h1><?php echo $row["hsboard"]; ?></h1></td></tr>
    <tr>
    <th><h1>High Secondary School Passing Year</h1></th>
    <td><h1><?php echo $row["passing_hyear"]; ?></h1></td></tr>
    <tr>
    <th><h1>High Secondary School Percent</h1></th>
        <td><h1><?php echo $row["hpercent"]; ?></h1></td></tr>
    <tr>
    <th><h1>Graduation Univercity Name</h1></th>
    <td><h1><?php echo $row["univercity"]; ?></h1></td></tr>
    <tr>
    <th><h1>Graduation Degree</h1></th>
    <td><h1><?php echo $row["degree"]; ?></h1></td></tr>
    <tr>
    <th><h1>Graduation Percent<h1></th>
    <td><h1><?php echo $row["gpercent"]; ?></h1></td></tr>
    <tr>
    <th><h1>Graduation Passing Year</h1></th>
    <td><h1><?php echo $row["year"]; ?></h1></td></tr>
    <tr>
    <th><h1>Post Graduation Univercity Name</h1></th>
    <td><h1><?php echo $row["pgdegree"]; ?></h1></td></tr>
    <tr>
    <th><h1>Post Graduation Degree</h1></th>
    <td><h1><?php echo $row["pgunivercity"]; ?></h1></td></tr>
    <tr>
    <th><h1>Post Graduation Percent</h1></th>
    <td><h1><?php echo $row["pgyear"]; ?></td></tr>
    <tr>
    <th><h1>Post Graduation Passing Year</h1></th>
    <td><h1><?php echo $row["pgpercent"]; ?></h1></td></tr>
    <tr>
    <th><h1>Other Degree</h1></th>
    <td><h1><?php echo $row["otherdegree"]; ?></h1></td></tr>
    <tr>
    <th><h1>Other Univercity Name</h1></th>
    <td><h1><?php echo $row["otherunivercity"]; ?></h1></td></tr>
    <tr>
    <th><h1>Other Passing Year</h1></th>
    <td><h1><?php echo $row["otheryear"]; ?></h1></td></tr>
    <tr>
    <th><h1>Other Percent<h1></th>    
    <td><h1><?php echo $row["otherpercent"]; ?></h1></td></tr>
    <tr>
    <th><h1>Education Break</h1></th>
    <td><h1><?php echo $row["education_break"]; ?></h1></td></tr>
    <tr>
    <th><h1>Skills</h1></th>
    <td><h1><?php echo $row["skill"]; ?></h1></td></tr>
    <tr>
    <th><h1>Position<h1></th>
    <td><h1><?php echo $row["position"]; ?></h1></td></tr>
    <tr>
    <th><h1>Experience</h1></th>
    <td><h1><?php echo $row["experience"]; ?></h1></td></tr>
    <tr>
    <th><h1>Company Name</h1></th>
    <td><h1><?php echo $row["compname"]; ?></h1></td></tr>
    <tr>
    <th><h1>Designation</h1></th>
    <td><h1><?php echo $row["designation"]; ?></h1></td></tr>
    <tr>
    <th><h1>Contact NO.</h1></th>
    <td><h1><?php echo $row["cont_num"]; ?><h1></td></tr>
    <tr>
    <th><h1>Company Email</h1></th>
    <td><h1><?php echo $row["Email"]; ?></h1></td></tr>
    <tr>
    <th><h1>Department</h1></th>
     <td><h1><?php echo $row["belongs_department"]; ?><h1></td></tr>
  




    
        
       
    
    
      
    </tbody>
    <?php
  }
}
   ?> 
    <button type="submit" class=" btn-primary" style="border-radius:25px;size:65px;height:35px;width:64px;">BACK</button>
        <!-- <button type="button" class=" btn-danger">Danger</button> -->    
<br>
  </table>
  </form>
  
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
