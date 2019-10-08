<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit Location </li>
                 
               </ol>
               <h1>
                  <b>Edit Location</b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit Location</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Location">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_Location?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">
                                    <div class="form-group col-md-6 col-sm-6">
                                       <label>Title:</label>
                                         <input type="text"  class="form-control" name="location_title" id="location_title" value="" required="required">                     
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                       <label>Property Type:</label>
                                     

                                       <select class="form-control"  id="protype" name="PropertyType">
                                                <option value="null">Select A Property</option>
                                                <option value="HomeStay">Home Stay</option>
                                                <option value="Resort">Resort</option>
                                                <option value="HappyFarms">Happy Farms</option>
                                        </select>
                  
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
          
               fetch_data();
            function fetch_data()  
            {  
               
            
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/fetch_location?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){
                                            $('#location_title').val(data.location_title);
                                            $("#protype").val(data.property_type);
                                           
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