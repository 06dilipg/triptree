<?php
   include 'database/Config.php';
         
      if (isset($_POST)) {
    
      $email_id  = mysqli_real_escape_string($conn,$_POST['email']);
  

      $sql  = "INSERT INTO `subscribtion`(subscribtion_email) VALUES ('".$email_id."')";
      $res = $conn->query($sql);

       if ($res) {

            // echo "<script>alert('subscribtion Sent Succefully');window.location='index.php';</script>";
           echo 'Thank You! Subscribed successfully';    
          // echo "true";
    }else{

      // echo "Error: " . $sql . "" . mysqli_error($conn);
       
      //echo 'false';
    }
    
//    if ($res) {
//      $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
//}else {
//      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
//}


     }

?>