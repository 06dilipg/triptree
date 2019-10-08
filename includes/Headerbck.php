<!-- <?php include '../database/Config.php'; ?> -->
<?php include 'database/Config.php'; ?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Triptree</title>



    <!-- Icon css link -->

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="vendors/stroke-icon/style.css" rel="stylesheet">

    <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Rev slider css -->

    <link href="vendors/revolution/css/settings.css" rel="stylesheet">

    <link href="vendors/revolution/css/layers.css" rel="stylesheet">

    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

    <link href="vendors/animate-css/animate.css" rel="stylesheet">



    <!-- Extra plugin css -->

    <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">

    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

    <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">

    <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">



    <link href="css/slideshow.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

</head>



<body>



    <!--================Header Area =================-->

    <header class="main_header_area">

        <div class="header_top">

            <div class="container">

                <div class="header_top_inner">

                    <div class="pull-left">

                        <a href="#"><i class="fa fa-phone"></i>9900005639,9980005858</a>

                        <a href="#"><i class="fa fa-envelope-o"></i>info@triptree.in</a>

                    </div>

                    <div class="pull-right">

                        <ul class="header_social">

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div class="header_menu">

            <nav class="navbar navbar-default">

                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <a class="navbar-brand" href="#">

                            <img src="img/logo.png" alt="" width="200" height="100%">

                            <img src="img/logo.png" alt="" width="180" height="100%">

                        </a>

                    </div>



                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav" style=" margin-left: 128px;">

                            <li class="active"><a href="index.php">Home</a></li>

                            <li><a href="about-us.php">About Us</a></li>

                            

       <li class="submenu dropdown">

          <a href="homestay.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homestay <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                   
     <ul class="dropdown-menu"> 


      <?php
      $sql1=      ("SELECT * FROM locations WHERE property_type = 'HomeStay'");
      $res1 = $conn->query($sql1);
    //$ads_image = array();
      if($res1->num_rows>0){
      while($row1 = mysqli_fetch_assoc($res1)){
      $locationId =   $row1['location_id'];
      $location_title = $row1['location_title'];
     
      ?>
             <li class="dropdown submenu"><a><?php echo $location_title;?></a>

             <ul class="dropdown-menu">
             
             <?php
           $sql2=      ("SELECT * FROM prop_ownerdetails WHERE location_id='$locationId'");


           $res2 = $conn->query($sql2);
            //$ads_image = array();
            if($res2->num_rows>0){

            while($row2 = mysqli_fetch_assoc($res2)){
              $owner_id = $row2['owner_id'];
            $prop_details = $row2['prop_name'];
            $id = $row2['owner_id'];

             $querry = ("SELECT * FROM `property_details` WHERE `owner_id`='$owner_id'");
              $result = $conn->query($querry);
              if($result->num_rows>0){ ?>
                      <li><a href="HomeStay.php?id=<?php echo $id; ?>">-  <?php echo $prop_details;?></a></li>
              <?php  }else{ ?>
                   
                   
           <?php     }

                 $sql3=      ("SELECT * FROM `property_details` WHERE `owner_id`='$id'");
                $res3 = $conn->query($sql3);
               
                if($res3->num_rows>0){

               ?>                
                    

                   <li><a href="HomeStay.php?id=<?php echo $id; ?>">-  <?php echo $prop_details;?></a></li>
                  <?php }else{?>      
                 <li><a href="javascript:void(0)">-  <?php echo $prop_details;?></a></li>
                   <?php   } 



                 }  } ?> 


               </ul>
             
             </li>
             
            

       
     <?php      }} ?> 

                        </ul>         
                                

                            </li>
                             
                             <!-- Resort -->
                            <li class="submenu dropdown">
                                <a href="Places.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resorts <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

  <ul class="dropdown-menu"> 


      <?php
      $sql1=      ("SELECT * FROM locations WHERE property_type = 'Resort'");
      $res1 = $conn->query($sql1);
    //$ads_image = array();
      if($res1->num_rows>0){
      while($row1 = mysqli_fetch_assoc($res1)){
      $locationId =   $row1['location_id'];
      $location_title = $row1['location_title'];
     
      ?>
             <li class="dropdown submenu"><a><?php echo $location_title;?></a>

             <ul class="dropdown-menu">
             
             <?php
           $sql2=      ("SELECT * FROM prop_ownerdetails WHERE location_id='$locationId'");
           $res2 = $conn->query($sql2);
            //$ads_image = array();
            if($res2->num_rows>0){

            while($row2 = mysqli_fetch_assoc($res2)){
            $prop_details = $row2['prop_name'];
            $id = $row2['owner_id'];



               $sql3=      ("SELECT * FROM `property_details` WHERE `owner_id`='$id'");
                $res3 = $conn->query($sql3);
               
                if($res3->num_rows>0){


                  ?>                
                    

                   <li><a href="Resort.php?id=<?php echo $id; ?>">-  <?php echo $prop_details;?></a></li>
               <?php }else{?>
                <li><a href="javascript:void(0)">-  <?php echo $prop_details;?></a></li>
                   <?php   } }  } ?> 


               </ul>
             
             </li>
             
            

       
     <?php      }} ?> 

                        </ul>         









                            </li>
                             <li class="submenu dropdown">
                                <a href="Places.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Happy Farms <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

  <ul class="dropdown-menu"> 


      <?php
      $sql1=      ("SELECT * FROM locations WHERE property_type = 'HappyFarms'");
      $res1 = $conn->query($sql1);
    //$ads_image = array();
      if($res1->num_rows>0){
      while($row1 = mysqli_fetch_assoc($res1)){
      $locationId =   $row1['location_id'];
      $location_title = $row1['location_title'];
     
      ?>
             <li class="dropdown submenu"><a><?php echo $location_title;?></a>

             <ul class="dropdown-menu">
             
             <?php
           $sql2=      ("SELECT * FROM prop_ownerdetails WHERE location_id='$locationId'");
           $res2 = $conn->query($sql2);
            //$ads_image = array();
            if($res2->num_rows>0){

            while($row2 = mysqli_fetch_assoc($res2)){
            $prop_details = $row2['prop_name'];
            $id = $row2['owner_id'];



              
               $sql3=      ("SELECT * FROM `property_details` WHERE `owner_id`='$id'");
                $res3 = $conn->query($sql3);
               //$ads_image = array();
              if($res3->num_rows>0){

        
                   ?>                
                    

                   <li><a href="HappyFarms.php?id=<?php echo $id; ?>">-  <?php echo $prop_details;  ?></a></li
                    >

               <?php }else{   ?>
                <li><a href="javascript:void(0)">-  <?php echo $prop_details;?></a></li>
                   <?php  }  }  } ?> 


               </ul>
             
             </li>
             
            

       
     <?php      }} ?> 

                        </ul>         









                            </li>

                           <!--  <li><a href="">Happy Farms</a></li> -->

                            <li><a href="contact-us.php">Contact Us</a></li>

                        </ul>

                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->

            </nav>

        </div>

    </header>
  

  
  
  
  
  
  
  
  
  
    


      
    <!--================Header Area =================-->

   
    

