<?php
   session_start();
   require_once('./connection.php');
   if(isset($_GET["id"])){
      $product_id = $_GET["id"];
      $sql = "DELETE FROM products WHERE product_id = '$product_id'";
      $result = mysqli_query($conn, $sql);
      if($result){
        $_SESSION['success'] = "Product have been deleted successfully";
        header('location: ../viewProducts.php');
      }
   }

?>