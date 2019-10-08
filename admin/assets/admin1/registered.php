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
               <h1>
               Registered Users
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Registered Users</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa fa-list" style="font-size:17px;"></i> All Registered Users</h3>
                           </div>
                          
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Order Number</th>
                                    <th>Reg Id</th>
                                  <th>Name</th>
                                    <th>Email Id</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    
                                    <td>Product Name</td>
                                    <td>Text here </td>
                                    <td>abc@gmail.com</td>
                                    <td>+91 999999999</td>
                                    <td><button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="" data-original-title="Reload"><i class="fa  fa-check"></i></button>
                                    <button class="btn btn-success btn-sm refresh-btn" data-toggle="tooltip" title="" data-original-title="Reload"><i class="fa   fa-times"></i></button>
                                </td>
                                <td class="box-tools">
                                       <a href="registered_detail.php" class="btn btn-app btn-sm"><i class="fa fa-eye"></i></a>
                                       <a href="#"  class="btn btn-app btn-sm" >  <i class="fa fa-times"></i></a>
                                    </td>
                              </tbody>
                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </aside>
         <!-- /.right-side -->
      </div>
      <!-- ./wrapper -->
      <!--add modal-->
      <div class="modal fade" id="add-modal"  role="dialog">
            <div class="modal-dialog modal-lg" >
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-pencil-square-o"></i> About Us</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label>Title:</label>
                                        <input type="text" name="userid" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                            <label>Description:</label>
                                                  
                                                    <div class='box-body'>
                                                        <form>
                                                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                                This is my textarea to be replaced.
                                                            </textarea>                        
                                                        </form>
                                                    </div>
                                               
                                            </div>
                                         

                        </div>
                        <div class="modal-footer clearfix">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

                            <button type="submit" class="btn btn-success pull-left"><i class="fa fa-folder"></i> Save</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
<!--add modal end-->
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