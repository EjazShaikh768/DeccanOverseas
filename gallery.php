<?php include 'includes/header.php' 

?>

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
                        <li class="nav-item active pl-1">
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

<!-- Gallery start-->


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
</div>

!-->

<div class="container mt-5" >
 <center>   <h2></h2></center>
    <div class="row" id="Gallery">
         <?php 
        
        include 'db.php';
           
                              $sql = "SELECT * FROM product  ";
                              $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              if (mysqli_num_rows($result) > 0) {
                               while($row = mysqli_fetch_array($result)){
                            ?>
 
       <div class="col-sm-3"> <img src="admin/upload/<?php echo $row['product_image']; ?>" alt="" ></div>
   <?php } } ?>
    
    </div>
</div>
    

<!--Gallery end -->


<?php include 'includes/footer.php';  ?>