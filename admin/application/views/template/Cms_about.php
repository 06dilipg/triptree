         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  CMS About Page
               </h1>
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>Index"><i class="fa fa-home"></i> Home</a></li>
                  <li class="active">CMS About Page</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa  fa-picture-o"></i> CMS About Page</h3>
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>CMS About Page</h4>
               </div>
               <form id="addHome" method="POST" action="<?php echo base_url(); ?>Admin/add_Aboutcms" enctype="multipart/form-data">
                  <div class="modal-body">
                       <div class="col-md-6">
                           <div class="form-group">
                              <label>Title Name:</label>
                              <input type="text" name="title" class="form-control" placeholder="Enter Title" required="required" />
                           </div>
                       </div>
                     <div class="col-md-6">
                             <div class="form-group">
                                <label>Sub Title Name:</label>
                                <input type="text" name="subtitle" class="form-control" placeholder="Sub Title Name" required="required" />
                             </div>
                     </div>
                    
                     <div class="form-group">
                        <label>Description:</label>
                              <div class='box-body'>
                                  <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea> 
                                </div>
                    </div>                            
                     <div class="form-group">
                         <label>Image:</label>
                         <input type="file" name="file" class="form-control" placeholder="Name">
                         <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
                     </div>

                       <div class="form-group">
                        <label>Why Choose Us?(add points):</label>
                              <div class='box-body'>
                                 <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter the list" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                                </div>
                    </div> 
              

                         <div class="col-md-12">
                               <div class="form-group">
                               <label>Choose Images *</label>
                            
                                <input name="userfile[]" id="userfile" type="file" multiple=""  required="required" />
                                <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
                              </div>
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
      <!--edit modal-->
      <div class="modal fade" id="edit-modal"  role="dialog">
         <div class="modal-dialog modal-lg" >
            <div class="modal-content ">
               <div class="modal-header blue_bg">
                  <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i> Sliders</h4>
               </div>
               <form >
                  <div class="modal-body">
                     <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="userid" class="form-control" value="dfsdf">
                     </div>
                     <div class="form-group">
                        <label>Description:</label>
                        <div class='box-body'>
               <form>
               <textarea id="editor2" name="editor2" rows="10" cols="80">
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
             // Replace the <textarea id="editor1"> with a CKEditor
             // instance, using default configuration.
             CKEDITOR.replace('editor1');
              //bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();

             fetch_data();
            function fetch_data()  
            {  
                
                  $.ajax({
                    
                      url:"<?php echo base_url(); ?>Admin/get_cmsAbout",
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
                     url:"<?php echo base_url(); ?>Admin/delete_cmsAbout",  
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

         <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter the list" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

  
