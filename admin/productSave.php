
<?php
include 'db.php';


    if (isset($_FILES['fileToUpload'])) {
        $errors = array();

        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = (explode('.', $file_name));
/*
        $extension = array("jpeg" , "jpg" , "png");

        if (in_array($file_ext, $extension) === false) {
            $errors[] = "THis extion file not allowed";
        }

        if ($file_size > 2097152) {
            $errors[] = "file size must be 2 mb or lower ";
        }
*/
        $new_name = time()."_".basename($file_name);
        $target = "upload/".$new_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $target);
        }else{
            print_r($errors);
            die();
        }
    }
        
           

   $prodname = mysqli_real_escape_string($conn ,$_POST['prod_name']);
   $prodcategory = mysqli_real_escape_string($conn , $_POST['pord_cat']);
   $proddescription = mysqli_real_escape_string($conn , $_POST['description']);

   $sql = "INSERT INTO product(product_name,product_image,product_category,product_description)
          VALUES('{$prodname}','{$new_name}','{$prodcategory}','{$proddescription}');";
   $sql .= "UPDATE category_table SET post = post + 1 WHERE cat_id = {$prodcategory}";


if(mysqli_multi_query($conn, $sql)){
   header("location:http://localhost/DeccanOverseas/admin/ProductShow.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }
                 
   


?>

