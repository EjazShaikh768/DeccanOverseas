<?php 
include'db.php';

  $fullname = mysqli_real_escape_string($conn ,$_POST['fullname']);
  $phoone = mysqli_real_escape_string($conn , $_POST['phone']);
  $email = mysqli_real_escape_string($conn , $_POST['email']);
  $type = mysqli_real_escape_string($conn , $_POST['type']);
  $state = mysqli_real_escape_string($conn , $_POST['state']);
  $country = mysqli_real_escape_string($conn , $_POST['country']);
  $product = mysqli_real_escape_string($conn , $_POST['product']);
  $message = mysqli_real_escape_string($conn , $_POST['message']);

  $sql = "INSERT INTO message  (full_name,phone,email,state,country,type,product,message) 
  VALUES ('{$fullname}','{$phoone}','{$email}','{$state}','{$country}','{$type}','{$product}','{$message}') ";

$result = mysqli_query($conn , $sql);

header("location:http://localhost/DeccanOverseas/contactUs.php");


                

?>