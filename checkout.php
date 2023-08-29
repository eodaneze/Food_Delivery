<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');
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
                          <p><i class="ri-checkbox-circle-fill"></i> <strong>Address: </strong> No 5 road Abakaliki</p>
                          <p><i class="ri-checkbox-circle-fill"></i> <strong>Phone: </strong> +2348164869025</p>
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
                    <h3>1 items</h3>
                    <div class="checkout__items">
                        <div class="checkout__item-left">
                            <img src="./assets/images/product-01.png" alt="">
                            <h3>Papporoni Pizza</h3>
                        </div>
                        <div class="checkout__item-right">
                           <h3>$340.00</h3>
                        </div>
                    </div>
                    <div class="checkout__items">
                        <div class="checkout__item-left">
                            <img src="./assets/images/product-01.png" alt="">
                            <h3>Papporoni Pizza</h3>
                        </div>
                        <div class="checkout__item-right">
                           <h3>$340.00</h3>
                        </div>
                    </div>
                    <div class="checkout__total">
                         <div class="totals">
                             <h3>SUBTOTAL</h3>
                             <h3>$23.00</h3>
                         </div>
                         <div class="totals">
                             <h3>SUBTOTAL</h3>
                             <h3>$23.00</h3>
                         </div>
                         <div class="totals">
                             <h3>SUBTOTAL</h3>
                             <h3>$23.00</h3>
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