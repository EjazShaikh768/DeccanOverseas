<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <title>Bootstrap demo</title>
    <style>
        
    </style>
</head>

<body>
  


    
    

    <div class="container mt-5" >
        <div class="row justify-content">
            <?php 
                              include 'db.php';
                              $PROD_ID =$_GET['PID'];
                              $sql = "SELECT * FROM product JOIN category_table  ON product.product_category = category_table.category_name WHERE prod_id = {$PROD_ID}";
                           
                             // $sql = "SELECT * FROM product";
                             $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                            
                             if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                 
                            ?>
            <div class="col-sm-6 mr-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/upload/<?php echo $row['product_image']; ?>" class="d-block w-100" alt="..." style="width: 100%; height: 602px;">
    </div>
    <div class="carousel-item">
      <img src="admin/upload/<?php echo $row['product_image']; ?>" class="d-block w-100" alt="..." style="width: 100%; height: 602px;">
    </div>
    <div class="carousel-item">
      <img src="admin/upload/<?php echo $row['product_image']; ?>" class="d-block w-100" alt="..." style="width: 100%; height: 602px;">
    </div>
  </div>
</div>
            </div>
            
            <div class="col-sm-6  product3" style="">
            <div class="row">
                   <a href="product.php" style="color:grey; text-decoration: none;"> <h5> <i class="fa-solid fa-circle-arrow-left"></i> <?php echo $row['product_category']; ?></h5></a>
                   <h3 style="margin-top: 50px ;"><?php echo $row['product_name']; ?></h3>
                
            </div>

              <div class="row">
                <div class="col-sm-12 my-5 text-center">
                    <a href="#Quote" class="btn btn-secondary" style="width: 80%; ">QUOTE NOW</a>
                    
                </div>

                <div class="row" >
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10" >
                            <h4><b>Product Description</b></h4>
                            <h6 style="margin-top: 30px;"><?php echo $row['product_description']; ?></h6>
                    </div>
                    <div class="col-sm-1"></div>
                   
                   
                </div>

                                    

                
<!-- Gallery start -->

<div class="row">
    <div class="col-sm-6 productGallery" >
        <img src="admin/upload/<?php echo $row['product_image']; ?>" alt="" >
    </div>
    <div class="col-sm-6 productGallery" >
        <img src="admin/upload/<?php echo $row['product_image']; ?>" alt="" >
    </div>
    <div class="col-sm-12 productGallery">
        <img src="admin/upload/<?php echo $row['product_image']; ?>" alt="" >
    </div>
</div>

<!-- Gallery end-->




<!-- form -->
<div class="row productForm" style="margin-top: 80px; " id="Quote">
    <center>  <h2>Contact US /  REVIEW</h2></center>
               <form action="" method="post" >
                  <div class="form-group mt-3">
                    <label for="fullname"> FULL NAME</label>
                        <input type="text" name="fullname" class="form-control">
                  </div>

                  <div class="form-group mt-3">
                    <label for="fullname"> CONTACT NUMBER </label>
                        <input type="text" name="fullname" class="form-control">
                  </div>
                  
                  <div class="form-group mt-3">
                    <label for="fullname"> EMAIL </label>
                        <input type="text" name="fullname" class="form-control">
                  </div>
                  
                  <!-- query -->
                  <div class="form-group mt-4" >
                    <select class="form-select" aria-label="Default select example">
                      <option value="0">I want to Buy Fruit</option>
                      <option value="1">I want sell Fruit</option>
                      <option value="2">I want to offer my product / services</option>
                      <option value="3">I want to apply for a job</option>
                      <option value="4">Other</option>
                    </select>
                  </div>
  
                  <div class="mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">MESSAGE / REVIEW </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

              <div style="text-align:right ;">
                <button class="btn btn-primary " name="sumbit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
              </div>
               </form>
</div>


              </div>
            </div>
            <?php }  } ?>
        </div>
    </div>



 <!-- product close-->











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
</body>

</html>