<?php 
$page ="Homestay";
include'includes/Header1.php';?>
 <script src="js/jquery-2.2.4.js"></script>  
 <script type="text/javascript">
  $(document).ready(function(){
    //alert(233);
   var adults = $("#Adults option:selected").val();
   console.log(adults);
   });
  </script>

<?php
        

       $id = $_GET['id'];
          $sql = "SELECT * FROM prop_ownerdetails WHERE `owner_id`='$id'";
           $res = $conn->query($sql);
           $row1 = mysqli_fetch_assoc($res);
           $propertyName = $row1['prop_name'];
           $locationId = $row1['location_id'];


           $sql2 = "SELECT * FROM `locations` WHERE `location_id`='$locationId'";
           $res2 = $conn->query($sql2);
           $row2 = mysqli_fetch_assoc($res2);
           $property_type = $row2['property_type'];
      

        $sql1=      ("SELECT * FROM property_details WHERE owner_id='$id'");
        $res1 = $conn->query($sql1);
        $row = mysqli_fetch_assoc($res1);
        $Aboutpro = $row['Aboutpro'];
       $Pro_includes = $row['Pro_includes'];
        $Pro_cuisine = $row['Pro_cuisine'];
        $Pro_activites = $row['Pro_activites'];
        $Pro_getting = $row['Pro_getting'];
        $Pro_distance = $row['Pro_distance'];
        $Pro_around = $row['Pro_around'];
        $Pro_terms = $row['Pro_terms'];
        
             
        $sql3 = "SELECT * FROM tariff_plan WHERE pro_id='$id'";
        $res3 = $conn->query($sql3);
        $row3 = mysqli_fetch_assoc($res3);
        $plan_price = $row3['plan_price'];
            

        ?>   

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_content">
            <h3><?php echo ucwords($propertyName);?></h3>
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="homestay.php">Homestay</a></li>
                <li><a href="homestay-detail.php"><?php echo ucwords($propertyName);?></a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Search Room Area =================-->
