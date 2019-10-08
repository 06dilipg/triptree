<?php
   include 'database/Config.php';
         
      if (isset($_POST)) {
     // echo "string";
      $owner_id  = mysqli_real_escape_string($conn,$_POST['owner_id']);
      $property_type  = mysqli_real_escape_string($conn,$_POST['property_type']);
     	$name  = mysqli_real_escape_string($conn,$_POST['name']);
      $email  = mysqli_real_escape_string($conn,$_POST['email']);
     	$message  = mysqli_real_escape_string($conn,$_POST['message']);
    
        $url = "$property_type.php?id=$owner_id";

      $sql  = "INSERT INTO reviews (owner_id,property_type,review_name,review_email,review_message) VALUES ('".$owner_id."','".$property_type."','".$name."','".$email."','".$message."')";
      $res = $conn->query($sql);

       if ($res) {

             echo "<script>alert('Review Sent Succefully');window.location='".$url."';</script>";

    }else{

       echo "Error: " . $sql . "" . mysqli_error($conn);

    }


     }

?>