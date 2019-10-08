    <?php 
    $page = 'About';

    include'includes/Header1.php' ;
    

    ?> 
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>About Us</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Resort Story Area =================-->
        <section class="introduction_area resort_story_area">
            <div class="container">
                    <?php
           $sql=      ("SELECT * FROM cms_about");
           $res = $conn->query($sql);
            
            if($res->num_rows>0){

            while($row = mysqli_fetch_assoc($res)){
            $abt_title = $row['abt_title'];
            $abt_subtitle = $row['abt_subtitle'];
            $abt_descp = $row['abt_descp'];
             $abt_image = $row['abt_image'];
            $abt_list = $row['abt_list'];
            $directory = "admin/uploads/"
            ?>

                <div class="row introduction_inner">
                    <div class="col-md-5">
                        <a href="#" class="introduction_img">
                            <img src="<?php echo $directory; echo $abt_image;?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="introduction_left_text">
                            <div class="resort_title">
                                     <h2>our <span><?php echo $abt_title;?></span></h2>
                                <h5><?php echo $abt_subtitle;?></h5>
                            </div>
                          <!--   <h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</h6>
                            <h4>We are Available for business</h4> -->
                            <p><?php echo $abt_descp;?></p>
                            <a class="about_btn_b" href="contact-us.php">contact us</a>
                        </div>
                  <?php }} ?>      
                    </div>
                </div>
            </div>
        </section>
        <!--================End Resort Story Area =================-->
        
        <!--================Choose Resot Area =================-->
        <section class="choose_resot_area">
            <div class="container">
                <div class="center_title">
                    <h2>why choose our <span>resot</span></h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                </div>
                <div class="row choose_resot_inner">
                    <div class="col-md-5">
                        <div class="resot_list">
                            <ul>
                                       <?php
           $sql=      ("SELECT * FROM cms_about");
           $res = $conn->query($sql);
            
            if($res->num_rows>0){

            while($row = mysqli_fetch_assoc($res)){
            $abt_title = $row['abt_title'];
            $abt_subtitle = $row['abt_subtitle'];
            $abt_descp = $row['abt_descp'];
             $abt_image = $row['abt_image'];
            $abt_list = $row['abt_list'];
            $directory = "admin/uploads/";

       $list = explode(",", $row['abt_list']);
       $slider = explode(",", $row['abt_slider']);
          foreach($list as $list_all) {
    $list_all = trim($list_all);

            ?>         

                                 <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $list_all;?></a></li>

                             <?php } } }?>
                                                  </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="choose_resot_slider owl-carousel">
                             <?php    foreach($slider as $slider_all) { ?>
                            <div class="item">
                            
                                <img src="<?php echo $directory; echo $slider_all;?>" alt="">
                            
                            </div>
                             <?php          } ?>
<!--                            <div class="item">
                                <img src="img/resorts/resorts-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/resorts/resorts-3.jpg" alt="">
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Choose Resot Area =================-->
        
        <!--================Client Testimonial Area =================-->
        <section class="client_area client_three">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <?php
          $sql6=      ("SELECT * FROM client");
           $res6 = $conn->query($sql6);
            
            if($res6->num_rows>0){

            while($row6 = mysqli_fetch_assoc($res6)){
             $client_name = $row6['client_name'];
             $client_img = $row6['client_img'];
             $client_descrp = $row6['client_descrp'];
             $client_desg = $row6['client_desg'];
           
            $directory = "admin/uploads/"
                            ?>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo $directory; echo $client_img; ?>" alt="no image" width="50" height="50">
                            </div>
                            
                            <div class="media-body">
                                <p><i>“</i><?php echo $client_descrp;?> </p>
                                <a href="#"><h4>- <?php echo  $client_name;?></h4></a>
                            </div>
                        </div>
                    </div>
                <?php }} ?>
                
                </div>
            </div>
        </section>
        <!--================End Client Testimonial Area =================-->
        
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
        <section class="fun_fact_area about_fun_fact">
            <div class="container">
                <div class="row">
                    <div class="fun_fact_box row m0">
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">712</h3>
                                </div>
                                <div class="media-body">
                                    <h4>new <br /> friendships</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">254</h3>
                                </div>
                                <div class="media-body">
                                    <h4>International <br /> Guests</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">430</h3>
                                </div>
                                <div class="media-body">
                                    <h4>five stars <br /> rating</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">782</h3>
                                </div>
                                <div class="media-body">
                                    <h4>Served <br /> Breakfast</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Fun Fact Area =================-->
        
        
        
        
<?php include'includes/footer.php'?>