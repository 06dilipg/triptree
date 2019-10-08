
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
               Top Featured Happy Farms
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                  <li class="active">Top Featured Happy Farms</li>
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
                   
                              <h3 class="box-title pull-left"><i class="fa fa-user"></i> Top Featured Happy Farms</h3>
                           </div>
                           <div class="col-md-6">
                              <h3 class="box-title pull-right" style="margin-right:15px"><a href="#" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus white" aria-hidden="true"></i></a></h3>
                           </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive" id="table_data">
                       
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Add Top Featured For Happy Farms</h4>
               </div>
               <form id="locationForm" method="post" action="<?php echo base_url(); ?>Admin/add_topFeature">
                  <div class="modal-body">
                      <div class="col-md-12">

                           <div class="col-md-6">
                                    <div class="form-group">
                                       <input type="hidden" name="property_type" id="property_type" value="HappyFarms">
                                        <label>Slect Property:</label>
                                          <select class="form-control" id="titleSelect" name="titleSelect" required="required"> 
                              

                                   </select>

                                    </div>
                           </div>
                           <div class="col-md-6">
                                            
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
              
                url:"<?php echo base_url(); ?>Admin/get_topFeature/HappyFarms",
                method:"POST",
                success:function(data){
                    $('#table_data').html(data);
                }
            });
      } 


         $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id"); 
           console.log(user_id); 
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Admin/delete_topFeature",  
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
             fetch_Tiltle();
            function fetch_Tiltle()  
            {  
               // alert('s');
                  $.ajax({
                  
                     url:"<?php echo base_url(); ?>Admin/get_place/HappyFarms",
                     method:"POST",
                     success:function(data){
                        $('#titleSelect').html(data);
                     }
                  });
            } 




      });
</script>



    
