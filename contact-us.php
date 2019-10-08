<?php 
$page ="Contactus";
include'includes/Header1.php'; ?>   
<style type="">
    
    #contactForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
                color: red;
	}
</style>
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contact Us</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get Contact Area =================-->
        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-6">
                        <div class="left_ex_title">
                            <h2>get in <span>touch</span></h2>
                        </div>
                         <div id="success_message"></div>  
                        <form class="contact_us_form row m0" action="insert_contact.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="number" name="number" placeholder="Phone no." required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit"  name="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="right_contact_info">
                            <div class="contact_info_title">
          
                                <h3>Contact info</h3>
                                <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
                            </div>
                            <div class="contact_info_list">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                     <?php
           $sql=      ("SELECT * FROM cms_contact");
           $res = $conn->query($sql);
            
            if($res->num_rows>0){

            while($row = mysqli_fetch_assoc($res)){
            $cnt_address = $row['cnt_address'];
            $cnt_email = $row['cnt_email'];
            $cnt_phno = $row['cnt_phno'];
            ?> 

                                    <div class="media-body">
                                        <h4>Office</h4>
                                        <p><?php echo $cnt_address; ?></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>  
                                        <a href="#"><?php echo $cnt_email; ?></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <a href="#"><?php echo $cnt_phno; ?></a>
                                       
                                    </div>
                                </div>
                         <?php   }} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get Contact Area =================-->

        
<?php include'includes/footer.php'?>
        
         <script src="js/jquery-2.2.4.js"></script>  
 <script src="js/jquery.validate.js"></script>
 <script type="text/javascript">
     
  $(document).ready(function(){
   		$.validator.setDefaults( {

	submitHandler: function () {

                                            // alert('Please wait,we are processing...');
            var formData = new FormData($('#contactForm')[0]);

         // var a = $(#login).val;
               $.ajax({
                   url: 'Insert_contact.php',
                   type: 'POST',
                   data: formData,
                //   async: false,
                   success: function (data) {
                   // alert(data);
                   // console.log(data);
                      // $( "#success_message" ).html( "<p class='alert alert-success'><strong>" + data + "</strong></p>" );  
                      // $( "#success_message" ).fadeOut(4000); 
            
            
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html("<p class='alert alert-success'><strong>" + data + "</strong></p>");  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 4000); 
                    
                    
                      
                   },
                   cache: false,
                   contentType: false,
                   processData: false
               });

               return false;
            



				

			}

		} );
   
   
   
  $("#contactForm").validate({
			rules: {
                              name: {
					required: true,
					minlength: 2
				},
                               number: {
                                   phoneUS: true
                                      },
				
				email: {
					required: true,
					email: true
				},
                                message:{
                                        required: true,
					minlength: 5
                                }
			},
			messages: {
				name: {
					required: "Please enter a name",
					minlength: "Your name must consist of at least 2 characters"
				},
				email: "Please enter a valid email address",
                               
                                message: {
					required: "Please enter a message",
					minlength: "Your message must consist of at least 5 characters"
				},
				
			}
		});
   });
   jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 && 
    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a 10 digit valid phone number,Ex:99XXXXXXXX");
  </script>

.