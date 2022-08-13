  
<?php
include 'db.php';

  session_start();

  if(isset($_SESSION["full_name"])){
    header("Location:http://localhost/DeccanOverseas/admin/dashboard.php");
  }
?>


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
      
       

body{
    background-image: url(images/4729529.png);
    background-repeat: no-repeat;
    background-position: center;
    background-origin: initial;
    background-size: auto;
}




      
    </style>
</head>

<body>
   
   <div class="container">
         <div class="row justify-content-center">


             <div class=" col-sm-12  col-md-6 col-lg-6" style="margin-top:16%;">
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <h2 class=" m-4">SIGN IN</h2>
                          <div class="form-group mt-3">
                            <label for="fullname"> EMAIL </label>
                                <input type="email" name="email" class="form-control">
                          </div>
                          <div class="form-group mt-3">
                            <label for="fullname"> PASSWORD </label>
                                <input type="password" name="password" class="form-control">
                          </div>  
                          <div style="text-align:center ;">
                            <button class="btn btn-primary m-3 " name="save" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                          </div>
                   </form>
             </div>
         </div>
   </div>

<?php
include 'db.php';
if (isset($_POST['save'])) {
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password =  md5($_POST['password']);
    $sql = "SELECT full_name , emp_id , email FROM employee WHERE email = '{$email}' AND password = '{$password}' ";
    $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            
     
    session_start();
    $_SESSION['full_name'] = $row['full_name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];

  
    header("location:http://localhost/DeccanOverseas/admin/dashboard.php");
     }
        }else{
    echo '<div class="alert alert-danger w-60">Username and Password are not matched.</div>';

}
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