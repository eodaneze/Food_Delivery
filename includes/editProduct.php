<?php
session_start();
require_once('./connection.php');
if(isset($_POST['update'])){
    $pname = isset($_POST['pname']) ? trim($_POST['pname']) : "";
    $pcat = isset($_POST['pcat']) ? trim($_POST['pcat']) : "";
    $prating = isset($_POST['prating']) ? trim($_POST['prating']) : "";
    $pstock = isset($_POST['pstock']) ? trim($_POST['pstock']) : "";
    $pprice = isset($_POST['pprice']) ? trim($_POST['pprice']) : "";
    $pdetails = isset($_POST['pdetails']) ? trim($_POST['pdetails']) : "";

    $content = mysqli_real_escape_string($conn, $pdetails);
     $photo =  $_POST['photo'];
     $product_id =  $_POST['product_id'];
     
     if($pname == "" || $pcat == "" || $prating == "" || $pstock == "" || $pprice == "" || $pdetails == ""){
        $_SESSION['error'] = "All Fields are required";
        header('location:../editProduct.php?id='.$product_id);
        
 
    }else{
        if($_FILES['file']['name'] != ''){
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES['file']['tmp_name'];
            $filesize = $_FILES['file']['size'];
            $filetype = $_FILES['file']['type'];
            $fileext = explode('.', $filename);
            $fileactualexe = strtolower(end($fileext));
            
            $allow = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($fileactualexe, $allow)){
                if($filesize < 8000000){
                   $pic = uniqid('', true).'.'.$fileactualexe;
                   $filedestination = 'productImg/'.$pic;
                   if(move_uploaded_file($filetmp, $filedestination)){
                      $sql = "UPDATE `products` SET `pname`='$pname',`pcat`='$pcat',`pprice`='$pprice',`prating`='$prating',`pstock`='$pstock', `pimage` = '$pic', `pdetails` = '$content' WHERE `product_id` = '$product_id'";
                         $result = mysqli_query($conn, $sql);
                         if($result){
                             unlink('productImg/'.$photo);
                             $_SESSION['success'] = "Product have been updated succesfully";
                            header('location:../editProduct.php?id='.$product_id);
                            exit();
                            }else{
                                $_SESSION['error'] = "Error updating Product";
                            header('location:../editProduct.php?id='.$product_id);
                                exit();
                            }
                   }else{
                    $_SESSION['error'] = "Failed to upload product image";
                    header('location:../editProduct.php?id='.$product_id);
                    exit();
                   }
                   
                }else{
                    $_SESSION['error'] = "product image is too large";
                    header('location:../editProduct.php?id='.$product_id);
                   exit();
                }
                
            }else{
                $_SESSION['error'] = "Unsupported file format";
                header('location:../editProduct.php?id='.$product_id);
             exit();
            }
        }else{
            $sql = "UPDATE `products` SET `pname`='$pname',`pcat`='$pcat',`pprice`='$pprice',`prating`='$prating',`pstock`='$pstock',`pdetails` = '$pdetails' WHERE `product_id` = '$product_id'";
             $result = mysqli_query($conn, $sql);
             if($result){
                $_SESSION['success'] = "Product updated successfully";
                header('location:../editProduct.php?id='.$product_id);
                exit(); 
             }else{
                 
                $_SESSION['error'] = "error updating product";
                header('location:../editProduct.php?id='.$product_id);
                 exit(); 
             }
        }
    }
}

?>