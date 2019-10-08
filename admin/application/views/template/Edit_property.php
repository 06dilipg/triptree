<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit Property </li>
                 
               </ol>
               <h1>
                  <b>Edit Property</b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit Property</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Property_details">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_Property?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">
                                    <div class="form-group col-md-12">
                                       <label>About Property:</label>
                                       <textarea id="editor1" name="editor1" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Property Includes:</label>
                                       <textarea id="editor2" name="editor2" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Cuisine/ Oota:</label>
                                       <textarea id="editor3" name="editor3" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Activites:</label>
                                       <textarea id="editor4" name="editor4" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Getting there:</label>
                                       <textarea id="editor5" name="editor5" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Distance:</label>
                                       <textarea id="editor6" name="editor6" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Around Property:</label>
                                       <textarea id="editor7" name="editor7" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label>Terms And Conditions:</label>
                                       <textarea id="editor8" name="editor8" rows="10" cols="80" placeholder="content goes here">
                                       </textarea>                        
                                    </div>
                                      <div class="form-group" id="checkbox">
                     
                      
                     </div><br><br>
                                    <div class="form-group col-md-12">
                                       <label>Image:</label>
                                       <input type="file" name="userid" class="form-control" placeholder="Name">
                                       <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
                                    </div>
                                   
                                    <div class="pull-right">
                                    <button type="submit" class="btn bg-navy margin" id="Update">Update</button>
                                    <button type="reset" class="btn btn-danger margin">Cancel</button>
      </div>
                                 </form>
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
  
      <script type="text/javascript">
         $(function() {
             // Replace the <textarea id="editor1"> with a CKEditor
             // instance, using default configuration.
             CKEDITOR.replace('editor1');
              CKEDITOR.replace('editor2');
               CKEDITOR.replace('editor3');
                CKEDITOR.replace('editor4');
                 CKEDITOR.replace('editor5');
                  CKEDITOR.replace('editor6');
                   CKEDITOR.replace('editor7');
                    CKEDITOR.replace('editor8');

             //bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();
               


              

               fetch_data();
            function fetch_data()  
            {  
               
            
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/fetch_property?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){
                                            $('#editor1').val(data.Aboutpro);
                                            $('#editor2').val(data.Pro_includes);  
                                           $('#editor3').val(data.Pro_cuisine);
                                            $('#editor4').val(data.Pro_activites);  
                                           $('#editor5').val(data.Pro_getting);
                                            $('#editor6').val(data.Pro_distance);  
                                           $('#editor7').val(data.Pro_around); 
                                            $('#editor8').val(data.Pro_terms);  
                                            console.log(data.Pro_service);
                                            $("input[name='service']:checked").val(data.Pro_service);

                                            $("#locationthemes").prop("checked")






                            
                                  }
                         });
             } 

          




         });
      </script>
      <script type="text/javascript">
            fetch_data1();
      function fetch_data1()  
      {  
           
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/retrivedata?id=<?php echo $id;?>",
                method:"POST",
                success:function(data){
                    $('#checkbox').html(data);
                }
            });
      } 


      </script>