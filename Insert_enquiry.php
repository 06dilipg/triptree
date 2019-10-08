<?php
   include 'database/Config.php';
         
      if (isset($_POST)) {
     // echo "string";
     
     	$owner_id  = mysqli_real_escape_string($conn,$_POST['owner_id']);
      $property_type  = mysqli_real_escape_string($conn,$_POST['property_type']);
     	$quest_name  = mysqli_real_escape_string($conn,$_POST['Fullname']);
     	$quest_email = mysqli_real_escape_string($conn,$_POST['Email']);
     	$quest_mobno = mysqli_real_escape_string($conn,$_POST['mobno']);
     	$quest_telno = mysqli_real_escape_string($conn,$_POST['telno']);
     	$quest_arrival = mysqli_real_escape_string($conn,$_POST['arrvdate']);
     	$quest_depture = mysqli_real_escape_string($conn,$_POST['deptdate']);
     	$quest_no_adult = mysqli_real_escape_string($conn,$_POST['Adults']);
     	$quest_no_child = mysqli_real_escape_string($conn,$_POST['Children']);
     	$quest_veg = mysqli_real_escape_string($conn,$_POST['Veg']);
     	$quest_nveg = mysqli_real_escape_string($conn,$_POST['Nveg']);
     	$quest_address = mysqli_real_escape_string($conn,$_POST['Address']);
     	$quest_message = mysqli_real_escape_string($conn,$_POST['Message']);

        $url = "$property_type.php?id=$owner_id";

     	 $sql  = "INSERT INTO enquiry (owner_id,property_type,quest_name,quest_email,quest_mobno,quest_telno,quest_arrival,quest_depture,quest_no_adult,quest_no_child,quest_veg,quest_nveg,quest_address,quest_message) VALUES ('".$owner_id."','".$property_type."','".$quest_name."','".$quest_email."','".$quest_mobno."','".$quest_telno."','".$quest_arrival."','".$quest_depture."','".$quest_no_adult."','".$quest_no_child."','".$quest_veg."','".$quest_nveg."','".$quest_address."','".$quest_message."')";
      $res = $conn->query($sql);

       if ($res) {

             

              // header('Location:Places.php?id="'.$owner_id.'"');

              // exit();

      //echo'Succefully uploaded';
     // echo  $url = "$property_type?id=$owner_id";
      echo "<script>alert('Enquiry Sent Succefully');window.location='".$url."';</script>";

    }else{

       echo "Error: " . $sql . "" . mysqli_error($conn);

    }


     }

    // $sql  =      ("INSERT INTO enquiry(owner_id,quest_name,quest_email,quest_mobno,quest_telno,quest_arrival,quest_depture,quest_no_adult,quest_no_child,quest_veg,quest_nveg,quest_address,quest_message) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])");
    //   $res1 = $conn->query($sql1);

    //   if($res1->num_rows>0){
    //   while($row1 = mysqli_fetch_assoc($res1)){
    //   $locationId =   $row1['location_id'];
    //   $location_title = $row1['location_title'];
     




?>