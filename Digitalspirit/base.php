
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

<body>
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <a href="dashboard.php" class="logo">DIGITAL <span class="lite">SPIRIT</span></a>

  
      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">

          <li id="task_notificatoin_bar" class="dropdown">
          <li class="dropdown">
            <a data-toggle="dropdown"  href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
        
        </ul>
        
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        
        <ul class="sidebar-menu">
        <img src="https://lh3.googleusercontent.com/-RYPIsjQFwYM/X_g49Jy4GNI/AAAAAAAAAEc/47oaeJsfurMh_yL0LCJAQgQImKYya9FnwCNcBGAsYHQ/w400-h375/ak.png"  style=" height:100px;width:100px;margin-left:35px;margin-top:25px;margin-bottom:25px;">
          <li class="active">
            <a class="" href="dashboard.php">
                          <i class="fas fa-tachometer-alt"></i>
                          <span >Dashboard</span>
                      </a>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fas fa-user-tie"></i> 
                          <span> INTERNS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                    
                 
          <li class="sub-menu">
            <a href="javascript:;" class="" style="background-color: black;">
                           
                          <span >ALL INTERNS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
         
                <li><a href="personalintern.php">PERSONAL</a></li>
                <li><a href="proffesionalintern.php">PROFFESIONAL</a></li>
                 <li><a href="showintern.php"> <span>SHOW  INTERNS</span></a></li>
                 <li><a href="takeinternattend.php"> <span>ATTENDANCE</span></a></li>
              
            </ul>
          </li>


            </ul>
          </li>








          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fas fa-user-tie"></i> 
                          <span> TRAINEES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                    
                 
          <li class="sub-menu">
            <a href="javascript:;" class="" style="background-color: black;">
                           
                          <span >ALL TRAINEES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
         
              <li><a class="" href="personal_traine.php">PERSIONAL </a></li>
              <li><a class="" href="proffesionaltraine.php"><span>PROFFESIONAL</span></a></li>
            <li><a href="showtraine.php"> <span>SHOW TRAINEES</span></a></li>
            <li>
              <a href="taketraineattend.php"> <span>ATTENDANCE</span></a></li>
              
            </ul>
          </li>


            </ul>
          </li>

                    <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fas fa-user-tie"></i> 
                          <span>EMPLOYEES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                    
                 
          <li class="sub-menu">
            <a href="javascript:;" class="" style="background-color: black;">
                           
                          <span >ALL EMPLOYEES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="personalemp.php">PERSONAL </a></li>
              <li><a class="" href="proffesionalemp.php">PROFFESIONAL </a></li>
              <li><a class="" href="refferenceemp.php">REFFERENCE</a></li>
              <li><a class="" href="skillemp.php">SKILLS EMPLOYEES</a></li>
              <li><a href="showemp.php"> <span>SHOW EMPLOYEES</span></a>
              </li>
              <li><a href="takeempattend.php"> <span>ATTENDANCE</span></a></li>
              
            </ul>
          </li>


            </ul>
          </li>





          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fas fa-user-tie"></i> 
                          <span>  STAFF</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                    
                 
          <li class="sub-menu">
            <a href="javascript:;" class="" style="background-color: black;">
                           
                          <span >ALL STAFF</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
         
              <li><a class="" href="personalstaff.php">PERSIONAL </a></li>
              <li><a class="" href="showstaff.php"><span>SHOW STAFF</span></a></li>
            <li><a href="takestaffattend.php"> <span>ATTENDANCE</span></a></li>
            
              
            </ul>
          </li>


            </ul>
          </li>




        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>