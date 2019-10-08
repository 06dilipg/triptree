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
                  <li class="active">View</li>
               </ol>
               <h1>
                  View product Details
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
                                 <h3 class="box-title"><b><i class="fa fa-eye"></i> View</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="product.php">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body table-responsive no-padding">
                                 <table class="table table-hover">
                                    <tbody>
                                       <tr>
                                          <td><b>Product Name</b></td>
                                          <td>Loreum Ipsum here</td>
                                       </tr>
                                       <tr>
                                          <td><b>Description</b></td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry and typesetting industry</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Main Image</b></td>
                                          <td><a href="https://www.dummymag.com/wp-content/uploads/2019/01/DUMMY-2018-LOGO-RGB-MDM.jpg" class="lightbox"><img src="https://www.dummymag.com/wp-content/uploads/2019/01/DUMMY-2018-LOGO-RGB-MDM.jpg" height="100px"></a></td>
                                       </tr>
                                       <tr>
                                          <td><b>Image1 Description</b></td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry and typesetting industry</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Image1</b></td>
                                          <td><a href="https://www.dummymag.com/wp-content/uploads/2019/01/DUMMY-2018-LOGO-RGB-MDM.jpg" class="lightbox"><img src="https://www.dummymag.com/wp-content/uploads/2019/01/DUMMY-2018-LOGO-RGB-MDM.jpg" height="100px"></a></td>
                                       </tr>
                                       <tr>
                                          <td><b>Image2 Description</b></td>
                                          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry and typesetting industry</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Image2</b></td>
                                          <td><a href="https://www.dummymag.com/wp-content/uploads/2019/01/DUMMY-2018-LOGO-RGB-MDM.jpg" class="lightbox"><img src="https://www.dummymag.com/wp-content/uploads/2019/01/DUMMY-2018-LOGO-RGB-MDM.jpg" height="100px"></a></td>
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