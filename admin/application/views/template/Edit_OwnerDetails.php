<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit Owner Details </li>
                 
               </ol>
               <h1>
                  <b>Edit Owner Details</b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit Owner Details</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Homestay">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_Homestay?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">

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
                                <input type="text" name="PropertyName" class="form-control" id="PropertyName" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Owner Name:</label>
                                <input type="text" name="OwnerName" class="form-control" id="OwnerName" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="Email" class="form-control" id="Email" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile No:</label>
                                <input type="phno" name="mobno" class="form-control" id="mobno">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Tel No:</label>
                                <input type="text" name="Telno" class="form-control" id="Telno">
                            </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Description:</label>
                        <!-- <textarea id="editor1" name="editor1" rows="10" cols="80">
               
                        </textarea>   -->
                        <textarea  name="editor1" id="editor1" rows="7" cols="80">
               
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
               
             //bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();
               

           fetch_Tiltle();
            function fetch_Tiltle()  
            {  
               // alert('s');
                  $.ajax({
                  
                     url:"<?php echo base_url(); ?>Admin/get_place/HomeStay",
                     method:"POST",
                     success:function(data){
                        $('#titleSelect').html(data);
                     }
                  });
            } 
              

               fetch_data();
            function fetch_data()  
            {  
               
            
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/fetch_owner?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){
                                             $('#titleSelect').val(data.location_title);
                                             $('#PropertyName').val(data.prop_name);


                                            $('#OwnerName').val(data.own_name);
                                            $('#Email').val(data.own_email);  
                                           $('#mobno').val(data.own_mbno);
                                            $('#Telno').val(data.own_telno);  
                                           $('#editor1').val(data.own_descp);
                                            $('#editor2').val(data.own_addr);  
                                           $('#editor3').val(data.own_road); 

                                            console.log(data.location_title);
                            
                                  }
                         });
             } 

          




         });
      </script>
   