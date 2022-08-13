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

        <div class="card col-sm-12 col-md-4 col-lg-3"  style="height:100%; padding-bottom:50px;">
       <?php include 'includes/sidebar.php'; ?>
        </div></div>
        <div class=" card col-sm-12 col-md-8 col-lg-8 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-center">
                    <div class="card m-2 col-sm-10">
                    <center> <h1> ADD EMPLOYEE </h1></center>
                    </div>

<!--- Contact us form start -->

    
       
             <div class="row">
                  <div class="col-sm-12">
                    <form action="EmpSave.php" method="post" >
                       <div class="row">
                        <div class=" col-sm-8 form-group mt-3">
                            <label for="fullname"> FULL NAME</label>
                                <input type="text" name="fullname" class="form-control" required>
                          </div>
        
                          <div class="col-sm-4 form-group mt-3">
                            <label for="fullname"> CONTACT NUMBER </label>
                                <input type="text" name="number" class="form-control" required>
                          </div>
                       </div>
                        
                      <div class="row">
                        <div class=" col-sm-5 form-group mt-3">
                            <label for="fullname"> ALTERNATE NUMBER </label> 
                                <input type="text" name="altnumber" class="form-control" required>
                          </div>
                          
                         
                          <div class=" col-sm-7 form-group mt-3">
                            <label for="fullname"> AADHAR NUMBER </label>
                                <input type="text" name="aadhar" class="form-control" required>
                          </div>
                      </div>
        
                        
                      <div class="row">
                        <div class=" col-sm-9 form-group mt-3">
                            <label for="fullname"> FULL  ADDRESS</label>
                                <input type="text" name="address" class="form-control" required>
                          </div>
                          
                         
                          <div class=" col-sm-3 form-group mt-3">
                            <label for="fullname"> PIN CODE</label>
                                <input type="text" name="pincode" class="form-control" required>
                          </div>
                      </div>

                      <div class="row">
                        <div class=" col-sm-3 form-group mt-3">
                            <label for="fullname"> PAN CARD NUMBER</label>
                                <input type="text" name="pancard" class="form-control" required>
                          </div>
                        <div class=" col-sm-3 form-group mt-3">
                            <label for="fullname"> ACCOUNT NUMBER</label>
                                <input type="text" name="acno" class="form-control" required>
                        </div>
                        <div class=" col-sm-4 form-group mt-3">
                            <label for="fullname"> BANK NAME</label>
                                <input type="text" name="bankname" class="form-control" required>
                        </div>
                        <div class=" col-sm-2 form-group mt-3">
                            <label for="fullname"> IFSC CODE </label>
                                <input type="text" name="ifsc" class="form-control " required>
                        </div>
                      </div>

                      <div class="row">
                        <div class=" col-sm-6 form-group mt-3">
                            <label for="fullname"> EMAIL  ADDRESS</label>
                                <input type="text" name="email" class="form-control" required>
                          </div>
                          
                         
                          <div class=" col-sm-6 form-group mt-3">
                            <label for="Password"> PASSWORD</label>
                                <input type="password" name="Password" class="form-control" required>
                          </div>
                      </div>
        
      
                    <div style="text-align:right ;margin-top: 50px;" >
                      <button class="btn btn-primary " name="sumbit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                    </div>
                     </form>
                  </div>
             </div>
          
<!--- Contact us form end -->


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