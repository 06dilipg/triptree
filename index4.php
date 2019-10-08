<?php $page ="Home";
include'includes/Header1.php'; 


?>





<!--================Slider Area =================-->

<section class="main_slider_area">

    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">

        <ul>

            
                 <?php
            $sql6 =      ("SELECT * FROM banner");
            $res6 = $conn->query($sql6);
                 if($res6->num_rows>0){  
                 while($row6 = mysqli_fetch_assoc($res6)){
                        $banner_title = $row6['banner_title'];
                        $banner_description = $row6['banner_description'];
                        $directory = "admin/uploads/";
                        $img = explode(",", $row6['banner_images']); 
                        
                        ?>
            <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                <!-- MAIN IMAGE -->
                <?php   foreach($img as $img_all) {
                        $img_all = trim($img_all); ?>
                <img src="<?php echo $directory; echo $img_all; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
              
                 <?php }?>
    

                <!-- LAYER NR. 1 -->

                <div class="slider_text_box">

                    <div class="tp-caption tp-resizeme first_text" id="slide-1586-layer-1" data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['290','290','290','220','130']" data-fontsize="['55','55','55','40','25']" data-lineheight="['59','59','59','50','35']" data-width="['550','550','550','550','300']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]" data-textAlign="['left','left','left','left']"><?php echo $banner_title;?></div>



                    <div class="tp-caption tp-resizeme secand_text" id="slide-1587-layer-2" data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['435','435','435','340','225']" data-fontsize="['18','18','18','18','16']" data-lineheight="['26','26','26','26']" data-width="['550','550','550','550','300']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-transform_idle="o:1;" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"><?php echo $banner_description;?>

                    </div>



                    <div class="tp-caption tp-resizeme slider_button" id="slide-1588-layer-3" data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['525','525','525','425','330']" data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">

                        <a class="slider_btn" href="contact-us.php">Reserve now</a>

                    </div>

                </div>

            </li>

          <?php }} ?>

        </ul>

    </div>

</section>

<!--================End Slider Area =================-->





<!--================Introduction Area =================-->

<section class="introduction_area">

    <div class="container">

        <div class="row introduction_inner">

            <div class="col-md-7">

                <div class="introduction_left_text">
                                   <?php
           $sql=      ("SELECT * FROM cms_home");
           $res = $conn->query($sql);
            
            if($res->num_rows>0){

            while($row = mysqli_fetch_assoc($res)){
            $home_title = $row['home_title'];
            $home_subtitle = $row['home_subtitle'];
            $home_description = $row['home_description'];
             $home_image = $row['home_image'];
           
            $directory = "admin/uploads/"
            ?>


                    <div class="intro_title">

                        <h2>Welcome <span><?php echo $home_title?></span></h2>

                        <p><?php echo $home_subtitle?></p>

                    </div>

                   <!--  <h4>We are Available for business</h4> -->

                    <p><?php echo $home_description?></p>

                </div>

            </div>

            <div class="col-md-5">

                <div class="introduction_img">

                    <img src="img/error-bg.jpg" alt="">

                </div>

            </div>
        <?php }}?>

        </div>

    </div>

</section>

<!--================End Introduction Area =================-->





<!--================Home stay =================-->
  <?php
  
      $querry  =      ("SELECT * FROM locations WHERE property_type = 'HomeStay'");
      $result = $conn->query($querry);
   
      if($result->num_rows>0){
           $sql1=      ("SELECT * FROM top_featured WHERE property_type ='HomeStay'");
           $res1 = $conn->query($sql1);
            
            if($res1->num_rows>0){ ?>
         <section class="explor_room_area explor_slider_area">

    <div class="container">

        <div class="explor_title row m0">

            <div class="pull-left">

                <div class="left_wh_title">

                    <h2>Top <span>Resorts</span></h2>

                    <p>uis aute irure dolor in reprehenderit </p>

                </div>

            </div>

            <div class="pull-right">

                <a class="about_btn_wh" href="homestay.php">view all Resorts</a>

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
                
        $sql4 = "SELECT * FROM tariff_plan WHERE owner_id='$owner_id'";
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

                                <h3>&#8377;<?php echo $plan_price;?> <span>/ Night</span></h3>

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


    }?>

       
        </div>

    </div>
    </section>








   <?php }else{ echo "dd"; }   }else{
          echo 'no location';
      } ?>

          


