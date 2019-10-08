
         <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
               Resort Enquiry Details
               </h1>
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>Index"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Resort Enquiry</li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-header">
                           <div class="col-md-6 ">
                              <h3 class="box-title pull-left"><i class="fa fa-list" style="font-size:17px;"></i>Resort Enquiry Details</h3>
                           </div>
                         <!--   <div class="col-md-6">
                              <h3 class="box-title pull-right" style="margin-right:15px"><a href="#" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus white" aria-hidden="true"></i></a></h3>
                           </div> -->
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



      <script type="text/javascript">
   $(function() {
      //$('#view_user').modal('show');  
      fetch_data();
      function fetch_data()  
      {  
         //   alert(1);
            $.ajax({
              
                url:"<?php echo base_url(); ?>Admin/get_Enquiry/Resort",
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
 