<section class="room_details_area">
    <div class="container">
        <div class="row room_details_inner">
            <div class="col-md-8">

                <section id="gallery-con">
                    <section id="gallery-main">
                        <img src="img/gallery/resort-g-1.jpg" width="100%" style="width:100%" height="400px" />
                    </section>
                    <section id="gallery-hidden">

                        <img src="img/gallery/resort-g-1.jpg" width="100%" height="400px" />

                        <img src="img/gallery/resort-g-2.jpg" width="100%" height="400px" />

                        <img src="img/gallery/resort-g-3.jpg" width="100%" height="400px" />

                        <img src="img/gallery/resort-g-4.jpg" width="100%" height="400px" />

                        <img src="img/gallery/resort-g-1.jpg" width="100%" height="400px" />

                    </section>
                    <section id="thumbnails">
                        <div id="playtoggle" class="ui-button">
                            <div class="icon icon-pause"></div>
                        </div>
                        <div id="left-arrow" class="ui-button">
                            <div class="icon icon-arrow-left"></div>
                        </div>
                        <div id="thumbcon">

                        </div>
                        <div id="right-arrow" class="ui-button">
                            <div class="icon icon-arrow-right"></div>
                        </div>
                    </section>
                </section>
                <div class="room_details_content">
                    <div class="room_d_main_text">
                        <a href="#">
                            <h4>Budget <span>rooms</span></h4>
                        </a>
                        <h5>&#8377;<?php echo $plan_price;?> <span>/ Night</span></h5>
                        <?php echo $Aboutpro;?>
                        <!-- <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p> -->
                    </div>
                    <div class="room_service_list">
                        <h3 class="room_d_title">Room services</h3>
                        <div class="row room_service_list_inner">
                            <div class="col-sm-5 col-md-offset-right-1">
                          
                                <div class="resot_list">
                                    <ul>
                                              <?php
                     $sql4=      ("SELECT * FROM property_details WHERE owner_id='$id'");
                     $res4 = $conn->query($sql4);
                     if($res4->num_rows>0){

                while($row = mysqli_fetch_assoc($res4)){
                  // $a = explode(",", $row['Pro_service']);
                     //$list =  json_decode(json_encode($row['Pro_service']), true );
                     $list = explode(",", $row['Pro_service']);
                       foreach($list as $list_all) {
                            $list_all = trim($list_all);

                                ?>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $list_all;?></a></li>
                                    <?php   } } } ?>
                                    </ul>
                                </div>
                            </div>
                     <!--        <div class="col-sm-5 col-md-offset-right-1">
                                <div class="resot_list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Private balcony</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>good room service</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>flat screen tv</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>fully AC</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>mountain view</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>free pick & drop facilies</a></li>
                                    </ul>
                                </div>
                            </div>
 -->                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="search_right_sidebar">
                    <div class="book_room_area">
                        <div class="book_room_box">
                            <div class="book_table_item">
                                <h3>check availability</h3>
                            </div>
                            <form action="Insert_enquiry.php" method="post">
                              <input type="hidden" name="owner_id" value="<?php echo $id;?>">
                              <input type="hidden" name="property_type" value="<?php echo $property_type;?>">
                      
                            <div class="book_table_item">
                                <div class="input-append">
                                    <input size="16" type="text" name="Fullname" placeholder="Full Name *" required>
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append">
                                    <input size="16" type="text" name="Email" placeholder="Email *" required>
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append">
                                    <input size="16" type="text" name="mobno" placeholder="Mobile Number *" required>
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append">
                                    <input size="16" type="text" name="telno" placeholder="Telephone Number">
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append date form_datetime">
                                    <input size="16" type="text" name="arrvdate"  placeholder="Arrival Date">
                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append date form_datetime">
                                    <input size="16" type="text" name="deptdate" placeholder="Departure Date">
                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>

                            <div class="book_table_item">
                                <select class="selectpicker" name="Adults">
                                    <option value="1">1 Adults</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                    <option value="5">5 Adults</option>
                                    <option value="6">6 Adults</option>
                                </select>
                            </div>
                            <div class="book_table_item">
                                <select class="selectpicker" name="Children">
                                    <option value="1">1 Children</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                    <option value="5">5 Children</option>
                                    <option value="6">6 Children</option>
                                </select>
                            </div>
                            <div class="book_table_item">
                                <div class="row">
                                    <div class="input-append col-md-6">
                                        <label class="text-white">Veg:</label>
                                        <input size="16" type="number" name="Veg" placeholder="" required>
                                    </div>
                                    <div class="input-append col-md-6">
                                        <label class="text-white">Non Veg:</label>
                                        <input size="16" type="number" name="Nveg" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append">
                                    <textarea placeholder="Address *"  name="Address" required></textarea>
                                </div>
                            </div>
                            <div class="book_table_item">
                                <div class="input-append">
                                    <textarea placeholder="Message *" name="Message" required></textarea>
                                </div>
                            </div>
                            
                            <div class="book_table_item">
                               <!--  <a class="book_now_btn" href="#">Reserve now</a> -->
                                 <input type="submit" name="submit" class="book_now_btn">Reserve now</input>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="room_details_comment">
                        <form class="contact_us_form row" action="Insert_review.php" method="post" id="contactForm" novalidate="novalidate">
                          


                           <input type="hidden" name="owner_id" value="<?php echo $id;?>">
                              <input type="hidden" name="property_type" value="<?php echo $property_type;?>">
                            <h4>Add review</h4>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                            </div>
                            <div class="form-group col-md-12">
                                <h5>Your Rating</h5>
                                <div class="rating rating2">
                                    <!--
        --><a href="#5" title="Give 5 stars" name="rating[]">★</a>
                                    <!--
        --><a href="#4" title="Give 4 stars" name="rating[]">★</a>
                                    <!--
        --><a href="#3" title="Give 3 stars" name="rating[]">★</a>
                                    <!--
        --><a href="#2" title="Give 2 stars" name="rating[]">★</a>
                                    <!--
        --><a href="#1" title="Give 1 star" name="rating[]">★</a>
                                </div>

                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="review"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit"  name="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <!--================Our Menu Area =================-->
        <section class="our_menu_area">
            <div class="container">
                <div class="our_menu_inner">
                    <div class="left_ex_title">
                        <h2>Other <span>Information</span></h2>
                    </div>
                    <div class="our_menu_list_inner">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#dp1" aria-controls="dp1" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#dp2" aria-controls="dp2" role="tab" data-toggle="tab">Activities</a></li>
                            <li role="presentation"><a href="#dp3" aria-controls="dp3" role="tab" data-toggle="tab">Getting There</a></li>
                            <li role="presentation"><a href="#dp4" aria-controls="dp4" role="tab" data-toggle="tab">Around Wild Forest</a></li>
                            <li role="presentation"><a href="#dp5" aria-controls="dp5" role="tab" data-toggle="tab">Terms &amp; Conditions</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="dp1">
                                <div class="our_menu_tab_inner">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                <h4>Your homestay includes</h4>
                                                <p> <?php echo $Pro_includes;?></p><br>

                                                <h4>Your homestay Cuisine </h4>
                                                <p> <?php echo $Pro_cuisine;?></p><br>

                                                <!-- <p>8 Cottages (4 deluxe and 4 standard cottages)</p> -->
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dp2">
                                <div class="our_menu_tab_inner">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $Pro_activites;?></p>
                                                <!-- <p><i class="fa fa-caret-right" aria-hidden="true"></i> Sight seeing</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Bison valley view point</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Bird watching</p><br />
                                                <p>(*subject to availability and weather conditions)</p> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dp3">
                                <div class="our_menu_tab_inner">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i>  <?php echo $Pro_getting;?></p>
                                                <!-- <p><i class="fa fa-caret-right" aria-hidden="true"></i> Mudumalai</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Bandipur (73kms)</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Gundalpet</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Nanjangud</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Mysore (145kms)</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Bengaluru</p> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dp4">
                                <div class="our_menu_tab_inner">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i>  <?php echo $Pro_distance;?></p>
                                                <!-- <p><i class="fa fa-caret-right" aria-hidden="true"></i> Ooty &#45; 50kms</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Bandipur &#45; 30kms</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Gopalswamy hills &#45; 50kms</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Meenmatti falls &#45; 40kms</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Masinagudi &#45; 30kms</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Wayanad &#45; 50kms</p> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dp5">
                                <div class="our_menu_tab_inner">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $Pro_terms;?></p>
                                                <!-- <p><i class="fa fa-caret-right" aria-hidden="true"></i> Package includes lunch, dinner and breakfast (starts with lunch and ends with breakfast).</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Children between 5 to 12 years are charged 50% of the tariff.</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Accommodations are on twin sharing basis.</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> No loud music allowed (Reserve Forest).</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Tariff are subjected to change with availability and during peak seasons.</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> Booking will be confirmed only on the receipt of full payment.</p>
                                                <p><i class="fa fa-caret-right" aria-hidden="true"></i> All disputes are subject to Bengaluru jurisdiction.</p> -->

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Menu Area =================-->
        <div class="room_details_clients col-md-6 col-md-offset-3">
            <h3 class="room_d_title">customer Reviews</h3>
            <div class="clients_slider owl-carousel">
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="img/clients/client-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            <a href="#">
                                <h4>- Michale John</h4>
                            </a>
                            <div>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="img/clients/client-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            <a href="#">
                                <h4>- Michale John</h4>
                            </a>
                            <div>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="img/clients/client-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            <a href="#">
                                <h4>- Michale John</h4>
                            </a>
                            <div>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!--================Explor Room Area =================-->


