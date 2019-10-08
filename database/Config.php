
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$localhost = "localhost";
$user = "root";
$password = "";
$database = "triptree_new";
//$con = mysqli_connect("localhost","root","my_password","my_db");
$conn = mysqli_connect($localhost,$user,$password,$database);


// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
?>