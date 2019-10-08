<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Furecs | Dashboard</title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <!-- bootstrap 3.0.2 -->
      <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- font Awesome -->
      <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons -->
      <link href="<?php echo base_url();?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <!-- Morris chart -->
      <link href="<?php echo base_url();?>assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
      <!-- jvectormap -->
      <link href="<?php echo base_url();?>assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
      <!-- fullCalendar -->
      <link href="<?php echo base_url();?>assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
      <!-- Daterange picker -->
      <link href="<?php echo base_url();?>assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
      <!-- bootstrap wysihtml5 - text editor -->
      <link href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
      <!-- Theme style -->
      <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="skin-black">
      <!-- header logo: style can be found in header.less -->
      <header class="header">
         <a href="index.php" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            Furecs
         </a>

         From
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
To
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
From
<ul class="sidebar-menu">
To
<ul class="sidebar-menu" data-widget="tree">
         <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
               <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-envelope"></i>
                     <span class="label label-success">4</span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                           <!-- inner menu: contains the actual data -->
                           <ul class="menu">
                              <li>
                                 <!-- start message -->
                                 <a href="#">
                                    <h4>
                                       Loreum Ipsum
                                       <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Loreum ipsum dummy text here</p>
                                 </a>
                              </li>
                              <!-- end message -->
                              <li>
                                 <a href="#">
                                    <h4>
                                       Loreum Ipsum
                                       <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                    </h4>
                                    <p>Loreum ipsum dummy text here</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <h4>
                                       Loreum Ipsum 
                                       <small><i class="fa fa-clock-o"></i> Today</small>
                                    </h4>
                                    <p>Loreum ipsum dummy text here</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <h4>
                                       Loreum Ipsum 
                                       <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                    </h4>
                                    <p>Loreum ipsum dummy text here</p>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                     </ul>
                  </li>
                  <!-- Notifications: style can be found in dropdown.less -->
                  <li class="dropdown notifications-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="fa fa-warning"></i>
                     <span class="label label-warning">10</span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                           <!-- inner menu: contains the actual data -->
                           <ul class="menu">
                              <li>
                                 <a href="#">
                                 <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-users warning"></i> 5 new members joined
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="ion ion-ios7-cart success"></i> 25 sales made
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="ion ion-ios7-person danger"></i> You changed your username
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                     </ul>
                  </li>
                  <!-- Tasks: style can be found in dropdown.less -->
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="glyphicon glyphicon-user"></i>
                     <span>Nithish <i class="caret"></i></span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-navy">
                           <img src="img/avatar.png" class="img-circle" alt="User Image" />
                           <p>
                              Nithish - Loreum Ipsum
                              <small>loreum ipsum dummy text</small>
                           </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <div class="pull-left">
                              <a href="#" class="btn bg-navy margin btn-flat">Profile</a>
                           </div>
                           <div class="pull-right">
                              <a href="#" class="btn bg-navy margin btn-flat">Sign out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
       <div class="wrapper row-offcanvas row-offcanvas-left">