<!--================ other Room Area =================-->
<!--================Home stay =================-->
  <?php
           $sql1=      ("SELECT * FROM top_featured WHERE property_type ='HomeStay'");
           $res1 = $conn->query($sql1);
            
            if($res1->num_rows>0){ ?>
<section class="explor_room_area explor_slider_area">

    <div class="container">

        <div class="explor_title row m0">

            <div class="pull-left">

                <div class="left_wh_title">

                    <h2>Top <span>Home stay</span></h2>

                    <p>uis aute irure dolor in reprehenderit </p>

                </div>

            </div>

            <div class="pull-right">

                <a class="about_btn_wh" href="homestay.php">view all Home stay</a>

            </div>

        </div>

        <div class="explor_room_item_inner explor_slider owl-carousel">
     

         <?php   while($row1 = mysqli_fetch_assoc($res1)){
            $location_id = $row1['location_id'];
                   $owner=      ("SELECT * FROM `prop_ownerdetails` WHERE `location_id`='$location_id'");
                      $result = $conn->query($owner);
                      if($result->num_rows>0){

                       while($row2 = mysqli_fetch_assoc($result)){
                             $owner_id = $row2['owner_id'];
                             $property_type = $row2['prop_name'];
                            $property = ("SELECT * FROM `property_details` WHERE `owner_id`='$owner_id'");
                               $result1 = $conn->query($property);
                              if($result1->num_rows>0){
                               while($row3 = mysqli_fetch_assoc($result1)){
                                $pro_id = $row3['pro_id'];
                                $abtproperty = $row3['Aboutpro'];
                              
                      $sql4 = "SELECT * FROM tariff_plan WHERE pro_id='$pro_id'";
        $res4 = $conn->query($sql4);
        $row4 = mysqli_fetch_assoc($res4);
        $plan_price = $row4['plan_price'];

            ?>


            <div class="item">

                <div class="explor_item">

                    <a href="" class="room_image">

                        <img src="img/choose-resort-bg.jpg" alt="">

                    </a>

                    <div class="explor_text">

                        <a href="#">

                            <h4><?php echo $property_type;?></h4>

                        </a>

                        <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

                        <div class="explor_footer">

                            <div class="pull-left">

                                <h3>&#8377;<?php echo $plan_price;?>  <span>/ Night</span></h3>

                            </div>

                            <div class="pull-right">

                                <a class="book_now_btn" href="homestay-detail.php">View details</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <?php 

          }}
                         }}


    }}?>

       
        </div>

    </div>
    </section>
    <?}else{
         echo "no data"; 
    }?>



