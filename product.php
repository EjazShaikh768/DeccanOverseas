<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <title>Bootstrap demo</title>
    <style>
        nav i {
            margin-right: 7px;
        }

        /* nav li{
            border-right: 1px solid white;
            margin-right: 10px;
            margin-left: 10px;
        }
        nav .left{
            border-left: 1px solid white;
            margin: 5px;
        } */
        .right {
            border-right: 5px solid maroon;
            height: 80px;
            margin: auto;
        }

        .msg span {
            color: maroon;
            font-style: bold;
        }

        body {
            background-color: #FFFFFF;
        }
        .navbar { background-color: #484848;

}
.navbar .navbar-nav .nav-link { color: #fff; }
.navbar .navbar-nav .nav-link:hover { color: #fbc531; }
.navbar .navbar-nav .active > .nav-link { color: #fbc531; }

footer a.text-light:hover { color: #fed136!important; text-decoration: none; }
footer .cizgi { border-right: 1px solid #535e67; }
@media (max-width: 992px) { footer .cizgi { border-right: none; } }

.header{
    position: relative;
}
.footer{
  position: relative;
}

  

.row{
	width: 100%;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
}

.image{
	background: #50A7FF;
	position: relative;
	flex: 1;
	max-width: 460px;
	height: 300px;
	margin: 20px;
	overflow: hidden;
}

.image img{
	opacity: 0.8;
	position: relative;
	vertical-align: top;
	transition: 0.6s;
	transition-property: opacity;
}

.image:hover img{
	opacity: 1;
}

.image .details{
	z-index: 1;
	position: absolute;
	top: 0;
	right: 0;
	color: #fff;
	width: 100%;
	height: 100%;
}

.image .details h2{
	text-align: center;
	font-size: 35px;
	text-transform: uppercase;
	font-weight: 300;
	margin-top: 70px;
	transition: 0.4s;
	transition-property: transform;
}

.image .details h2 span{
	font-weight: 900;
}

.image:hover .details h2{
	transform: translateY(-30px);
}

.image .details p{
	margin: 30px 30px 0 30px;
	font-size: 18px;
	font-weight: 600;
	text-align: center;
	opacity: 0;
	transition: 0.6s;
	transition-property: opacity, transform;
}

.image:hover .details p{
	opacity: 1;
	transform: translateY(-40px);
}

.more{
	position: absolute;
	background: rgba(255, 255, 255, 0.8);
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px;
	bottom: -60px;
	transition: 0.6s;
	transition-property: bottom;
}

.image:hover .more{
	bottom: 0;
}

.more .read-more{
	color: #000;
	text-decoration: none;
	font-size: 20px;
	font-weight: 500;
	text-transform: uppercase;
}

.more .read-more span{
	font-weight: 900;
}

.more .icon-links i{
	color: #000;
	font-size: 20px;
}

.more .icon-links a:not(:last-child) i{
	margin-right: 20px;
}
.col-sm-3{
  margin: 0;
  text-indent: 2rem;
  text-align: justify;
}
.carousel-item img{
  height:400px;
}

/* Responsive CSS */

@media (max-width: 1080px){
	.image{
		flex: 100%;
		max-width: 480px;
	}
}

@media (max-width: 400px){
	.image .details p{
		font-size: 16px;
	}

	.more .read-more, .more .icon-links a i{
		font-size: 18px;
	}
}
    </style>
</head>

<body>
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
                        <li class="nav-item active pl-1">
                            <a class="nav-link" href="product.php">MENU</a>
                        </li>
                        <li class="nav-item  pl-1">
                            <a class="nav-link" href="gallery.php">GALLERY</a>
                        </li>
                        <li class="nav-item  pl-1">
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
</div>

!-->
    <div class="container mt-5">
      <div class="row">
          
          <div class="col-sm-3 ">
          <center>
          <img src="images/100certified-products.png" alt="">
            <h4>High Quality Products</h4>
          </center>
            <p class="text-justify ">Grapes are known for their exotic variety and flavours which are used in the wine industry as well which attracts a huge demand of this fruit. Our company assures the quality and standards of the grapes are maintained and they undergo strict quality check by the company personnel and trained inspectors who make sure the cluster of grapes has firm skin, uniform colour and free from any damage.</p>
          </div>
          <div class="col-sm-3 ">
           <center>
           <img src="images/distributed-worldwide.png" alt="">
            <h4> Distribution Network</h4>
           </center>
            <p class="text-justify ">Our company makes sure the fresh and delicate clusters of high quality grapes reach our customers on time. Our efficient logistic partners and distributors have enabled us to reach to our customers in mostly all the parts of the country without compromising on the quality of the delicious grapes.</p>
          </div>
          <div class="col-sm-3 ">
            <center>
            <img src="images/import.png" alt="">
            <h4>Best Grape Importers </h4>
            </center>
            <p class="text-justify ">We take pride for our company’s name to be renowned as the top grape importers of the country. Our company is associated with the best authorized grape from various countries. We are accountable for the quality standards as set by the food authorities of India.</p>
          </div>
          <div class="col-sm-3 ">
            <center>
            <img src="images/best-trading-company.png" alt="">
            <h4> Best Trading Company</h4>
            </center>
            <p class="text-justify ">The purpose of the company is to work with its partners and serve the customers in the most efficient way. We never compromise our work ethics and maintain our relations with our traders, employees, shareholders and investors which enable us to outshine as the best trading company in this business.</p>
          </div>

      </div>

      <div class="row mt-4">
          
          <div class="col-sm-3">
              <center>
              <img src="images/customer-satisfaction.png" alt="">
               <h4>Customer Satisfaction </h4>
              </center>
               <p class="text-justify">
                   Happy customers lead to the growth and success of a company. We have maintained our quality of service by not only providing variety of grapes but also an effective mode of delivery. Customers can directly reach us on our website and get the quality grapes at their doorsteps. They can also reach us in case of any queries which our efficient support team will look after.
               </p>
          </div> 
          <div class="col-sm-3">
              <center>
              <img src="images/best-packing.png" alt="">
               <h4> Great Packing</h4>
              </center>
               <p class="text-justify">
               We make sure the fresh and delicate grapes reach to our customers without any spillage and damage in quality. Our company has engaged in eco-friendly tetra pack trays for packaging which not only keep the product fresh but also provide support to keep the grapes intact and damage free to reach our worthy customers
               </p>
          </div> 
          <div class="col-sm-3">
               <center>
               <img src="images/trusted-by-business.png" alt="">
               <h4> Trusted By Business</h4>
               </center>
               <p class="text-justify">
               Our company is listed in the top trading companies of India and the reason for our success is our business ethics and relations with our customers, employees, shareholders and supplying partners. We make sure to keep the trust of our partners and customers with our high quality service and efficient payment system.
               </p>
          </div> 
          <div class="col-sm-3">
              <center>
              <img src="images/professional-team.png" alt="">
               <h4> Professional Team</h4>
              </center>
               <p class="text-justify">
               It is very important for a company to possess good leadership skills and an efficient team work to accomplish the targets set. Our employees with their skills and dedication never fail to serve our customers on time and stay true to our claims and reputation of the company.
               </p>
          </div> 
      </div>
    </div>
   
 <!--image card layout start-->
 <div class="container">
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <?php 
        
        include 'db.php';
            
                              $sql = "SELECT * FROM product  ";
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
            <div class="more">
              <a  class="read-more"><?php echo $row['product_category']; ?></a>
              <div class="icon-links">
                <a href="fruit.php?PID=<?php echo $row['prod_id']; ?> "><i class="fas fa-eye"></i></a>
              </div> 
            </div>
          </div>
        </div>
      </div>
        <?php }  }        ?>
        <!--image card end-->
        <!-- pagination -->
     
      </div>
      </div>
      <!--image row end-->
    
    <!--image card layout end-->

    













<?php include 'includes/footer.php';  ?>