  
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
               Property Details
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Property Details</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa fa-list" style="font-size:17px;"></i>Property Details</h3>
                           </div>
                           <div class="col-md-6">
                              <h3 class="box-title pull-right" style="margin-right:15px"><a href="#" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus white" aria-hidden="true"></i></a></h3>
                           </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive" id="table_data">
                           <!-- <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Slno</th>
                                    <th>Property Name</th>
                                    <th>Owner Name</th>
                                    <th>Mobile No</th>
                                    <th>Tel No</th>
                                    <th>Email Id</th>
                                    <th>Property Type</th>
                                   
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>	ABC</td>
                                    <td>test1@gmail.com</td>
                                    <td>ISP100713</td>
                                    <td>+91 999999999</td>
                                    <td>18-06-2019 12:31 PM</td>
                                    <td class="box-tools">
                                       <a href="#change_status" data-toggle="modal" class="btn btn-app btn-sm"><i class="fa fa-refresh"></i></a>
                                   
                                    </td>
                                    <td class="box-tools">
                         
                                       <a href="#view_user" data-toggle="modal" class="btn btn-app btn-sm">  <i class="fa fa-eye"></i></a>
                                    </td>
      </tr>
                              </tbody>
                           </table> -->
             
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Add Property Details</h4>
               </div>
               <form action="<?php echo base_url(); ?>Admin/put_property" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                     <div class="form-group">
                     <label>Property Name:</label>
                                <select class="form-control" id="titleSelect" name="titleSelect" required="required"> 
                           

                                </select>
                     </div>
                     <div class="form-group" id="OwnerID1">
                     
                     </div>
                     <!-- <div class="form-group" id="proertyname">
                       
                     
                     </div> -->
                     <div class="form-group">
                            <label>About Property:</label>
                              <div class='box-body'>
                                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Property Includes:</label>
                              <div class='box-body'>
                                    <textarea id="editor2" name="editor2" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Cuisine/ Oota:</label>
                              <div class='box-body'>
                                    <textarea id="editor3" name="editor3" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>

                     <div class="form-group">
                            <label>Activites:</label>
                              <div class='box-body'>
                                    <textarea id="editor4" name="editor4" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Getting there:</label>
                              <div class='box-body'>
                                    <textarea id="editor5" name="editor5" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Distance:</label>
                              <div class='box-body'>
                                    <textarea id="editor6" name="editor6" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Around Property:</label>
                              <div class='box-body'>
                                    <textarea id="editor7" name="editor7" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Terms And Conditions:</label>
                              <div class='box-body'>
                                    <textarea id="editor8" name="editor8" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>

                <div class="form-group">
                       <label>Room Services:</label><br>
                            <div class='box-body'>
                              <div class="col-md-12 col-sm-12">
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Breakfast Included"> Breakfast Included
                                </label>
                                <label class = "checkbox-inline">
                                <input type="checkbox"  name="service[]" value="Free wifi"> Free wifi
                                 </label>
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Double Bed"> Double Bed
                                </label>    
                                 
                                <label class = "checkbox-inline">
                                <input type="checkbox" name="service[]" value="120sqmt"> 120sqmt
                                 </label>
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="8 persons"> 8 persons
                                </label>                     
                                  <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Free internet"> Free internet
                                </label>
                              </div><br><br>
                              <div class="col-md-12 col-sm-12">
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Private balcony"> Private balcony
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="service[]" value="Good room service"> Good room service
                                 </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Flat screen tv"> Flat screen tv
                                </label>    
                                  <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Fully AC"> Fully AC
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="service[]" value="Mountain view"> Mountain view
                                 </label><br><br>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Free pick & drop facilies"> Free pick & drop facilies
                                </label>                     
                                  
                              </div>
                                
                          

                                                                   
                           </div>
                     </div><br><br>
                
               <div class="form-group">
               <label>Image:</label>
