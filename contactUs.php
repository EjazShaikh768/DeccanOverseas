

<?php include 'includes/header.php';  ?>

   

    
  
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
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="aboutus.php">ABOUT US</a>
                        </li>
                        <li class="nav-item  active pl-1">
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
   
<!--- Contact us form start -->

<div class="container" id="contactUs">
    <div class="row" >
    <div class="col-sm-12 my-5 col-md-12 col-lg-12">
    
    </div>
    <div class="  col-sm-12 col-md-6 col-lg-6 ">
      <div class="row">
        <div class="col-sm-12">
        <h2 >  &nbsp; &nbsp;   &nbsp;Deccan Overseas</h2>
       <h5> <i class="fa-solid fa-location-pin"></i> &nbsp; &nbsp;  ADDRESS :    LAXMI SHANKAR NAGAR , BHUSAWAL</h5>
       <h5 > <i class="fa-solid fa-envelope"></i> &nbsp; &nbsp;  EMAIL :&nbsp; &nbsp; Solanke.bhagwan48@gmail.com</h5>
       <h5> <i class="fa-solid fa-phone"></i> &nbsp; &nbsp; PHONE : <span style="color:grey;">+91 </span> 9657223638  &nbsp;   <b>/</b> &nbsp;  <span style="color:grey;">+91 </span>  8446931810</h5>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6615766795367!2d75.76425700000001!3d21.046223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMjHCsDAyJzQ2LjQiTiA3NcKwNDUnNTEuMyJF!5e0!3m2!1sen!2sin!4v1659897263513!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
    
    </div>
        <div class="card py-2 col-sm-12 col-md-6 col-lg-6 ">
               <center>  <h2>Contact US /  REVIEW</h2></center>
               <form action="contactFormSave.php" method="post" >
                  <div class="row">
                  <div class="form-group mt-3">
                    <label for="fullname"> FULL NAME</label>
                        <input type="text" name="fullname" class="form-control">
                  </div>
                  
                  <div class=" col-sm-6 form-group mt-3">
                    <label for="phone"> CONTACT NUMBER </label>
                        <input type="number" name="phone" class="form-control">
                  </div>
                  
                  <div class=" col-sm-6 form-group mt-3">
                    <label for="email"> EMAIL </label>
                        <input type="email" name="email" class="form-control">
                  </div>
                  
                  <div class=" col-sm-6 form-group mt-3">
                    <label for="state"> STATE / CITY </label>
                        <input type="text" name="state" class="form-control">
                  </div>
                  
                  <div class=" col-sm-6 form-group mt-3">
                    <label for="country"> COUNTRY </label>
                        <input type="text" name="country" class="form-control">
                  </div>
                  
                  <!-- query -->
                  <div class="col-sm-6 form-group mt-4" >
                    <select class="form-select" aria-label="Default select example" name="type">
                      <option selected disabled>SELECT</option>
                      <option value="0">Contact</option>
                      <option value="1">review</option>
                    </select>
                  </div>
  
                  
                  <div class="col-sm-6 form-group mt-4" >
                  <select class="form-select" aria-label="Default select example" name="product">

                    <option selected disabled>SELECT</option>
                    <?php $conn = mysqli_connect("localhost" , "root" , "" ,"deccan_overseas") or die("database not connected" );
                           $sql = "SELECT * FROM product ";
                           $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                           if (mysqli_num_rows($result) > 0) {
                               while($row = mysqli_fetch_assoc($result)){

                            ?>
                    <option value="<?php echo $row['prod_id']; ?>"><?php echo $row['product_name']; ?></option>
                    <?php }  } ?>
                  </select>
                </div>
                  </div>
             
                  <div class="col-sm-12 form-group mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">MESSAGE / REVIEW </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="message"></textarea>
                  </div>

              <div style="text-align:right ;">
                <button class="btn btn-primary " name="sumbit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
              </div>
               </form>
          
        </div>
    </div>
</div>


<!--- Contact us form end -->
















<?php include 'includes/footer.php';  ?>