<?php


$conn = mysqli_connect("localhost" , "root" , "" ,"deccan_overseas") or die("database not connected" );


$fullname = mysqli_real_escape_string($conn , $_POST['fullname']);
$number = mysqli_real_escape_string($conn , $_POST['number']);
$alt_number = mysqli_real_escape_string($conn , $_POST['altnumber']);
$aadhar = mysqli_real_escape_string($conn , $_POST['aadhar']);
$address = mysqli_real_escape_string($conn , $_POST['address']);
$pincode = mysqli_real_escape_string($conn , $_POST['pincode']);
$pancard = mysqli_real_escape_string($conn , $_POST['pancard']);
$account_no = mysqli_real_escape_string($conn , $_POST['acno']);
$bank_name = mysqli_real_escape_string($conn , $_POST['bankname']);
$ifsc_code = mysqli_real_escape_string($conn , $_POST['ifsc']);
$email = mysqli_real_escape_string($conn , $_POST['email']);
$password = mysqli_real_escape_string($conn , md5($_POST['Password']));
$joining_date = date('d M Y'); 

$sql = "INSERT INTO employee(full_name,phone,alt_phone,aadhar,address,pincode,pan_no,ac_no,bank_name,bank_ifsc,email,password,joining_date) 
                      VALUES('{$fullname}', '{$number}', '{$alt_number}', '{$aadhar}', '{$address}', '{$pincode}','{$pancard}', 
                      	'{$account_no}', '{$bank_name}',' {$ifsc_code}', '{$email}', '{$password}', '{$joining_date}')";

 $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
 header("location:http://localhost/DeccanOverseas/admin/UserShow.php");                   
?>