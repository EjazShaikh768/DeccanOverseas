<?php
                               include 'db.php';
                               $catID = $_GET['Did'];
                               $sql = "DELETE FROM category_table Where cat_id = '{$catID}'";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
                header("location:http://localhost/DeccanOverseas/admin/CategoryShow.php");
                            ?>