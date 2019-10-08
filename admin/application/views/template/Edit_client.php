<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit  Client  </li>
                 
               </ol>
               <h1>
                  <b>Edit  Client </b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit  Client </b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Cms_about">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_client?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">
                                     

                           <div class="form-group">
                              <label>Client Name:</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Title" required="required" />
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
                      <input type="text" name="desgn" id="desgn" class="form-control" placeholder="designation">
              
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
              //bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();

               fetch_data();
            function fetch_data()  
            {  
               
            //alert(1);
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/client_fecthing?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){

                                            $('#name').val(data.client_name);
                                            $("#editor1").val(data.client_descrp); 
                                            $("#desgn").val(data.client_desg);
                                           // $("#editor1").val(data.abt_descp);
                                           // $("#list").val(data.abt_list);

                                          //  console.log(data.query);
                                           
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

      </script>About