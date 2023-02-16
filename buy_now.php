<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$name = $_POST['name'];
$medicine = $_POST['medicine'];
$phone = $_POST['phone'];
$gmail = $_POST['gmail'];
$pincode = $_POST['pincode'];
$locality = $_POST['locality'];
$address = $_POST['address'];
$type = $_POST['type'];
// database insert SQL code
$sql = "INSERT INTO pan (name,medicine,phone,gmail,pincode,locality,address,type) VALUES ('$name','$medicine','$phone','$gmail','$pincode','$locality','$address','$type')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Your order has been placed successfully";
}

?>
