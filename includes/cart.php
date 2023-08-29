<?php
session_start();
require_once('./connection.php');

    if(isset($_SESSION['userId'])){
        $user_id = $_SESSION['userId'];
        if(isset($_POST['addToCart'])){
            $product_id = $_POST['product_id'];
        //    check if the product is qlready in the cart;
        $sql = "SELECT cart_id FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO cart(product_id, user_id)VALUES('$product_id', '$user_id')";
            $result = mysqli_query($conn, $sql);
            if($result){
                 $_SESSION['success'] = "Product have been added to cart successfully";
                 header('location: ../index.php');
                 exit();
            }else{
                $_SESSION['error'] = "error adding product to cart";
                header('location: ../index.php');
                exit();
            }
        }else{
            $_SESSION['error'] = "Product is already added to cart";
            header('location: ../index.php');
            exit();
        }
    
    }
       
    }else{
        $_SESSION['error'] = "Please login first";
        header('location: ../userLogin.php');
        exit();
    }



?>