<!--               <input type="file" name="file" class="form-control" placeholder="Name" multiple/>-->
               <input name="userfile[]" id="userfile" type="file" multiple=""  required="required" />
               <!-- <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small> -->
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





           <!-- update modal -->
            <!--add modal-->
   <div class="modal fade" id="updatemodal"  role="dialog">
         <div class="modal-dialog modal-lg" >
            <div class="modal-content ">
               <div class="modal-header blue_bg">
                  <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Add Property Details</h4>
               </div>
               <form action="<?php echo base_url(); ?>Admin/put_property" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                     <div class="form-group">
                     <label>Property Name:</label>
                                <select class="form-control" id="titleSelect" name="titleSelect" required="required"> 
                           

                                </select>
                     </div>
                     <div class="form-group" id="OwnerID1">
                     
                     </div>
                     <!-- <div class="form-group" id="proertyname">
                       
                     
                     </div> -->
                     <div class="form-group">
                            <label>About Property:</label>
                              <div class='box-body'>
                                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Property Includes:</label>
                              <div class='box-body'>
                                    <textarea id="editor2" name="editor2" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Cuisine/ Oota:</label>
                              <div class='box-body'>
                                    <textarea id="editor3" name="editor3" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Room Services:</label>
                              <div class='box-body'>
                                   <label class="checkbox-inline">
      <input type="checkbox" value="">Option 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Option 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Option 3
    </label>                     
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Activites:</label>
                              <div class='box-body'>
                                    <textarea id="editor4" name="editor4" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Getting there:</label>
                              <div class='box-body'>
                                    <textarea id="editor5" name="editor5" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Distance:</label>
                              <div class='box-body'>
                                    <textarea id="editor6" name="editor6" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Around Property:</label>
                              <div class='box-body'>
                                    <textarea id="editor7" name="editor7" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                     <div class="form-group">
                            <label>Terms And Conditions:</label>
                              <div class='box-body'>
                                    <textarea id="editor8" name="editor8" rows="10" cols="80">
                                    
                                    </textarea>                        
                             </div>
                     </div>
                
               <div class="form-group">
               <label>Image:</label>
               <input type="file" name="file" class="form-control" placeholder="Name">
               <span id="user_uploaded_image"></span>
               
               <!-- <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small> -->
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
         
      
 <!--view modal-->
 <div class="modal fade" id="view_user"  role="dialog">
            <div class="modal-dialog modal-sm" >
                <div class="modal-content ">
                    <div class="modal-header blue_bg" style="border-bottom:none !important;">
                        <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title white" ><i class="fa fa-pencil-square-o"></i> View user order information</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                        <div class="box-body table-responsive no-padding">
                                 <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                          <td><b>Name</b></td>
                                          <td>Sushma</td>
                                       </tr>
                                       <tr>
                                          <td><b>Email</b></td>
                                          <td>info@hp.com</td>
                                       </tr>
                                       <tr>
                                          <td><b>Order Id</b></td>
                                          <td>2333</td>
                                       </tr>
                                       <tr>
                                          <td><b>Phone</b></td>
                                          <td>9999999999</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Shipping Address</b></td>
                                          <td>	Bangalore</td>
                                       </tr>
                                       <tr>
                                          <td><b>City</b></td>
                                          <td>9</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Postcode</b></td>
                                          <td>6778</td>
                                       </tr>
                                       <tr>
                                          <td><b>Total no products</b></td>
                                          <td>1</td>
                                       </tr>
                                       <tr>
                                          <td style="vertical-align:middle"><b>Payment type</b></td>
                                          <td>Free</td>
                                       </tr>
                                    </tbody>
                                 </table>


                                 <h3> Ordered Product list</h3>
              <div id="product_tbl"><table class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>S.NO</th>
    <th>ITEM DESCRIPTION</th>                   
    <th>COLOR</th>                   
    <th>QTY</th>     
    <th>RATE(Rs)</th>     
    <th>AMOUNT(Rs)</th>
  </tr>                    
  </thead>
  <tbody>
        <tr>
      <td> 1 </td>
      <td> Testing </td>
      <td> No Color </td>
      <td> 0 </td> 
      <td> 0 </td>                             
      <td> 0 </td>
    </tr>
      <tr><td colspan="5">Delivery charge : </td><td>Rs.</td></tr>
    <tr><td colspan="5">Grand total </td><td>Rs.0</td></tr>
    </tbody>
</table>




                              </div>
                        </div>
                       
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->


        </div>
        
<!--view modal end-->
      <!-- jQuery 2.0.2 -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- DATA TABES SCRIPT -->
      <script src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
      
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
             CKEDITOR.replace('editor2');
             CKEDITOR.replace('editor3');
             CKEDITOR.replace('editor4');
             CKEDITOR.replace('editor5');
             CKEDITOR.replace('editor6');
             CKEDITOR.replace('editor7');
             CKEDITOR.replace('editor8');
            
            // bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();
         });
    </script>
    <script type="text/javascript">
         $(function() {
            fetch_Property();
            function fetch_Property()  
            {  
               // alert('s');
                  $.ajax({
                  
                     url:"<?php echo base_url(); ?>Admin/get_Property1",
                     method:"POST",
                     success:function(data){
                        $('#titleSelect').html(data);
                     }
                  });
            } 

            });
</script>
    <!-- <script type="text/javascript">
         $(function() {
            fetch_Property();
            function fetch_Property()  
            {  
               // alert('s');
                  $.ajax({
                  
                     url:"<?php echo base_url(); ?>Admin/get_Property11",
                     method:"POST",
                     success:function(data){
                        $('#OwnerID').html(data);
                     }
                  });
            } 

            });
</script> -->


      <script type="text/javascript">
   $(function() {
      //$('#view_user').modal('show');  
      fetch_data();
      function fetch_data()  
      {  
         //   alert(1);
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/get_PropertyDetails",
                method:"POST",
                success:function(data){
                    $('#table_data').html(data);
                }
            });
      } 


      $(document).on('click', '.update', function(){  

var id = $(this).attr("id");  
// alert(id);
$.ajax({  
     url:"<?php echo base_url(); ?>Admin/fetch_property",  
     method:"POST",  
     data:{id:id},  
     dataType:"json",  
     success:function(data)  
     
     {  

     
						
         $('#editModal').modal('show');  
         // data-toggle="modal" data-target="#updatemodal"
        //  $('#chapContent').val(data.chapter_content);  
          $('#editor1').val(data.Aboutpro);
           $('#editor2').val(data.Pro_includes);  
          $('#editor3').val(data.Pro_cuisine);
           $('#editor4').val(data.Pro_activites);  
          $('#editor5').val(data.Pro_getting);
           $('#editor6').val(data.Pro_distance);  
          $('#editor7').val(data.Pro_around); 
           $('#editor8').val(data.Pro_terms);  
        

       

         
        
     }  
})  
});


         $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Admin/delete_property",  
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
 