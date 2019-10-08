<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit Cms Contact  </li>
                 
               </ol>
               <h1>
                  <b>Edit Cms Contact </b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit Cms Contact </b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Cms_Contact">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_cmsContact?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">
                                 <div class="col-md-12">
                           <div class="form-group">
                              <label>Address:</label>
                                <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea> 
                           </div>
                       </div>
                     <div class="col-md-12">
                             <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required="required" />
                             </div>
                     </div>
                 <div class="col-md-12">
                     <div class="form-group">
                        <label>Phone Number:</label>
                             <div class='box-body'>
                                 <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" id="phno" placeholder="Enter Phone Number" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                                </div>                      </div>    </div>                         

                                   
                                 
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
              //bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();

               fetch_data();
            function fetch_data()  
            {  
               
            
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/fetch_cmsCnt?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){
                                            $('#editor1').val(data.cnt_address);
                                            $("#email").val(data.cnt_email);
                                            $("#phno").val(data.cnt_phno);
                                           
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