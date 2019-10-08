<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><i class="fa fa-dashboard"></i> Edit Tariff </li>
                 
               </ol>
               <h1>
                  <b>Edit Tariff</b>
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
                                 <h3 class="box-title"><b><i class="fa fa-edit"></i> Edit Tariff</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Tariff">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                               <?php $id = $_GET['id'];  ?>
                              <!-- /.box-header -->
                              <div class="box-body clearfix">
                                 <form id="edit_Content" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/update_Tariff?id=<?php echo $id;?>" method="Post">
                                  
                                   <input type="hidden" name="upadte_id" id="upadte_id" value="<?php echo $id;?>">
                                    <!--  <div class="col-md-4">
                                          <div class="form-group ">
                                               <label>Property Name:</label>
                                                <select class="form-control" id="PropertyName" name="PropertyName" required="required">
                                                    
                                                </select>          
                                           </div>
                                     </div> -->
                                      <div class="col-md-6">
                                          <div class="form-group">
                                               <label>Property Type:</label>
                                               <input type="text"  class="form-control" name="protype" id="protype"  required="required">   
                                           </div>
                                      </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                                <label>Tariff Price(Rs):</label>
                                                <input type="text"  class="form-control" name="proprice" id="proprice"  required="required">    
                                           </div>
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
              
                url:"<?php echo base_url(); ?>Admin/get_Property1",
                method:"POST",
                success:function(data){
                    $('#PropertyName').html(data);
                }
            });
      } 


        fetch_data1();
            function fetch_data1()  
            {  
               
            
                  $.ajax({
                    
                              url:"<?php echo base_url(); ?>Admin/fetch_tariff?id=<?php echo $id;?>",
                              method:"POST",
                              dataType:"json",
                           
                                  success:function(data){
                                            //$('#location_title').val(data.location_title);
                                            $('#PropertyName').val('Property1');
                                            $('#protype').val(data.type_pro);
                                            $("#proprice").val(data.plan_price);
                                           
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