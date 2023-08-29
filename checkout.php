<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');
  if(isset($_SESSION['userId'])){
    $id = $_SESSION['userId'];
    $sql3 = "SELECT COUNT(*) AS carts FROM cart WHERE user_id = '$id'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
    $count = $row3['carts'];

    $userSql = "SELECT * FROM user WHERE user_id = '$id'";
    $userResult = mysqli_query($conn, $userSql);
    $userRow = mysqli_fetch_assoc($userResult);
    $address = $userRow['address'];
    $phone = $userRow['phone'];
    $email = $userRow['email'];
    $uname = $userRow['name'];
  }
?>
<style>
  /* checkout page */
.checkout__wrapper{
  display: flex;
  column-gap: 2rem;
  margin: 5% 0;
}
.checkout__left, .checkout__right{
  width: 50%;
}
/* .customer__details{
  display: flex;
  align-items: center;
  justify-content: center;
} */
.customer__details p{
  display: flex;
  align-items: center;
  /* justify-content: center; */
}
.customer__details p span{
  background-color: var(--primary-color);
  width: 3rem;
  height: 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}
.customer__details{
  display: flex;
  column-gap: 1rem;
  border-bottom: 1px solid #acb2b2;
  padding-bottom: 20px;
  margin: 30px 0;
}
.customer__details div p i{
  color: var(--primary-color);
  margin-right: 10px;
}
.customer__details div p strong{
  margin-right: 10px;
}
.checkout__right{
  background-color: var(--card-bg);
  border-radius: 5px;
  height: fit-content;
  padding: 20px;
}
.checkout__right-top{
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #ccc;
  padding-bottom: 20px;
  margin-bottom: 30px;
}
.checkout__items{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 25px;
}
.checkout__items:last-child{
  border-bottom: 1px solid #ccc;
  padding-bottom: 20px;
}
.checkout__total{
  margin-top: 30px;
}
.totals{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}
.totals h3{
  font-size: 16px;
}
.checkout__item-left{
  display: flex;
  align-items: center;
}
.checkout__item-left img{
  width: 100px;
}
.checkout__btn{
  margin-top: 30px;
}
.checkout__btn button{
  width: 100%;
  padding: 10px 0;
  background-color: var(--primary-color);
  color: var(--secondary-color);
  font-size: 16px;
  text-transform: uppercase;
  font-weight: bold;
  border: none;
}
</style>
<div class="all-checkout">
      <div class="container">
           <div class="checkout__wrapper">
              <div class="checkout__left">
                 <div class="customer__details">
                      <div>
                      <p><span style="color: black; font-size: 16px; font-weight: bold">1</span></p>
                      </div>
                      <div>
                          <h3>Customer</h3>
                          <p>Checking out as a Guest? You’ll be able to save your details to create an account with us later.</p>
                          <p><i class="ri-checkbox-circle-fill"></i> <strong>Name: </strong> <?=$name?></p>
                          <p><i class="ri-checkbox-circle-fill"></i> <strong>Address: </strong> <?=$address?></p>
                          <p><i class="ri-checkbox-circle-fill"></i> <strong>Phone: </strong> <?=$phone?></p>
                      </div>
                 </div>
                 <div class="customer__details" style="align-items: center;">
                      <div>
                      <p><span style="color: black; font-size: 16px; font-weight: bold; background: #f0f0f0">2</span></p>
                      </div>
                      <div>
                          <h3>Shipping</h3>
                          
                      </div>
                 </div>
                 <div class="customer__details" style="align-items: center;">
                      <div>
                      <p><span style="color: black; font-size: 16px; font-weight: bold; background: #f0f0f0">3</span></p>
                      </div>
                      <div>
                          <h3>Billing</h3>
                          
                      </div>
                 </div>
                 <div class="customer__details" style="align-items: center;">
                      <div>
                      <p><span style="color: black; font-size: 16px; font-weight: bold; background: #f0f0f0">4</span></p>
                      </div>
                      <div>
                          <h3>Payment</h3>
                          
                      </div>
                 </div>
              </div>
              <div class="checkout__right">
                    <div class="checkout__right-top">
                       <h3>Order Summary</h3>
                       <a href="">Edit cart</a>
                    </div>
                    <h3><?=$count?> items</h3>
                    <?php 
                         if(isset($_SESSION['userId'])){
                          $user_id = $_SESSION['userId'];
                          // $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
                          // $userResult = mysqli_fetch_assoc($conn, $userSql);
                          // $userRow =
                          $sql = "SELECT product_id, quantity FROM cart WHERE user_id = '$user_id' ORDER BY created_at DESC";
                          $result = mysqli_query($conn, $sql);
                          // $tprice = 0;
                          $subTotal = 0;
                          while($row = mysqli_fetch_assoc($result)){
                          $id = $row['product_id'];
                          $sql2 = "SELECT * FROM products WHERE product_id = '$id'";
                          $result2 = mysqli_query($conn, $sql2);
                          $row2 = mysqli_fetch_assoc($result2);
                          $name = $row2['pname'];
                          $pimage = $row2['pimage'];
                          $pprice = $row2['pprice'];
                          
                          $subTotal = $subTotal + $pprice;

                             ?>
                             
                             <div class="checkout__items">
                                 <div class="checkout__item-left">
                                     <img src="./includes/productImg/<?=$pimage?>" alt="">
                                     <h3><?=$name?></h3>
                                 </div>
                                 <div class="checkout__item-right">
                                    <h3>$<?=number_format($pprice, 2)?></h3>
                                 </div>
                             </div>
                             <?php
                          }
                       }
                    
                    
                    ?>
                    
                    <div class="checkout__total">
                         <div class="totals">
                             <h3>SUBTOTAL</h3>
                             <h3>$<?=number_format($subTotal, 2)?></h3>
                         </div>
                         <div class="totals">
                             <h3>Shippig</h3>
                             <h3>$3.00</h3>
                         </div>
                         <div class="totals">
                             <h3>Tax</h3>
                             <h3>$3.00</h3>
                         </div>
                         <div class="totals">
                             <h3>TOTAL</h3>
                             <h3>$<?=number_format($subTotal, 2)?></h3>
                         </div>
                    </div>
                    <div class="checkout__btn">
                          <button>Check out</button>
                    </div>
              </div>    
           </div>
      </div>
</div>
<?php
  require_once('./home_footer.php');
  
?>