<?php
session_start();
require_once('./includes/connection.php');
  if(isset($_GET['orderId']) && isset($_GET['id'])){
     $ref_id = $_GET['orderId'];
     $user_id = $_GET['id'];
     $sql = "SELECT product_id FROM cart WHERE user_id = '$user_id'";
     $result = mysqli_query($conn, $sql);
     $total = 0;
     while($row = mysqli_fetch_assoc($result)){
         $produt_id = $row['product_id'];
         $sql2 = "SELECT * FROM products WHERE product_id = '$produt_id'";
         $result2 = mysqli_query($conn, $sql2);
         $row2 = mysqli_fetch_assoc($result2);
         $pprice = $row2['pprice'];
         $status = 'Pending';
        //  $total = $total + $pprice;

        $orderSql = "INSERT INTO orders(ref_id, product_id, user_id, price, status)VALUES ('$ref_id','$produt_id','$user_id','$tprice', '$status')";
        $orderResult = mysqli_query($conn, $orderSql);
        if($orderResult){
           $_SESSION['success'] = "Order placed successfully";
           $deleteSql = "DELETE FROM cart WHERE user_id = '$user_id'";
           $deleteResult = mysqli_query($conn, $deleteSql);
           header('location: ./index.php?success');
        }else{
           echo "error making payment";
        }
         
         
     }
  }else{
     header('location: ./index.php');
  }

?>