<?php
                               include 'db.php';
                               $Pid = $_GET['Pid'];
                               $sql = "DELETE FROM product Where prod_id = '{$Pid}'";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
                header("location:http://localhost/DeccanOverseas/admin/ProductShow.php");
                            ?>