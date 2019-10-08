        <!-- Right side column. Contains the navbar and content of the page -->
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Sliders
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                  <li class="active">Sliders</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa  fa-picture-o"></i>Sliders Details</h3>
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Add Slider Details</h4>
               </div>
           <form id="locationForm" method="post" action="<?php echo base_url(); ?>Admin/sliders_add" enctype="multipart/form-data">
                  <div class="modal-body">
                      <div class="col-md-12">
                           <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Slider Name*:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                     </div>
                           </div>
                           <div class="col-md-12">
                                 <div class="form-group">
                                              <label>Slider Description:</label>
                                              <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea> 
                                                         
                                  </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group">
                               <label>Choose Images *</label>
                                 <!--   <input type="file" name="userfile[]" multiple/> -->
                                <input name="userfile[]" id="userfile" type="file" multiple=""  required="required" />
                                <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
                              </div>
                           </div>
                      
                      </div>
                    
                  
               </div>
               <div class="modal-footer clearfix">
               <button type="submit" id="submit"  name="submit="  class="btn btn-primary">Create Now</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
               </div>
               </form>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!--add modal end-->

      <!--edit modal-->
      <div class="modal fade" id="edit-modal"  role="dialog">
         <div class="modal-dialog modal-lg" >
            <div class="modal-content ">
               <div class="modal-header blue_bg">
                  <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i> Sliders</h4>
               </div>
               <form action="#" method="post">
                  <div class="modal-body">
                     <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="userid" class="form-control" value="dfsdf">
                     </div>
                     <div class="form-group">
                        <label>Description:</label>
                        <div class='box-body'>
               <form>
               <textarea id="editor2" name="editor1" rows="10" cols="80">
               This is my textarea to be replaced.
               </textarea>                        
               </form>
               </div>
               </div>
               <div class="form-group">
               <label>Image:</label>
               <input type="file" name="userid" class="form-control" placeholder="Name">
               <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
               </div>
               </div>
               <div class="modal-footer clearfix">
                  <button type="submit" class="btn btn bg-navy  "><i class="fa fa-folder"></i> Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
               </div>
               </form>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!--edit modal end-->

           <script type="text/javascript">
         $(function() {
             CKEDITOR.replace('editor1');
            
            
            // bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();

      fetch_data();
      function fetch_data()  
      {  
           
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/get_slider",
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
                     url:"<?php echo base_url(); ?>Admin/delete_slider",  
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
