<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');


  if(isset($_SESSION['userId'])){
     $user_id = $_SESSION['userId'];
     $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $name = $row['name'];
     $email = $row['email'];
     $address = $row['address'];
     $phone = $row['phone'];
 
 
     $countOrder = "SELECT COUNT(*) AS product_order FROM orders WHERE user_id = '$user_id'";
     $countResult = mysqli_query($conn, $countOrder);
     $countRow = mysqli_fetch_assoc($countResult);
     $orderCount = $countRow['product_order'];
     
   }
?>


<style>
   .account__wrapper{
    display: flex;
    gap: 3rem;
    margin: 8% 0;
   } 
   .account__left{
     width: 40%;
     background-color: var(--card-bg);
     height: 50vh;
     border-radius: 5px;
   }
   .account__right{
     width: 60%;
   }
   .account__left-1{
    display: flex;
    align-items: center;
    padding: 10px;
    margin-bottom: 10px;
    
   }
   .account__left-1 h3{
    margin-left: 15px;
    color: white;
    font-size: 16px;
   }
   .account__left-1 p{
    display: flex;
    align-items: center;
    justify-content: center;
   }
   .account__left-1 p i{
    background-color: #f0f0f0;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
   }
   .main__account p i{
    background-color: var(--primary-color);
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
   }
   .main__account{
     background-color: #f0f0f0;
     border-radius: 5px 5px 0 0;
     /* padding: 10px; */
   }
   .main__account h3{
    color: black;
   }

   .order__wrapper{
     display: flex;
     justify-content: space-between;
     margin-bottom: 20px;
   }
   .order__left{
     display: flex;
   }
   .order__img img{
     width: 100px;
   }
   .order__name p span{
     display: block;
   }
   .account__right h3{
     border-bottom: 1px solid #ccc;
     padding-bottom: 15px;
     margin-bottom: 20px;
   }
   .order__name p span button{
     border: none;
     padding: 8px 10px;
     border-radius: 5px;
     /* background-color: red; */
     color: white;
   }
   .pending{
    background-color: red;
   }
   .approved{
    background-color: green;
   }
   .shipped{
    background-color: #69D2F2;
   }
</style>
<div class="all__account">
     <div class="container">
          <div class="account__wrapper">
              <div class="account__left">
                   <div class="account__left-1">
                        <p><i class="ri-user-received-2-fill"></i></p>
                        <h3><a href="./userAccount.php">My Pizza<span class="highlight">Store</span> Account</a></h3>
                   </div>
                   <div class="account__left-1  main__account">
                        <p><i class="ri-truck-line"></i></p>
                        <a href=""><h3>My orders</h3></a>
                   </div>
                   <div class="account__left-1">
                        <p><i class="ri-heart-line"></i></p>
                        <a href="./wishList.php"><h3>Saved items</h3></a>
                        
                   </div>
                   <div class="account__left-1">
                        <p><i class="ri-close-line"></i></p>
                        <h3>Close Account</h3>
                   </div>
                   <div class="account__left-1">
                        <p><i class="ri-logout-box-line"></i></p>
                        <h3>Logout</h3>
                   </div>
              </div>
              <div class="account__right">
                    <h3>Orders (<?=$orderCount?> items)</h3>
                      <?php
                          $sql = "SELECT * FROM orders WHERE user_id = '$user_id'";
                          $result = mysqli_query($conn, $sql);
                          if(mysqli_num_rows($result) > 0){

                             $num = 1;
                             while($row = mysqli_fetch_assoc($result)){
                                 
                                 $product_id = $row['product_id'];
                                 $order_id = $row['order_id'];
                                 $ref_id = $row['ref_id'];
                                 $price = $row['price'];
                                 $status = $row['status'];
                                 
                                //  get user details
                                 $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
                                 $userResult = mysqli_query($conn, $userSql);
                                 $userRow = mysqli_fetch_assoc($userResult);
                                 $uname = $userRow['name'];
                                
                                //  get product details
 
                                    $productSql = "SELECT * FROM products WHERE product_id = '$product_id'";
                                    $productResult = mysqli_query($conn, $productSql);
                                    $productRow = mysqli_fetch_assoc($productResult);
                                    $pimage = $productRow['pimage'];
                                    $pname = $productRow['pname'];

                                    ?>
                                    <div class="order__wrapper">
                                          <div class="order__left">
                                              <div class="order__img">
                                                    <img src="./includes/productImg/<?=$pimage?>" alt="">
                                              </div>
                                              <div class="order__name">
                                                   <p>
                                                        <span><?=$pname?></span>
                                                        <span>Order Id: <?=$ref_id?></span>
                                                        <span><button class="<?=$status == 'Pending' ? 'pending' : ($status == 'Approved' ? 'approved' : 'shipped')?>"><?=$status?></button></span>
                                                   </p>
                                              </div>
                                          </div>
                                          <div class="order__right">
                                              <p>See Details</p>
                                          </div>
                                    </div>
                                    
                                    <?php
                             }
                          }else{
                              echo 'No order yet!!';
                          }
                      
                      
                      ?>
                   
              </div>
          </div>
     </div>
</div>
<?php
  require_once('./home_footer.php');
?>