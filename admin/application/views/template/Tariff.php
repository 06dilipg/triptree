
        <style>
            #locationForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
          color:red;
	}
        
        </style>
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
               Tariff Plan Price
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                  <li class="active">Tariff Plan Price</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                           <table>
   
</table>
                   
                              <h3 class="box-title pull-left"><i class="fa fa-user"></i> Tariff Plan Price</h3>
                           </div>
                           <div class="col-md-6">
                              <h3 class="box-title pull-right" style="margin-right:15px"><a href="#" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus white" aria-hidden="true"></i></a></h3>
                           </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive" id="table_data">
                           <!-- <table id="example1" class="table table-bordered table-striped table_data"> -->
                              <!-- <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Location Title</th>
                                    <th>Property Type</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead> -->
                              <!-- <div id="table_data">
                              </div> -->
                              <!-- <tbody id="table_data">
                            
                                   
                              </tbody> -->
                           <!-- </table> -->
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
               <div class="modal-header blue_bg">
                  <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Add Tariff Plan Price</h4>
               </div>
               <form id="locationForm" method="post" action="<?php echo base_url(); ?>Admin/put_tarif">
                  <div class="modal-body">
                      <div class="col-md-12">
                           <div class="col-md-3">
                                    <div class="form-group">

                                            <label>Property Name:</label>
                                                <select class="form-control" id="PropertyName" name="PropertyName" required="required">
                                                    
                                                </select>
                                    </div>
                           </div>
                           <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Property Type:</label>
                                            <input type="text"  class="form-control" name="PropertyType" value=""/>
                                        </div>
                           </div>
                           <div class="col-md-3">
                                      <div class="form-group">
                                        <label>Tariff Plan(Rs:):</label>
                                         <input type="text"   class="form-control" name="Tariff1" value=""/>
                                    </div>
                           </div>
                           <div class="col-md-3">
                                      <div class="form-group">
                                        <label>Enter the day:</label>
                                        <input type="text"   class="form-control" name="dayplan" value="" placeholder="Ex:Day/Night"/>
                                    </div>
                           </div>
                           
                      
                      </div>
                    
                  
               </div>
               <div class="modal-footer clearfix">
               <button type="submit" id="submit" class="btn btn-primary">Create Now</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
               </div>
               </form>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!--add modal end-->
      <!-- jQuery 2.0.2 -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- DATA TABES SCRIPT -->
      <script src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
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
      fetch_data();
      function fetch_data()  
      {  
           
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/get_Property1",
                method:"POST",
                success:function(data){
                    $('#PropertyName').html(data);
                }
            });
      } 

      });
</script>
<script type="text/javascript">
   $(function() {
      fetch_data();
      function fetch_data()  
      {  
           
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/get_tariff",
                method:"POST",
                success:function(data){
                    $('#table_data').html(data);
                }
            });
      } 



         $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Admin/delete_tariff",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data)  
                     {  
                          alert(data);  
                          window.location.reload();  
                     }  
                });  
           }  
           else  
           {  
                return false;       
           }  
      });  


      });
</script>

    
