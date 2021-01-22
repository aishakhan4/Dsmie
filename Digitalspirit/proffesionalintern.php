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
                <?php
$status="";
if(isset($_POST["btn1"]))
{
  extract($_POST);

  $target_dir="image/";
  $target_file=$target_dir.basename($_FILES["file"]["name"]);
//  $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSIONS)); 

  move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);

 $qry="insert into internpersnoldetail (profile, name, email, phone_no, aadhar_no, pan_card, gender, date_of_birth, blood_group,
  father_name,father_occupation, father_no, city, state, pin_code, address,Join_date) values('$target_file','$name','$email','$phone',
  '$aadhar_no','$pan_card','$gender','$dob','$bloodgroup','$fathername','$fatheroccu','$fatherno','$city','$state','$pincode','$address','$joindate')";
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
 
     
<?php
$status="";
if(isset($_POST["btn2"]))
{
$a=4;
$b="jff";
  extract($_POST);
  
    //$files=array("file1","file2","file3","file4","file5");

    $target_dir="image/";
    

    
    $target_file0=$target_dir.basename($_FILES["file1"]["name"]);
    $target_file1=$target_dir.basename($_FILES["file2"]["name"]);
    $target_file2=$target_dir.basename($_FILES["file3"]["name"]);
    $target_file3=$target_dir.basename($_FILES["file4"]["name"]);
    $target_file4=$target_dir.basename($_FILES["file5"]["name"]);

  
    move_uploaded_file($_FILES["file1"]["tmp_name"],$target_file0);
    move_uploaded_file($_FILES["file2"]["tmp_name"],$target_file1);
    move_uploaded_file($_FILES["file3"]["tmp_name"],$target_file2);
    move_uploaded_file($_FILES["file4"]["tmp_name"],$target_file3);
    move_uploaded_file($_FILES["file5"]["tmp_name"],$target_file4);
    
    $qry="insert into internprofessionaldetail(school_name, board, percent, passing_year, school_marksheet, hschool_name,hsboard, passing_hyear,
    hpercent, hschool_marksheet, univercity, degree, gpercent,year, g_marksheet, pgdegree, pgunivercity, pgyear, pgpercent,
     pg_marksheet, otherdegree, otherunivercity, otheryear, otherpercent, other_marksheet)
   values('$sname','$sboard','$spercent','$spassing','$target_file0','$hsname','$hsboard','$hspassing','$hspercent',
   '$target_file1','$gname','$gdegree','$gpercent','$gpassing','$target_file2','$pgdegree','$pgname','$pgpassing','$pgpercent'
   ,'$target_file3','$odegree','$oname','$opassing','$opercent','$target_file4')";
 
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

<div class="container-fluid mt--7"  style="padding-top: 100px;">


<div class="row">
<div class="col">
  <div class="card shadow">
    <div class="card-header bg-transparent">
<div >
    
      <h3 style="text-align: center;font-size: 25px;">Proffesional Details</h3>
    </div>
    <div class="card-body">
   
     <div class="container">
      <form name="myformcont" class="my-2" action="" method="POST" enctype="multipart/form-data">
        <h2 class="text-center"></h2>
        <div class="row jumbotron">

          <!-- <div class="col-sm-12 form-group" style="margin-top: -20px;">
            <label for="client_id">Client_id :</label>
            <input type="text" class="form-control" name="client_id" id="name-f" placeholder="Enter your Client_id." required>
          </div> -->

          <!--<div class="col-sm-6 form-group" style="margin-top: -20px;"> -->
            <!--High school-->
            <div class="col-sm-6 form-group">
            <h3 style="font-size:25px;">High School</h3>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

            <div class="col-sm-6 form-group">
            <label for="school name">School Name:</label>
            <input type="text" class="form-control" name="sname" id="name-f" placeholder=" School Name" style="font-size:15px;" ><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="bord">Board:</label>
            <input type="text" class="form-control" name="sboard" id="name-l" placeholder=" Examination Bord" style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">Percent:</label>
            <input type="text" class="form-control" name="spercent" id="name-l" placeholder=" Percent" style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="spassing" id="name-l" placeholder=" Passsing Year"style="font-size:15px;"> 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file1" id="name-l" placeholder=" Document" style="font-size:15px;" >
          </div>
        
       
        <!-- Higher secondery school-->
        <div class="col-sm-6 form-group">
            
          </div>

