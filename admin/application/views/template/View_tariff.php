<?php $id = $_GET['id'];?>
    
    <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>Index"><i class="fa fa-dashboard"></i> Home</a></li> 
                  <li><i class="fa fa-dashboard"></i> Tariff Details</li>
                  <!-- <li class="active">webadmin</li> -->
               </ol>
               <h1>
               Tariff Details
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
                                 <h3 class="box-title"><b> <i class="fa fa-envelope" style="font-size:17px;"></i> Tariff Details</b></h3>
                                 <div class="box-tools pull-right">
                                    <a href="<?php echo base_url();?>Tariff">  <button class="btn bg-navy btn-social" style="margin-top:5px;"><span><i class="fa fa-step-backward" aria-hidden="true"></i>  Back</span></button></a>
                                 </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body table-responsive no-padding">
                                 <table class="table table-hover">
                                
                                    <tbody id="table">
                                   
                                       
                                    </tbody>
                                 </table>
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
 <script type="text/javascript">
        $(function() {
            fetch_data();
            function fetch_data()  
            {  
               
                    $.ajax({
                        
                    
                        url:"<?php echo base_url(); ?>Admin/view_tariff?id=<?php echo $id;?>",
                        method:"POST",
                        success:function(data){
                            $('#table').html(data);
                        }
                    });
            } 

            });
</script>