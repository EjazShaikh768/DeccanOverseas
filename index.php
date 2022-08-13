<?php include 'includes/header.php'; ?>

    <header class="header">
        <!--- Navbar --->
        <nav class="navbar navbar-expand-lg w-100" >
            <div class="container">
                 <div class="row">
               <div class="col-sm-4">
                <a class="navbar-brand text-white" href="#"><img src="images/logo.jpeg" alt=""
                    style="width: 35px; height:35px; margin-right:10px;">DeccenOverseas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse"
                aria-controls="nvbCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
               </div>
               <div class="col-sm-3"></div>
               <div class="col-sm-4 text-right" >
                <div class="collapse navbar-collapse" id="nvbCollapse">
                    <ul class="navbar-nav test-right">
                        <li class="nav-item active pl-1 left">
                            <a class="nav-link " href="index.php">HOME</a>
                        </li>
                        <li class="nav-item  pl-1">
                            <a class="nav-link" href="product.php">MENU</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="gallery.php">GALLERY</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="aboutus.php">ABOUT US</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="contactUs.php">CONTACT
                                US</a>
                        </li>
                        
                    </ul>
                </div>
               </div>
           </div>
            </div>
        </nav>
        <!--# Navbar #-->
    </header>

    <!-- banner area start  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" id="banner">

                <video autoplay muted loop id="myVideo">
                    <source src="images/Imports and Exports.mp4" type="video/mp4" style="width: 100%;">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>
    </div>

    <!-- Banner area end-->

    <div class="container" id="">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4" style="margin: auto;">
                        <img src="images/logo.jpeg" alt="" style="width:100%; height=" 100%;">
                    </div>
                    <div class="col-sm-1 right"></div>
                    <div class="col-sm-6" style="margin: auto;">
                        <h1>Always in season</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center msg">
                        <h4>Lorem ipsum, dolor sit amet <b>consectetur</b> adipisicing elit. Officiis voluptatem ipsum
                            expedita assumenda! At tempore ullam incidunt possimus, non facere, cumque nostrum
                            omnis maxime eaque doloribus <b> accusantium sit Unde</b>.</h4>
                    </div>
                </div>
               

        </div>
    </div>
    </div>
    <!-- Banner area end -->




    <!-- banner for app add start-->
    <div class="container-fluid" style="background-image: url('images/bg.jpg'); margin-top: 50px; color: #FFFFFF;">
        <div class="container">
            <div class="row justify-content-center" style="padding-top: 100px; padding-bottom: 100px;">
               <div class="col-sm-12">
                <div class="row">
                    
                    <?php 
        
        include 'db.php';
            
                              $sql = "SELECT * FROM product WHERE prod_id  LIMIT  3  ";
                              $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              if (mysqli_num_rows($result) > 0) {
                               while($row = mysqli_fetch_array($result)){
                            ?>
      <div class="col-sm-4" >
      <div class="image">
          <img src="admin/upload/<?php echo $row['product_image']; ?>" alt="">
          <div class="details" >
            <h2><?php echo $row['product_name']; ?></h2>
            <p class=""><?php echo $row['product_description']; ?></p>
            <div class="more text-right">
            <center> <a href="fruit.php?PID=<?php echo $row['prod_id']; ?> " style="color:maroon"> <h4>SEE</h4> </a> </center>

             
            </div>
          </div>
        </div>
      </div>
        <?php }  }        ?>
                </div>
               </div>

              <div class="text-end"> <h5><a href="product.php" style="color:white">SEE MORE</a></h5></div>
            </div>
        </div>
    </div>


    <!-- banner for app add end-->




    <div class="container" >
        <div class="row">
            
        </div>
    </div>

    <!-- app add end -->
    
 
   <!-- Jumbotron -->
   
 <div class="container my-5"   style="height:230px;"  >
    <div class="row justify-content-center">
        <center> <h3> <b>OUR REVIEW</b> </h3> </center>
         <div class="col-sm-8">
         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

  <?php include 'db.php';
                           $sql = "SELECT * FROM message JOIN product ON message.product = product.prod_id  WHERE type = 1  ORDER BY id DESC";
                           $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                          
                               while($row = mysqli_fetch_array($result)){

                            ?>
    <div class="carousel-item active text-center">
       
      <h6> <?php echo $row['message']; ?></h6>
      <h4 >  <?php echo $row['product_name']; ?>   </h4>
      <h4 class="" style="color:grey; text-transform: capitalize;"> <b> <?php echo $row['full_name']; ?>  </b> </h4>
      <h6> <span style="color:maroon;"> <?php echo $row['state']; ?> </span> <b>,</b> <b style="color:maroon;"> <?php echo $row['country']; ?> </b> </h6>
    </div> 
    <?php }  ?>
   
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
         </div>
    </div>
 </div>



<?php   include 'includes/footer.php';  ?>

    









  