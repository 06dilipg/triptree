<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>AdminLTE | Data Tables</title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <!-- bootstrap 3.0.2 -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- font Awesome -->
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons -->
      <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <!-- DATA TABLES -->
      <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li> 
                  <li><a href="registered.php"><i class="fa fa-dashboard"></i> Registered Details </a></li>
                  <li class="active">webadmin</li>
               </ol>
               <h1>
               Registered
               </h1>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="box">
                              <div class="box-header">
                                 <h3 class="box-title"><b> <i class="fa fa-envelope" style="font-size:17px;"></i> Register user details</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="registered.php">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body table-responsive no-padding">
                                 <table class="table table-hover">
                                    <tbody>
                                       <tr>
                                          <td><b>Email</b></td>
                                          <td>info@hp.com</td>
                                       </tr>
                                       <tr>
                                          <td><b>Phone</b></td>
                                          <td>9999999999</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Address</b></td>
                                          <td>	Bangalore</td>
                                       </tr>
                                       <tr>
                                          <td><b>State</b></td>
                                          <td>Karnataka</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>City</b></td>
                                          <td>text here</td>
                                       </tr>
                                       <tr>
                                          <td><b>Zip Code</b></td>
                                          <td>---</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Rewards points</b></td>
                                          <td>No reward points</a></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <!-- /.box-body -->
                           </div>
                           <!-- /.box -->
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </aside>
         <!-- /.right-side -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 2.0.2 -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <!-- DATA TABES SCRIPT -->
      <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
      <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
      <!-- AdminLTE App -->
      <script src="js/AdminLTE/app.js" type="text/javascript"></script>
      <script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
      <!-- page script -->
      <script type="text/javascript">
         $(function() {
             $("#example1").dataTable();
             $('#example2').dataTable({
                 "bPaginate": true,
                 "bLengthChange": false,
                 "bFilter": false,
                 "bSort": true,
                 "bInfo": true,
                 "bAutoWidth": false
             });
         });
      </script>
      <script type="text/javascript">
         $(function() {
             // Replace the <textarea id="editor1"> with a CKEditor
             // instance, using default configuration.
             CKEDITOR.replace('editor1');
             //bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();
         });
      </script>
   </body>
</html>