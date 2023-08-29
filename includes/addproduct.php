<?php 
session_start();
require_once("./connection.php");
 if(isset($_POST['add'])){
    $pname = isset($_POST['pname']) ? trim($_POST['pname']) : "";
    $pcat = isset($_POST['pcat']) ? trim($_POST['pcat']) : "";
    $prating = isset($_POST['prating']) ? trim($_POST['prating']) : "";
    $pstock = isset($_POST['pstock']) ? trim($_POST['pstock']) : "";
    $pprice = isset($_POST['pprice']) ? trim($_POST['pprice']) : "";
    $pdetails = isset($_POST['pdetails']) ? trim($_POST['pdetails']) : "";

    $content = mysqli_real_escape_string($conn, $pdetails);

    
    
    
     
     if($pname == "" || $pcat == "" || $prating == "" || $pstock == "" || $pprice == "" || $pdetails == ""){
        // echo "all fields are required";
        // die();
        $_SESSION['error'] = "All Fields are required"; 
         header('location:../addProduct.php');
         exit();
     }else{
        $pname = trimData($pname);
        $pcat = trimData($pcat);
        $prating = trimData($prating);
        $pstock = trimData($pstock);
        $pprice = trimData($pprice);
        $pdetails = trimData($pdetails);
     }

     if($_FILES['file']['name'] != ''){
        $filename = $_FILES['file']['name'];
        $filetmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];
        $fileext = explode('.', $filename);
        $fileactualext = strtolower(end($fileext));

        $allow = array('jpg', 'jpeg', 'png', 'gif');
        if(in_array($fileactualext, $allow)){
            if($filesize < 8000000){
                $pic = uniqid('',true).'.'.$fileactualext;
                $filedestination = 'productImg/'.$pic;

                if(move_uploaded_file($filetmp, $filedestination)){
                    $md = date('Y-m-d H:i:s');
                   
                    $sql = "INSERT INTO  products(pname, pcat, pprice, prating, pstock, pimage, pdetails)VALUES('$pname', '$pcat','$pprice', '$prating', '$pstock','$pic', '$content ')";

                    $result = mysqli_query($conn, $sql);
                    if($result){
                        $_SESSION['success'] = "New product have ben added successfully";
                        header("location: ../addProduct.php");
                        return false;
                    }else{
                        $_SESSION['error'] = "error creating product";
						header("location: ../addProduct.php");
						return false;
                    }
                }else{
                    $_SESSION['error'] = "error uploading product image";
                    header("location: ../addProduct.php");
                    return false;
                }
        }else{
            $_SESSION['error'] = "product image is too large";
            header("location: ../addProduct.php");
			return false;
        }
     }else{
        $_SESSION['error'] = "Unsupported file format";
        header("location: ../addProduct.php");
        return false;
     }
 }else{
    $_SESSION['error'] = "Please Upload an image";
    header("location: ../addProduct.php");
    return false;
 }
 }else{
    $_SESSION['error'] = "Please login first";
    header("location: ../index.php");
    return false;
 }
 
 function trimData($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);

    return $data;
}

?>