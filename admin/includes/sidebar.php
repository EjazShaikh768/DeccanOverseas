  
<?php
include './db.php';

  session_start();

  if(isset($_SESSION["full_name"])){
  }else{
    
    header("Location:http://localhost/DeccanOverseas/admin/");
  }
?>


  <a class="btn btn-secondary  mt-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="width:20%; ">
   <i class="fa-solid fa-bars"></i>
</a>
 <div class="row justify-content-center">
            <div class="  my-2 col-sm-11 text-center ">
              <center>
              <img src="images/logo.jpeg" alt="" style="width:100px ;">
           <h1 style="color: #484848;">DeccanOverseas</h1>
              </center>
            </div>
         </div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">

    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><b><?php echo $_SESSION["full_name"]; ?></b></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="" style="text-align:right;">
      <a href="logout.php" class="btn btn-outline-dark">LOGOUT</a>

    </div>
    <div class="dropdown  ">
     <!--  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button> -->      <ul class="list-group"  id="sidebar" style="padding-top:30px ;">
                <li class="list-group-item " aria-current="true"><a href="dashboard.php">DASHBOARD </a>  </li>
                <?php
                if ($_SESSION['full_name']) {
              
                  echo '<li class="list-group-item list-group-item-action"><a href="UserShow.php"> EMPLOYEE </a></li>';
                }

                ?>
                 <li class="list-group-item list-group-item-action"><a href="CategoryShow.php">  CATEGORY</a></li>
                <li class="list-group-item list-group-item-action"><a href="ProductShow.php"> PRODUCTS  </a></li>
                <li class="list-group-item list-group-item-action"><a href="FruitShow.php">  FRUITS </a></li>
                <li class="list-group-item list-group-item-action"><a href="VegitablesShow.php">  VEGITABLES</a></li>
                <li class="list-group-item list-group-item-action"><a href="reviewShow.php"> CONTACT  </a></li>
                <li class="list-group-item list-group-item-action"><a href="contactUsShow.php">  REVIEW US</a></li>
              </ul>
    </div>
  </div>