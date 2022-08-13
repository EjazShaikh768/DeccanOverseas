<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <title>Bootstrap demo</title>
    <style>
      
        body {
            background-color: #FFFFFF;
        }
     
    </style>
</head>

<body>



  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php
                          include 'db.php';
                          $catID = $_GET['Eid'];
                          $sql = "SELECT * FROM category_table WHERE cat_id = {$catID} ";
                          $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                           if (mysqli_num_rows($result) > 0) {
                             while ($row = mysqli_fetch_assoc($result)) {
                               

                        ?>
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['cat_id']; ?>" placeholder="">
                      </div>
                      <div class="form-group">
                        
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                      </div>

                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                             }
                           }
                           ?>
                </div>
              </div>
            </div>
          </div>

          <?php
            if(isset($_POST['sumbit'])){
                $cat_id = mysqli_real_escape_string($conn , $_POST['cat_id']);
                $cat_name = mysqli_real_escape_string($conn , $_POST['cat_name']);
            
                $sql1 = "UPDATE category_table SET category_name = '{$cat_name}' WHERE cat_id = {$cat_id} ";
                $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                header("location:http://localhost/DeccanOverseas/admin/CategoryShow.php");
                
            }
            ?>


        
    <!--# Footer #-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>
  