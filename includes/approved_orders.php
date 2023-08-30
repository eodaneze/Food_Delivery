<?php
session_start();
   require_once('./connection.php');

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $order_id = $_REQUEST['order_id'];
        echo $order_id;

        // move from pending to aproved order
        if(isset($_POST['status'])){
            $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
               $user_id = $row['user_id'];
               $product_id = $row['product_id'];
               $status = $row['status'];
               $order_id = $row['order_id'];
               $ref_id = $row['ref_id'];
               $price = $row['price'];
       
               $approveSql = "INSERT INTO approved_order(order_id, ref_id, product_id, user_id, price, status)VALUES('$order_id', '$ref_id', '$product_id','$user_id',  '$price', '$status')";
               $approvedResult = mysqli_query($conn, $approveSql);
               $selectSql = "SELECT * FROM approved_order WHERE order_id = '$order_id'";
               $selectResult = mysqli_query($conn, $selectSql);
               $approvedRow = mysqli_fetch_assoc($selectResult);
               $approvedStatus = $approvedRow['status'];
               $approvedId = $approvedRow['order_id'];
               
       
               $updateSql = "UPDATE orders SET status = 'Approved' WHERE order_id = '$approvedId'";
               $updateResult = mysqli_query($conn, $updateSql);

               if($updateResult){
                $_SESSION['success'] = 'Product have been approved successfuly';
                header('location: ../order.php');
               }else{
                  $_SESSION['error'] = 'Error approving order';
                  header('location: ../order.php');
               }
       
            }
            // move from approved order to shipped order
         }elseif(isset($_POST['approved'])){
            $sql2 = "SELECT * FROM approved_order WHERE order_id = '$order_id'";
            $result2 = mysqli_query($conn, $sql2);
            while($row2 = mysqli_fetch_assoc($result2)){
               $user_id = $row2['user_id'];
               $product_id = $row2['product_id'];
               $status = $row2['status'];
               $order_id = $row2['order_id'];
               $ref_id = $row2['ref_id'];
               $price = $row2['price'];
   
               $shippedSql = "INSERT INTO shipping(order_id, ref_id, product_id, user_id, price, status)VALUES('$order_id', '$ref_id', '$product_id','$user_id', '$price', '$status')";
               $shippedResult = mysqli_query($conn, $shippedSql);
   
               $getShippingSql = "SELECT * FROM shipping WHERE order_id = '$order_id'";
               $getShippingResult = mysqli_query($conn, $getShippingSql);
               $getShippingRow = mysqli_fetch_assoc($getShippingResult);
               $shippingStatus = $getShippingRow['status'];
               $shippedId = $getShippingRow['order_id'];
   
               $updateSql = "UPDATE orders SET status = 'Shipped' WHERE order_id = '$shippedId'";
               $updateResult = mysqli_query($conn, $updateSql);
               if($updateResult){
                  $_SESSION['success'] = 'Product have been shipped successfuly';
                  header('location: ../order.php');
                 }else{
                    $_SESSION['error'] = 'Error shipping order';
                    header('location: ../order.php');
                 }
             
            }
         }
   }

?>