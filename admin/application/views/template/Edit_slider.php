<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit Slider </li>
                 
               </ol>
               <h1>
                  <b>Edit Slider</b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit Slider</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Slider">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_slider?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">
                                    <div class="form-group col-md-12">
                                       <label>Slider Title:</label>
                                         <input type="text"  class="form-control" name="title" id="title" value="" required="required">                     
                                    </div>
                                    <div class="form-group col-md-12">
                                           <label>Slider Decription:</label>
                                         
                                        <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea> 
                      
                                    </div>
                                      <div class="form-group col-md-12">
                                           <label>Slider Decription:</label>
                                           <input class="agile-ltext" type="file" name="userfile[]" id="images" placeholder="Select Image" class="form-control">
                  <span id="Slider_image" style="color: red;"></span>
               
             
                                       
                      
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

           CKEDITOR.replace('editor1');
           
            
            // bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();

          
               fetch_data();
            function fetch_data()  
            {  
               
            
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/fetch_slider?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){
                                            $('#title').val(data.titlle);
                                            $("#editor1").val(data.description);
                                             $("#Slider_image").val(data.img);
                                             console.log(data.img);
                                           
                                  }
                         });
             } 

          




         });
      </script>
      <script type="text/javascript">
          $('#Update1').click(function(){ 
      
               $.ajax({  

                        url:"<?php echo base_url(); ?>Admin/update_Property?id=<?php echo $id;?>",  
                        method:"POST",  
                        data:$('#edit_Content').serialize(),  
                        success:function(data)  
                        {  
                           console.log(data);
                           //alert(data);
                            if(alert(data)){}
                           else    window.location.reload(); 
                            // alert(data);  
                           $('#edit_Content')[0].reset();  
                
                        }
                                                      
                      });  
               });

      </script>