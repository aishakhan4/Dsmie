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


        <div class="row">
          
        <!-- Today status end -->
        <?php
$status="";
if(isset($_POST["btn2"]))
{
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
    
    $qry="insert into empeducationdetail(school_name, board, percent, passing_year, school_marksheet, hschool_name,hsboard, passing_hyear,
    hpercent, hschool_marksheet, univercity, degree, gpercent,year, g_marksheet, pgdegree, pgunivercity, pgyear, pgpercent,
     pg_marksheet, otherdegree, otherunivercity, otheryear, otherpercent, other_marksheet, education_break)
   values('$sname','$sboard','$spercent','$spassing','$target_file0','$hsname','$hsboard','$hspassing','$hspercent',
   '$target_file1','$gname','$gdegree','$gpercent','$gpassing','$target_file2','$pgdegree','$pgname','$pgpassing','$pgpercent'
   ,'$target_file3','$odegree','$oname','$opassing','$opercent','$target_file4','$break')";
 
 $rs=executequery($qry);
 if($rs=="success")
 {
 $status="<h3>Category Added succssfully</h3>";
 }
 else
 {
 $status="<h3>error to Added</h3>";
 }  
}
?>

      
      <?php  
// $status="";
// if(isset($_POST["btn3"]))
// {
//  $number = count($_POST["skill"]);
//  echo "Skilll".$_POST['skill'][0]."<br>";
// echo "skill".$_POST['skill'][1]."<br>";

// $skills="";
// $positions="";
// $experiences="";
//  if($number > 0)  
//  {  
//       for($i=0; $i<$number; $i++)  
//       {
//        if( $_POST["skill"][$i] != '' && $_POST["position"][$i] != '' && $_POST["experience"][$i] != '' ) 
//            {  
//              $skill=mysqli_real_escape_string( getconnect(), $_POST["skill"][$i]);
//              $position=mysqli_real_escape_string(getconnect(), $_POST["position"][$i]);
//              $experience=mysqli_real_escape_string(getconnect(), $_POST["experience"][$i]);
            
//             $skills.=$skill.',';
//             $positions.=$position.',';
//             $experiences.=$experience.',';
//            }
      
//       }

//     }
//            $sql = "INSERT INTO skill(skill,position,experience) VALUES('$skills','$positions','$experiences')";  
//                 $rs=executequery($sql);
//            }
           ?>

 <div class="container">  
                <br />  
                <br />  
                <h1 style="text-align:center; font-size:25px;" > Employee Skills  </h1><br>  
                <div class="form-group">  
                     <form name="add_name" id="add_name" method="POST" action="refferenceemp.php">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                        
                                        <td><input type="text" name="skill[]" placeholder="Skills" class="form-control name_list" style="font-size:15px;"/></td> 
                                        <td> 
        <select input type="text" class="form-control" name="position[]" id="address-1" placeholder=" Blood Group" required style="font-size:15px;">
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Expert">Expert</option></select>
       </td> 
                                        <td> <select input type="text" class="form-control" name="experience[]" id="address-1" placeholder=" Blood Group" required style="font-size:15px;">
        <option value="0-1 month">0-1 month</option>
        <option value="0-2 month">0-2 month</option>
        <option value="0-3 month">0-3 month</option>
         <option value="0-4 month">0-4 month</option>
          <option value="0-5 month">0-5 month</option>
           <option value="0-6 month">0-6 month</option>
            <option value="0-7 month">0-7 month</option>
             <option value="0-8 month">0-8 month</option>
              <option value="0-9 month">0-9 month</option>
               <option value="0-10 month">0-10 month</option>
                <option value="0-11 month">0-11 month</option>
      </select></td>  
                                        <td><button type="button" name="add" id="add" class="btn btn-success" style="font-size:15px;">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="btn3" id="submit" class="btn btn-info" value="Next" style="font-size:20px;" />  
                          </div>  
                     </form>  
                </div>  
           </div>  



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
    <script src="js/skill.js"></script> 
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
