<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');

  if(isset($_SESSION['userId'])){
    $id = $_SESSION['userId'];
    $sql3 = "SELECT COUNT(*) AS carts FROM cart WHERE user_id = '$id'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
    $count = $row3['carts'];
  }
?>

<div class="all__carts">
     <div class="container">
         <div class="cart__wrapper">
             <div class="cart__left">
                <div class="cart__top">

                    <h3>shopping Cart</h3>
                    <p><?=$count?> items</p>
                </div>
                  <?php   
                     if(isset($_SESSION['userId'])){
                        $user_id = $_SESSION['userId'];
                        $sql = "SELECT product_id FROM cart WHERE user_id = '$user_id' ORDER BY created_at DESC";
                        $result = mysqli_query($conn, $sql);
                        $total = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['product_id'];
                            $sql2 = "SELECT * FROM products WHERE product_id = '$id'";
                            $result2 = mysqli_query($conn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            $name = $row2['pname'];
                            $pimage = $row2['pimage'];
                            $pprice = $row2['pprice'];
                            $total = $total + $pprice;

                            ?>
                            
                            
                                <div class="cart__items">
                                    <div class="cart__img-name">
                                        <img src="./includes/productImg/<?=$pimage?>" alt="">
                                        <h3><?=$name?></h3>
                                    </div>
                                    <div class="item__price">
                                        <h3>$<?=number_format($pprice, 2)?></h3>
                                    </div>
                                    <div class="item__operations">
                                        <a href="./includes/deleteCart.php?id=<?=$id?>"><i class="ri-delete-bin-2-line" title="Delete cart"></i></a>
                                        <a href=""><i class="ri-heart-add-fill" title="Save for later"></i></a>
                                    </div>
                                </div>
                            <?php

                        }
                     }
                  
                  ?>
             
             </div>
             <div class="cart__right">
                    <h3>Cart Summary</h3>
                    <div class="cart__right__item-price">
                         <h4>Items (<?=$count?>)</h5>
                         <h4>$<?=number_format($total, 2)?></h4>
                    </div>
                    <div class="cart__right__item-price">
                         <h4>Shipping Fee</h5>
                         <h4>$00.00</h4>
                    </div>
                    <div class="cart__right__item-price">
                         <h4>Total</h5>
                         <h4>$<?=number_format($total, 2)?></h4>
                    </div>
                    <div class="checkout__btn">
                          <button><a href="">Check out</a></button>
                    </div>
             </div>
         </div>
     </div>
</div>
<?php
  require_once('./alertify.php');
  require_once('./home_footer.php');
?>