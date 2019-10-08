<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Furecs | Dashboard</title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <!-- bootstrap 3.0.2 -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- font Awesome -->
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons -->
      <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <!-- Morris chart -->
      <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
      <!-- jvectormap -->
      <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
      <!-- fullCalendar -->
      <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
      <!-- Daterange picker -->
      <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
      <!-- bootstrap wysihtml5 - text editor -->
      <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
      <!-- Theme style -->
      <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="skin-black">
      <!-- header logo: style can be found in header.less -->
      <?php include'includes/header.php'?>
      <div class="wrapper row-offcanvas row-offcanvas-left">
         <!-- Left side column. contains the logo and sidebar -->
         <?php include'includes/sidebar.php'?>
         <!-- Right side column. Contains the navbar and content of the page -->
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Dashboard
                  <small>Control panel</small>
               </h1>
               <ol class="breadcrumb">
                  <li><a href="#"><i class="fa  fa-home"></i> Home</a></li>
                  <li class="active">Dashboard</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <!-- Small boxes (Stat box) -->
               <div class="row">
                  <div class="col-lg-3 col-xs-6">
                     <!-- small box -->
                     <div class="small-box bg-yellow">
                        <div class="inner">
                           <h5>
                              Click to Join Us
                           </h5>
                           <p>
                              Join Us
                           </p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                     <!-- small box -->
                     <div class="small-box bg-aqua">
                        <div class="inner">
                           <h5>
                              KYC Status
                           </h5>
                           <p>
                              Pending
                           </p>
                        </div>
                        <div class="icon">
                           <i class="fa fa-spinner"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                     <!-- small box -->
                     <div class="small-box bg-green">
                        <div class="inner">
                           <h5>
                              Weekly
                           </h5>
                           <p>
                              Income
                           </p>
                        </div>
                        <div class="icon">
                           <i class="fa  fa-rupee "></i>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                     <!-- small box -->
                     <div class="small-box bg-red">
                        <div class="inner">
                           <h5>
                              Awards
                           </h5>
                           <p>
                              Royal Executive Old
                           </p>
                        </div>
                        <div class="icon">
                           <i class="fa fa-location-arrow"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                  </div>
                  <!-- ./col -->
               </div>
               <!-- /.row -->
               <!-- top row -->
               <div class="row">
                  <div class="col-xs-12 connectedSortable">
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
               <!-- Main row -->
               <div class="row">
                  <!-- Left col -->
                  <section class="col-lg-6 connectedSortable">
                     <!-- quick email widget -->
                     <div class="box box-info">
                        <div class="box-header">
                           <i class="fa fa-envelope"></i>
                           <h3 class="box-title">Quick Email</h3>
                           <!-- tools box -->
                           <!-- /. tools -->
                        </div>
                        <div class="box-body">
                           <form action="#" method="post">
                              <div class="form-group">
                                 <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                              </div>
                              <div>
                                 <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                              </div>
                           </form>
                        </div>
                        <div class="box-footer clearfix">
                           <button class="pull-right btn bg-navy margin" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                     </div>
                  </section>
                  <!-- /.Left col -->
                  <!-- right col (We are only adding the ID to make the widgets sortable)-->
                  <section class="col-lg-6 connectedSortable">
                     <!-- Map box -->
                     <div class="box box-primary">
                        <div class="box-footer">
                           <center><button class="btn btn-info"><i class="fa fa-download"></i> Application Front</button>
                              <button class="btn btn-warning"><i class="fa fa-bug"></i> Application Back</button>
                           </center>
                        </div>
                     </div>
                     <!-- /.box -->
                  </section>
                  <!-- right col -->
               </div>
               <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
         </aside>
         <!-- /.right-side -->
      </div>
      <!-- ./wrapper -->
      <!-- add new calendar event modal -->
      <!-- jQuery 2.0.2 -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <!-- jQuery UI 1.10.3 -->
      <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <!-- Morris.js charts -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
      <!-- Sparkline -->
      <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
      <!-- jvectormap -->
      <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
      <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
      <!-- fullCalendar -->
      <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
      <!-- jQuery Knob Chart -->
      <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
      <!-- daterangepicker -->
      <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
      <!-- iCheck -->
      <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
      <!-- AdminLTE App -->
      <script src="js/AdminLTE/app.js" type="text/javascript"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>        
   </body>
</html>