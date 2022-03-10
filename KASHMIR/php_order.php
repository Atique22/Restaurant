<?php
//     session_start();
// /error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kashmir";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
// session_destroy();

if(isset($_POST['place_order']))
{
        //include "PHPLOGIN.php";
        include "php_customer.php";
//         echo $total_p = $_POST['ptotal'];
//  		echo $EmailPhone = $_POST['emailPhone'];
//  		echo $Password = $_POST['password'];
// 		$cus = "select * from CUSTOMER where Email = '$EmailPhone' AND Password ='$Password'  limit 1";
// 		$result_cus = mysqli_query($connection, $cus);
// 		if(mysqli_num_rows($result_cus) > 0)
//         				{
//                             	 $row = mysqli_fetch_assoc($result_cus);
//                                  $C_NAME = $row["Full Name"];
//                                  echo "Login Successful...Welcome ".$Name;
//                                  die;
//                         }

     echo $product_name = $_POST['PNAME'];
     echo $product_price = $_POST['P_PRICE'];
     echo $product_quantity = $_POST['P_Quantity'];
}}
?>