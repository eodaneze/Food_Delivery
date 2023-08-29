<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');
?>

<div class="all__carts">
     <div class="container">
         <div class="cart__wrapper">
             <div class="cart__left">
                <div class="cart__top">

                    <h3>shopping Cart</h3>
                    <p>3 items</p>
                </div>
                <div class="cart__items">
                     <div class="cart__img-name">
                          <img src="./assets/images/product-01.png" alt="">
                          <h3>Papporoni Pizza</h3>
                     </div>
                     <div class="item__price">
                         <h3>$400.00</h3>
                     </div>
                     <div class="item__operations">
                          <a href=""><i class="ri-delete-bin-2-line" title="Delete cart"></i></a>
                          <a href=""><i class="ri-heart-add-fill" title="Save for later"></i></a>
                     </div>
                </div>
                <div class="cart__items">
                     <div class="cart__img-name">
                          <img src="./assets/images/product-01.png" alt="">
                          <h3>Papporoni Pizza</h3>
                     </div>
                     <div class="item__price">
                         <h3>$400.00</h3>
                     </div>
                     <div class="item__operations">
                          <a href=""><i class="ri-delete-bin-2-line" title="Delete cart"></i></a>
                          <a href=""><i class="ri-heart-add-fill" title="Save for later"></i></a>
                     </div>
                </div>
             </div>
             <div class="cart__right">
                    <h3>Cart Summary</h3>
                    <div class="cart__right__item-price">
                         <h4>Items (3)</h5>
                         <h4>$500.00</h4>
                    </div>
                    <div class="cart__right__item-price">
                         <h4>Shipping Fee</h5>
                         <h4>$00.00</h4>
                    </div>
                    <div class="cart__right__item-price">
                         <h4>Total</h5>
                         <h4>$500.00</h4>
                    </div>
                    <div class="checkout__btn">
                          <button><a href="">Check out</a></button>
                    </div>
             </div>
         </div>
     </div>
</div>
<?php
  require_once('./home_footer.php');
//   require_once('./home_navbar.php');
?>