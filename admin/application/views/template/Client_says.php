         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Client Says
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Client Says</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left white"><i class="fa fa-user white" aria-hidden="true"></i> Client Says</h3>
                           </div>
                           <div class="col-md-6">
                              <h3 class="box-title pull-right white" style="margin-right:15px"><a href="#" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus white" aria-hidden="true"></i></a></h3>
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i> Home Page</h4>
               </div>
               <form id="addHome" method="POST" action="<?php echo base_url(); ?>Admin/add_client1" enctype="multipart/form-data">
                  <div class="modal-body">
                       
                           <div class="form-group">
                              <label>Client Name:</label>
                              <input type="text" name="name" class="form-control" placeholder="Enter Title" required="required" />
                           </div>
                       
                     
                             <div class="form-group">
                               <label>Image:</label>
                        <input type="file" name="file" class="form-control" placeholder="Name">
                        <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
                             </div>
                     
                    
                     <div class="form-group">
                        <label>Description:</label>
                              <div class='box-body'>
                                  <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea> 
                                </div>
                    </div>                            
                     <div class="form-group">
                          <label>Designation:</label>
                      <input type="text" name="desgn" class="form-control" placeholder="designation">
              
                     </div>
         
               </div>
               <div class="modal-footer clearfix">
                  <button type="submit" name="submit" id="submit"  class="btn btn bg-navy  "><i class="fa fa-folder"></i> Save</button>
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

             fetch_data();
            function fetch_data()  
            {  
                
                  $.ajax({
                    
                      url:"<?php echo base_url(); ?>Admin/get_client",
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
                     url:"<?php echo base_url(); ?>Admin/delete_client",  
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