<!--================End Homestay =================-->


<!-- <section class="explor_room_area explor_slider_area">
    <div class="container">
        <div class="explor_title row m0">
            <div class="pull-left">
                <div class="left_wh_title">
                    <h2>Top <span>Resorts</span></h2>
                    <p>uis aute irure dolor in reprehenderit </p>
                </div>
            </div>
            <div class="pull-right">
                <a class="about_btn_wh" href="homestay-detail.php">view all Resorts</a>
            </div>
        </div>
        <div class="explor_room_item_inner explor_slider owl-carousel">
            <div class="item">
                <div class="explor_item">
                    <a href="" class="room_image">
                        <img src="img/choose-resort-bg.jpg" alt="">
                    </a>
                    <div class="explor_text">
                        <a href="#">
                            <h4>Resort Name</h4>
                        </a>
                        <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                        <div class="explor_footer">
                            <div class="pull-left">
                                <h3>&#8377;1700 <span>/ Night</span></h3>
                            </div>
                            <div class="pull-right">
                                <a class="book_now_btn" href="homestay-detail.php">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="explor_item">
                    <a href="" class="room_image">
                        <img src="img/choose-resort-bg.jpg" alt="">
                    </a>
                    <div class="explor_text">
                        <a href="#">
                            <h4>Resort Name</h4>
                        </a>
                        <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                        <div class="explor_footer">
                            <div class="pull-left">
                                <h3>&#8377;1700 <span>/ Night</span></h3>
                            </div>
                            <div class="pull-right">
                                <a class="book_now_btn" href="homestay-detail.php">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="explor_item">
                    <a href="" class="room_image">
                        <img src="img/choose-resort-bg.jpg" alt="">
                    </a>
                    <div class="explor_text">
                        <a href="#">
                            <h4>Resort Name</h4>
                        </a>
                        <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                        <div class="explor_footer">
                            <div class="pull-left">
                                <h3>&#8377;1700 <span>/ Night</span></h3>
                            </div>
                            <div class="pull-right">
                                <a class="book_now_btn" href="homestay-detail.php">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 -->
<!--================End other Room Area =================-->
<!--================End Search Room Area =================-->

<?php include'includes/footer.php'?>

  <script type="text/javascript">
   $(function() {
    alert(12);
      // fetch_data();
      // function fetch_data()  
      // {  
      //    //   alert(1);
      //       $.ajax({
              
      //           url:"<?php echo base_url(); ?>Admin/get_OwnerDetails?protype=<?php echo $place;?>",
      //           method:"POST",
      //           success:function(data){
      //               $('#table_data').html(data);
      //           }
      //       });
      } 
  </script>
  <script src="js/jquery-2.2.4.js"></script>  
 <script type="text/javascript">
  $(document).ready(function(){
    //alert(233);
   
   
   $("#Adults").on("click", function(){
  var adults = $("#Adults option:selected").val();
   console.log(adults);
});
   });
  </script>