<div class="col-sm-6 form-group">
            <h3 style="font-size:25px;">Higher Secondery School</h3>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>


        <div class="col-sm-6 form-group">
            <label for="school name">School Name:</label>
            <input type="text" class="form-control" name="hsname" id="name-f" placeholder=" School Name" style="font-size:15px;"><br>
          </div>

          <div class="col-sm-6 form-group">
            <label for="bord">Bord:</label>
            <input type="text" class="form-control" name="hsboard" id="name-l" placeholder=" Examination Bord"  style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">Percent:</label>
            <input type="text" class="form-control" name="hspercent" id="name-l" placeholder=" Percent" style="font-size:15px;" >
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="hspassing" id="name-l" placeholder=" Passsing Year" style="font-size:15px;"> 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file2" id="name-l" placeholder=" Document"  style="font-size:15px;">
          </div>
        

        <!--Graduation details-->
        <div class="col-sm-6 form-group">
            
          </div>

<div class="col-sm-6 form-group">
            <h3 style="font-size:25px;">Graduation Details</h3>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

            <div class="col-sm-6 form-group">
            <label for="univercity name">University Name:</label>
            <input type="text" class="form-control" name="gname" id="name-f" placeholder="  Univercity Name" style="font-size:15px;"><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="degree">Degree:</label>
            <input type="text" class="form-control" name="gdegree" id="name-l" placeholder=" Degree" style="font-size:15px;" >
          </div>
          <div class="col-sm-6 form-group">
            <label for="Percent">Percent:</label>
            <input type="text" class="form-control" name="gpercent" id="name-l" placeholder=" Percent"style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="gpassing" id="name-l" placeholder=" Passsing Year" style="font-size:15px;"> 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file3" id="name-l" placeholder=" Document" style="font-size:15px;" >
          </div>
        

        <!--Post Graduation details-->
         <div class="col-sm-6 form-group">
            
          </div>

<div class="col-sm-6 form-group">
            <h3 style="font-size:25px;">Post-Graduation Details</h3>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

           <div class="col-sm-6 form-group">
            <label for="univercity name">University Name:</label>
            <input type="text" class="form-control" name="pgname" id="name-f" placeholder="Univercity Name" style="font-size:15px;"><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="degree">Degree:</label>
            <input type="text" class="form-control" name="pgdegree" id="name-l" placeholder=" Degree" style="font-size:15px;" >
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">Percent:</label>
            <input type="text" class="form-control" name="pgpercent" id="name-l" placeholder=" Percent"style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="pgpassing" id="name-l" placeholder=" Passsing Year"style="font-size:15px;"> 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file4" id="name-l" placeholder=" Document"style="font-size:15px;">
          </div>


<!--other details-->
<div class="col-6"></div>
<div class="col-sm-6 form-group">

            <h3 style="font-size:25px;">Other Details</h3>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

           <div class="col-sm-6 form-group">
            <label for="univercity name">University Name:</label>
            <input type="text" class="form-control" name="oname" id="name-f" placeholder=" Univercity Name"style="font-size:15px;" ><br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="degree">Degree:</label>
            <input type="text" class="form-control" name="odegree" id="name-l" placeholder=" Degree"style="font-size:15px;" >
          </div>
          <div class="col-sm-6 form-group">
            <label for="percent">Percent:</label>
            <input type="text" class="form-control" name="opercent" id="name-l" placeholder=" Percent" style="font-size:15px;" >
          </div>
          
          <div class="col-sm-6 form-group">
             <label for="passing year">Passing Year:</label>
            <input type="text" class="form-control" name="opassing" id="name-l" placeholder=" Passsing Year"  style="font-size:15px;"> 
          </div>
          <div class="col-sm-6 form-group">
            <label for="choose">Enter Document:</label>
            <input type="file" class="form-control" name="file5" id="name-l" placeholder=" Document"  style="font-size:15px;">
          </div>
          <div class="col-sm-6 form-group">
        <label for="payment">Payment</label>
        <select input type="text" class="form-control" name="bloodgroup" id="address-1" placeholder=" Blood Group" required style="font-size:15px;">
        <option value="manually">Manually</option>
        <option value="cash">Cash</option>
         </select>
      </div>
      

<!-- <div class="col-6"></div>
<div class="col-sm-6 form-group">

            <h1>Education Brack</h1>
          </div>
          <div class="col-sm-6 form-group">
            
          </div>

           <div class="col-sm-12 form-group">
            
            <input type="text" class="form-control" name="break" id="name-f" placeholder=" Univercity Name" ><br>
          </div>   
 -->      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" name="btn2" style="font-size:21px; background-color:#57889c;">Submit</button>
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
