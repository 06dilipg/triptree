
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
               Home Stay
               </h1>
               <ol class="breadcrumb">
                  <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active"> Home Stay</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa fa-list" style="font-size:17px;"></i>  Home Stay list</h3>
                           </div>
                           <div class="col-md-6">
                              <h3 class="box-title pull-right" style="margin-right:15px"><a href="#" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus white" aria-hidden="true"></i></a></h3>
                           </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive" id="table_data1">
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
                  <h4 class="modal-title white"><i class="fa fa-pencil-square-o"></i>Owner Property Details</h4>
               </div>
               <?php $place = "HomeStay";?>
               <form method="post" action="<?php echo base_url(); ?>Admin/put_ownerDetails/?place=<?php echo $place; ?>">
                  <div class="modal-body">
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
                                <input type="text" name="PropertyName" class="form-control" placeholder="Property Name" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Owner Name:</label>
                                <input type="text" name="OwnerName" class="form-control" placeholder="Owner Name" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="Email" class="form-control" placeholder="Enter email" required="required">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile No:</label>
                                <input type="phno" name="mobno" class="form-control" placeholder="Mobile number">
                            </div>
                     </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label>Tel No:</label>
                                <input type="text" name="Telno" class="form-control" placeholder="Telphone number">
                            </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Description:</label>
                        <!-- <textarea id="editor1" name="editor1" rows="10" cols="80">
               
                        </textarea>   -->
                        <textarea  name="editor1" rows="7" cols="80">
               
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
                 
              
               <!-- <div class="form-group">
               <label>Image:</label>
               <input type="file" name="userid" class="form-control" placeholder="Name">
               <small>Accepted formats: jpg, png, gif. Max file size 512kb Width:730px,Height: 505px</small>
               </div> -->
               </div>
               <div class="modal-footer clearfix">
                  <button type="submit" class="btn btn bg-navy  "><i class="fa fa-folder"></i> Save</button>
                  <button type="reset" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
               </div>
               </form>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!--add modal end-->
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
     
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    
     <!--  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script> -->
      
     
     
    
    
      
    
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
             //instance, using default configuration.
             CKEDITOR.replace('editor1');
             CKEDITOR.replace('editor2');
             CKEDITOR.replace('editor3');
           //  bootstrap WYSIHTML5 - text editor
             $(".textarea").wysihtml5();
         });
    </script>
    <script type="text/javascript">
         $(function() {
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

            });
</script>
      <script type="text/javascript">
   $(function() {
      fetch_data();
      function fetch_data()  
      {  
         //   alert(1);
            $.ajax({
              
                // url:"<?php echo base_url(); ?>Admin/get_OwnerDetails?protype=<?php echo $place;?>",
                 url:"<?php echo base_url(); ?>Admin/showOwner?protype=<?php echo $place;?>",
                method:"POST",
                success:function(data){
                    $('#table_data1').html(data);
                }
            });
      } 




         $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Admin/delete_owner",  
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
 