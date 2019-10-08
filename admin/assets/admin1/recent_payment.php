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
               Recent order list
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Recent order list</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa fa-list" style="font-size:17px;"></i>  Recent order list</h3>
                           </div>
                           <div class="col-md-6">
                              <h3 class="box-title pull-right" style="margin-right:15px"></h3>
                           </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Order Number</th>
                                    <th> Name</th>
                                    <th>Email Id</th>
                                    <th>Order Id</th>
                                    <th>Mobile Number</th>
                                    <th>Order Date</th>
                                    <th>Change Status</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>	ABC</td>
                                    <td>test1@gmail.com</td>
                                    <td>ISP100713</td>
                                    <td>+91 999999999</td>
                                    <td>18-06-2019 12:31 PM</td>
                                    <td class="box-tools">
                                       <a href="#change_status" data-toggle="modal" class="btn btn-app btn-sm"><i class="fa fa-refresh"></i></a>
                                   
                                    </td>
                                    <td class="box-tools">
                         
                                       <a href="#view_user" data-toggle="modal" class="btn btn-app btn-sm">  <i class="fa fa-eye"></i></a>
                                    </td>
      </tr>
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
      <div class="modal fade" id="change_status"  role="dialog">
            <div class="modal-dialog modal-sm" >
                <div class="modal-content ">
                    <div class="modal-header blue_bg">
                        <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i> Change order status</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label>Change the Order status:</label>
                                       <select class="form-control">
                                           <option value="0">Shipping</option>
                                           <option value="1">Delivered</option>
                                           <option value="2">Cancel</option>
                                       </select>

                                    </div>
                                    <div class="form-group">
                                            <label>Courier distributor:</label>
                                            <select class="form-control">
                                           <option value="0">Select distributor</option>
                                           <option value="1">Bluedart</option>
                                           <option value="2">Vaamsi</option>
                                       </select>
                                               
                                            </div>
                                            <div class="form-group">
                                                    <label>Delivery Date:</label>
                                                        <input type="file" name="userid" class="form-control" placeholder="Name">
                                                   </div>

                        </div>
                        <div class="modal-footer clearfix">
                       
                        <button type="submit" class="btn btn bg-navy  "><i class="fa fa-folder"></i> Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                           
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
<!--add modal end-->

 <!--view modal-->
 <div class="modal fade" id="view_user"  role="dialog">
            <div class="modal-dialog modal-sm" >
                <div class="modal-content ">
                    <div class="modal-header blue_bg" style="border-bottom:none !important;">
                        <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title white" ><i class="fa fa-pencil-square-o"></i> View user order information</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                        <div class="box-body table-responsive no-padding">
                                 <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                          <td><b>Name</b></td>
                                          <td>Sushma</td>
                                       </tr>
                                       <tr>
                                          <td><b>Email</b></td>
                                          <td>info@hp.com</td>
                                       </tr>
                                       <tr>
                                          <td><b>Order Id</b></td>
                                          <td>2333</td>
                                       </tr>
                                       <tr>
                                          <td><b>Phone</b></td>
                                          <td>9999999999</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Shipping Address</b></td>
                                          <td>	Bangalore</td>
                                       </tr>
                                       <tr>
                                          <td><b>City</b></td>
                                          <td>9</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Postcode</b></td>
                                          <td>6778</td>
                                       </tr>
                                       <tr>
                                          <td><b>Total no products</b></td>
                                          <td>1</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Payment type</b></td>
                                          <td>Free</td>
                                       </tr>
                                    </tbody>
                                 </table>


                                 <h3> Ordered Product list</h3>
              <div id="product_tbl"><table class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>S.NO</th>
    <th>ITEM DESCRIPTION</th>                   
    <th>COLOR</th>                   
    <th>QTY</th>     
    <th>RATE(Rs)</th>     
    <th>AMOUNT(Rs)</th>
  </tr>                    
  </thead>
  <tbody>
        <tr>
      <td> 1 </td>
      <td> Testing </td>
      <td> No Color </td>
      <td> 0 </td> 
      <td> 0 </td>                             
      <td> 0 </td>
    </tr>
      <tr><td colspan="5">Delivery charge : </td><td>Rs.</td></tr>
    <tr><td colspan="5">Grand total </td><td>Rs.0</td></tr>
    </tbody>
</table>




                              </div>
                        </div>
                       
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
<!--view modal end-->
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