
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
               Happy Farms
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Happy Farms</li>
                    <?php $place = "HappyFarms";?>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa fa-list" style="font-size:17px;"></i>Happy Farms list</h3>
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Happy Farms Owner Property Details</h4>
               </div>
               <form method="post" action="<?php echo base_url(); ?>Admin/put_ownerDetails">
                  <div class="modal-body">
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Location:</label>
                                <select class="form-control" id="titleSelect" name="titleSelect" required="required"> 
                              

                                </select>
                                
          
                                 
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Property Name:</label>
                                <input type="text" name="PropertyName" class="form-control" placeholder="Property Name" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Owner Name:</label>
                                <input type="text" name="OwnerName" class="form-control" placeholder="Owner Name" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="Email" class="form-control" placeholder="Enter email" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile No:</label>
                                <input type="phno" name="mobno" class="form-control" placeholder="Mobile number">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Tel No:</label>
                                <input type="text" name="Telno" class="form-control" placeholder="Telphone number">
                            </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Description:</label>
                        <!-- <textarea id="editor1" name="editor1" rows="10" cols="80">
               
                        </textarea>   -->
                        <textarea  name="editor1" rows="7" cols="80">
               
                        </textarea> 
                     </div>   
                     <div class="form-group">
                        <label>Address:</label>
                        <textarea id="editor2" name="editor2" rows="7" cols="80">
               
                        </textarea>  
                     </div>
                     <div class="form-group">
                        <label>Road Direction:</label>
                        <textarea id="editor3" name="editor3" rows="7" cols="80">
               
                        </textarea>  
                     </div>
                 
              
               <!-- <div class="form-group">
               <label>Image:</label>
               <input type="file" name="userid" class="form-control" placeholder="Name">
               <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
               </div> -->
               </div>
               <div class="modal-footer clearfix">
                  <button type="submit" class="btn btn bg-navy  "><i class="fa fa-folder"></i> Save</button>
                  <button type="reset" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
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
            // Replace the <textarea id="editor1"> with a CKEditor
             //instance, using default configuration.
             CKEDITOR.replace('editor1');
             CKEDITOR.replace('editor2');
             CKEDITOR.replace('editor3');
           //  bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();
         });
    </script>
    <script type="text/javascript">
         $(function() {
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
      <script type="text/javascript">
   $(function() {
      fetch_data();
      function fetch_data()  
      {  
         //   alert(1);
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/showOwner?protype=<?php echo $place;?>",
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
                     url:"<?php echo base_url(); ?>Admin/delete_owner",  
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
 