<?php include 'includes/header.php' ?>
   
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
                        <li class="nav-item  pl-1 left">
                            <a class="nav-link " href="index.php">HOME</a>
                        </li>
                        <li class="nav-item  pl-1">
                            <a class="nav-link" href="product.php">MENU</a>
                        </li>
                        <li class="nav-item  pl-1">
                            <a class="nav-link" href="gallery.php">GALLERY</a>
                        </li>
                        <li class="nav-item active pl-1">
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
<!--
      <br><br>
<div class="container-fluid py-5" style="background-color:#484848;">
     <div class="row my-5">
         <div class="col-sm-6 col-lg-4 col-lg-4 text-center ">
               <h2  style="color:WHITE"> <b>MENU</b> </h2>
         </div>
         <div class="col-sm-6 col-lg-8 col-lg-8 text-center">
               <h4> <a href="index.php" style="color:wheat">HOME</a> / <span class="active"  style="color:WHITE"> MENU</span>  </h4>
         </div>
     </div>
</div>  !-->
 <!-- about us start-->

<div class="container mt-5" > 
    <div class="row ">
        <div class="col-sm-12 col-md-6 col-lg-6 shadow-sm p-3 mb-5 bg-body rounded" >
           
        <div id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="images/cmpny.jpg" class="d-block w-100"  style="height:450px;"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cmpny1.jpg" class="d-block w-100" style="height:450px;"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cmpny3.jpg" class="d-block w-100" style="height:450px;"  alt="...">
    </div>
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 text-center  mt-5">
            <h2><b>ABOUT US</b></h2>
            <h5 class="mt-3">
                Salix is a global import-export company of fresh fruit, an American Company based in Atlanta. 
                It also has offices in Philadelphia, Chicago, South Africa and Argentina. 
                The firm has more than 15 years of experience in the fresh fruit business. Recently added a new business unit, processed foods.
            </h5>
            <h5 class="mt-3">
                Salix has a wide portfolio of over 25 produce items, but focuses on apples, lemons, oranges, tangerines, pears and grapes.
                 The company works with more than 80 loyal growers in 18 countries, and 400 customers in 57 countries.
            </h5>
            <h5 class="mt-3">
                Salix was founded in 2013 by Juan González Pita and Luis Elortondo 
            </h5>
        </div>
    </div>
</div>
















<?php include 'includes/footer.php';  ?>