<!--================End Homestay =================-->
<!--================End Resort =================-->
  <?php
           $sql1=      ("SELECT * FROM top_featured WHERE property_type ='Resort'");
           $res1 = $conn->query($sql1);
            
            if($res1->num_rows>0){ ?>
<section class="explor_room_area explor_slider_area">

    <div class="container">

        <div class="explor_title row m0">

            <div class="pull-left">

                <div class="left_wh_title">

                    <h2>Top <span>Resorts</span></h2>

                    <p>uis aute irure dolor in reprehenderit </p>

                </div>

            </div>

            <div class="pull-right">

                <a class="about_btn_wh" href="homestay.php">view all Resorts</a>

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

                                <h3>&#8377;<?php echo $plan_price;?> <span>/ Night</span></h3>

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



<!--================end Resort =================-->
<!--================Happy Farms =================-->
  <?php
           $sql1=      ("SELECT * FROM top_featured WHERE property_type ='HappyFarms'");
           $res1 = $conn->query($sql1);
            
            if($res1->num_rows>0){ ?>
<section class="explor_room_area explor_slider_area">

    <div class="container">

        <div class="explor_title row m0">

            <div class="pull-left">

                <div class="left_wh_title">

                    <h2>Top <span>Resorts</span></h2>

                    <p>uis aute irure dolor in reprehenderit </p>

                </div>

            </div>

            <div class="pull-right">

                <a class="about_btn_wh" href="homestay.php">view all Resorts</a>

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

                                <h3>&#8377;<?php echo $plan_price;?> <span>/ Night</span></h3>

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
    <!--================end Happy farms =================-->

<section class="our_service_area">

    <div class="container">

        <div class="row our_service_inner">

            <div class="col-md-3 col-sm-6">

                <div class="our_service_first">

                    <h3>our services</h3>

                    <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="our_service_item">

                    <i class="flaticon-wifi"></i>

                    <h4>Free wifi</h4>

                    <p>Incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Utad minima.</p>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="our_service_item">

                    <i class="flaticon-toaster"></i>

                    <h4>Breakfast</h4>

                    <p>Incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Utad minima.</p>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="our_service_item">

                    <i class="flaticon-taxi"></i>

                    <h4>Breakfast</h4>

                    <p>Incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Utad minima.</p>

                </div>

            </div>

        </div>

    </div>

</section>

<!--================End Our Service Area =================-->



<!--================Our Resort Gallery Area =================-->

<section class="our_resort_gallery_area">

    <div class="middle_title">

        <h2>our resort <span>gallery</span></h2>

        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>

    </div>

</section>
    <?php
           $sql6 =      ("SELECT * FROM gallery");
           $res6 = $conn->query($sql6);
            
            if($res6->num_rows>0){

            while($row6 = mysqli_fetch_assoc($res6)){
            $titlle = $row6['titlle'];

         $directory = "admin/uploads/";
        
         $img = explode(",", $row6['img']);
          foreach($img as $img_all) {
            $img_all = trim($img_all);

            ?>

<div class="resort_gallery_inner imageGallery1">

    <div class="resort_gallery owl-carousel">
        <div class="item">

            <img src="<?php echo $directory; echo $img_all; ?>" alt="no image">

            <div class="resort_g_hover">

                <div class="resort_hover_inner">

                    <a class="light" href="<?php echo $directory; echo $img_all; ?>"><i class="fa fa-expand" aria-hidden="true"></i></a>

                    <h5><?php echo $titlle; ?></h5>

                </div>

            </div>

        </div>

     
    </div>

</div>

<?php } } }?>

<!--================End Our Resort Gallery Area =================-->





   <!--================Video Area =================-->

        <section class="video_area">

            <div class="container">

                <div class="video_inner">

                    <h4>Lorem Ipsum</h4>

                    <h5>Duis aute irure dolor in reprehenderit</h5>

                </div>

            </div>

        </section>

        <!--================End Video Area =================-->

        

        <!--================Fun Fact Area =================-->

        <section class="fun_fact_area">

            <div class="container">

                <div class="row">

                    <div class="fun_fact_box row m0">

                        <div class="col-md-3 col-sm-6">

                            <div class="media">

                                <div class="media-left">

                                    <h3 class="counter">712</h3>

                                </div>

                                <div class="media-body">

                                    <h4>Lorem <br /> Ipsum </h4>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="media">

                                <div class="media-left">

                                    <h3 class="counter">254</h3>

                                </div>

                                <div class="media-body">

                                    <h4>Lorem <br /> Ipsum</h4>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="media">

                                <div class="media-left">

                                    <h3 class="counter">430</h3>

                                </div>

                                <div class="media-body">

                                    <h4>Lorem <br /> Ipsum</h4>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="media">

                                <div class="media-left">

                                    <h3 class="counter">782</h3>

                                </div>

                                <div class="media-body">

                                    <h4>Lorem <br /> Ipsum</h4>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row fun_subscrib_inner">

                    <div class="col-md-5">

                        <div class="left_text_subs">

                            <p>Subscribe to our brief newsletter to get exclusive discounts and new theme launches right in your inbox.</p>

                        </div>

                    </div>

                    <div class="col-md-7">

                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Enter Your Email">

                            <span class="input-group-btn">

                                <button class="btn btn-default submit_btn" type="button">Subscribtion</button>

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--================End Fun Fact Area =================-->



<?php include'includes/footer.php' ?>

