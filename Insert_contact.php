<?php
   include 'database/Config.php';
         
      if (isset($_POST)) {
     // echo "string";
     if ($_POST['name'] == "" ||  $_POST['email']=="" || $_POST['number']=="" || $_POST['message']=="") {
              echo "<script>alert('Please Fill up the fields');window.location='contact-us.php';</script>";
       }else{
             	$name  = mysqli_real_escape_string($conn,$_POST['name']);
              $email  = mysqli_real_escape_string($conn,$_POST['email']);
             	$number  = mysqli_real_escape_string($conn,$_POST['number']);
             	$message = mysqli_real_escape_string($conn,$_POST['message']);
 
      

           	 $sql  = "INSERT INTO contact (name,email,phno,msg) VALUES ('".$name."','".$email."','".$number."','".$message."')";
            $res = $conn->query($sql);

           if ($res) {

                //   echo "<script>alert('Enquiry Sent Succefully');window.location='contact-us.php';</script>";
                 echo 'Thank You! we will contact shortly';          
               
           }
    }}else{

       echo "Error: " . $sql . "" . mysqli_error($conn);

    }


     





?>