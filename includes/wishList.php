<?php
session_start();
require_once('./connection.php');
 if(isset($_SESSION['userId'])){
     $user_id = $_SESSION['userId'];
     if(isset($_POST['wishList'])){
      $product_id = $_POST['product_id'];
  //    check if the product is qlready in the wishlist;
  $sql = "SELECT wishlist_id FROM wishlist WHERE user_id = '$user_id' AND product_id = '$product_id'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) == 0){
      $sql = "INSERT INTO wishlist(product_id, user_id)VALUES('$product_id', '$user_id')";
      $result = mysqli_query($conn, $sql);
      if($result){
           $_SESSION['success'] = "Product have been added to wishList successfully";
           header('location: ../carts.php');
           exit();
      }else{
          $_SESSION['error'] = "error adding product to wishList";
          header('location: ../carts.php');
          exit();
      }
  }else{
      $_SESSION['error'] = "Product is already added to wishList";
      header('location: ../carts.php');
      exit();
  }
  
  }
 }

?>