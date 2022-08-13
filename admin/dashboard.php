<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <title>Bootstrap demo</title>
    <style>
      
        body {
            background-color: #FFFFFF;
        }
        #sidebar{
            height: 100%;
        }
        #sidebar  li a{
            width: 100%;
            font-size: 25px;
            color: black;
            text-decoration: none;
            
        }
    </style>
</head>

<body>
   
   

<div class="container-fluid" style="margin-top:40px ;">
    <div class="row justify-content-around" >
        <div class=" col-sm-12 col-md-3 col-lg-3 "  >
   

            <?php include 'includes/sidebar.php'; ?>

</div>
        </div>
        <div class="  col-sm-12 col-md-9 col-lg-9 "  style="height:100%; padding-bottom: 50px;">
                <div class="row mt-3 justify-content-between">
                    <div class="  col-sm-6 col-md-4 col-lg-4 text-center">
                        
                    <center><img src="images/fruits.jpg" alt="" style="width: 100px ;"></center> 
                    <h1><?php
                            include 'db.php';
                            $sql = "SELECT * FROM product WHERE product_category = 'FRUITS' ";

                            if ($result = mysqli_query($conn, $sql)) {

                                // Return the number of rows in result set
                                $rowcount = mysqli_num_rows( $result );
                                
                                // Display result
                                printf( $rowcount);
                            }
                            ?></h1>
                          <h3>FRUITS</h3>
                    </div>
                    <div class=" col-sm-6 col-md-4 col-lg-4 text-center">
                         <center><img src="images/fruits.jpg" alt="" style="width: 100px ;"></center> 
                    <h1><?php
                            include 'db.php';
                            $sql = "SELECT * FROM product    WHERE product_category = 'VEGETABLES' ";

                            if ($result = mysqli_query($conn, $sql)) {

                                // Return the number of rows in result set
                                $rowcount = mysqli_num_rows( $result );
                                
                                // Display result
                                printf( $rowcount);
                            }
                            ?></h1>
                        <!-- <center><img src="images/vegitables.jpg" alt="" style="width: 100px ;"></center> -->
                        <h3>VEGETABLES</h3>
                    </div>
                    <div class=" col-sm-6 col-md-4 col-lg-4 text-center">
                         <center><img src="images/fruits.jpg" alt="" style="width: 100px ;"></center> 
                    <h1><?php
                            include 'db.php';
                            $sql = "SELECT * from product";

                            if ($result = mysqli_query($conn, $sql)) {

                                // Return the number of rows in result set
                                $rowcount = mysqli_num_rows( $result );
                                
                                // Display result
                                printf( $rowcount);
                            }
                            ?></h1>
                       <!-- <center> <img src="images/empExp.jpg" alt="" style="width: 100px ;"></center>
                       <br> -->
                        <h3>COUNTRY</h3>
                    </div>
                    <div class=" col-sm-6 col-md-4 col-lg-4 mt-4 text-center">
                         <center><img src="images/fruits.jpg" alt="" style="width: 100px ;"></center> 
                        <h1><?php
                                include 'db.php';
                                $sql = "SELECT * from employee";

                                if ($result = mysqli_query($conn, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                    
                                    // Display result
                                    printf( $rowcount);
                                }
                                ?></h1>
                        <h3>EMPLOYEES</h3>
                    </div>

                    <div class=" col-sm-6 col-md-4 col-lg-4 mt-4 text-center">
                         <center><img src="images/fruits.jpg" alt="" style="width: 100px ;"></center> 
                        <h1><?php
                                include 'db.php';
                                $sql = "SELECT * from message WHERE type = 0 ";

                                if ($result = mysqli_query($conn, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                    
                                    // Display result
                                    printf( $rowcount);
                                }
                                ?></h1>
                        <h3>CONTACT US</h3>
                    </div>

                    <div class=" col-sm-6 col-md-4 col-lg-4 mt-4 text-center">
                         <center><img src="images/fruits.jpg" alt="" style="width: 100px ;"></center> 
                        <h1><?php
                                include 'db.php';
                                $sql = "SELECT * from message WHERE type = 1 ";

                                if ($result = mysqli_query($conn, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                    
                                    // Display result
                                    printf( $rowcount);
                                }
                                ?></h1>
                        <h3>REVIEW'S</h3>
                    </div>
                </div>
        </div>
    </div>
</div>


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