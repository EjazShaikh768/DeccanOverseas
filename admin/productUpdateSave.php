<?php
include "db.php";


if(isset($_POST['submit'])){
  if(empty($_FILES['new-image']['name'])){
    $new_name = $_POST['old_image'];
  }else{
    $errors = array();
  
    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];
    $file_ext = (explode('.',$file_name));
  
  /*
     $extensions = array("jpeg","jpg","png");
  
     if(in_array($file_ext,$extensions) === false)
     {
       $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
     }
  
    if($file_size > 2097152){
      $errors[] = "File size must be 2mb or lower.";
    }
  
    if($file_size > 2097152){
       $errors[] = "File size must be 2mb or lower.";
     }

     */
    $new_name = time(). "-".basename($file_name);
    $target = "upload/".$new_name;
    $image_name = $new_name;
    if(empty($errors) == true){
      move_uploaded_file($file_tmp,$target);
    }else{
      print_r($errors);
      die();
    }
  }
  
  $prod_Id = mysqli_real_escape_string($conn , $_POST['prod_Id']);
  $prod_name = mysqli_real_escape_string($conn , $_POST['prod_name']);
  $prod_descs = mysqli_real_escape_string($conn , $_POST['prod_descs']);
  $category = mysqli_real_escape_string($conn , $_POST['category']);
  
  $sql1 = "UPDATE product SET product_name = '{$prod_name}',product_image = '{$image_name}',
                       product_category = '{$category}',product_description = '{$prod_descs}'
                       WHERE prod_id = {$prod_Id} ";
      $resultl = mysqli_query($conn, $sql1) or die("query failed");
      header("location:http://localhost/DeccanOverseas/admin/ProductShow.php");

  
  
}


?>
