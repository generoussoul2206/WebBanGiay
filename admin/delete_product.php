<?php
    include("../connect.php");


    $id= $_GET['id'];
    $sql = "DELETE  FROM product_image WHERE product_id = '$id'";
    $result = mysqli_query($con, $sql);
    $sql = "DELETE FROM product WHERE id = '$id'";
    $result =mysqli_query($con, $sql);
    header('location: manage_product.php');
?>