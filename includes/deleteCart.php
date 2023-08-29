<?php
  session_start();
   require_once('./connection.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM cart WHERE product_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
         $_SESSION['success'] = "Product have been deleted succesfully";
         header('location: ../carts.php');
    }else{
        $_SESSION['error'] = "Error deleting product";
        header('location: ../carts.php');
    }
  }

?>