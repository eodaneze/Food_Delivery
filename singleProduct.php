<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');
?>

<div class="all__product">
     <div class="container">
         <div class="product__wrapper">
              <div class="product__img">
                  <img src="./assets/images/product-01.png" alt="">
              </div>
              <div class="product__content">
                   <h3>This is the product name</h3>
                   <div class="ratings">
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-half-s-line"></i></span>
                  </div>
                  <div class="description">
                      <h3><i class="ri-indent-decrease"></i> Description</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consequuntur illum est sit eum quo dolor necessitatibus laudantium molestiae obcaecati nesciunt, dicta sed, pariatur eos totam reprehenderit explicabo ducimus officiis nulla vel voluptatem, libero itaque omnis? Suscipit sunt unde, eaque ratione voluptas similique eius accusantium dolorum quidem aliquid quaerat nobis.</p>
                      <button class="learn__more"><a href="#">Add to cart</a></button>
                  </div>
              </div>
         </div>
         <div class="related__product">
              <div class="related__top">
                  <h3>Related Products</h3>
                  <p>View More <i class="ri-arrow-right-line"></i></p>
              </div>
              <div class="menu__wrapper">
            <div class="menu__item">
              <div class="menu__img">
                <img src="./assets/images/product-01.png" alt="" />
              </div>

              <h3>American Pasta</h3>
              <div class="menu__card-bottom">
                <div>
                  <div class="ratings">
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-half-s-line"></i></span>
                  </div>
                  <span class="dish__price">$29.99</span>
                </div>

                <span class="add__to-cart"
                  ><i class="ri-shopping-cart-line"></i
                ></span>
              </div>
            </div>

            <div class="menu__item">
              <div class="menu__img">
                <img src="./assets/images/product-02.png" alt="" />
              </div>

              <h3>Quintao Nuts</h3>
              <div class="menu__card-bottom">
                <div>
                  <div class="ratings">
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-half-s-line"></i></span>
                  </div>
                  <span class="dish__price">$39.99</span>
                </div>

                <span class="add__to-cart"
                  ><i class="ri-shopping-cart-line"></i
                ></span>
              </div>
            </div>

            <div class="menu__item">
              <div class="menu__img">
                <img src="./assets/images/product-03.png" alt="" />
              </div>

              <h3>Buzz Noodles</h3>
              <div class="menu__card-bottom">
                <div>
                  <div class="ratings">
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-half-s-line"></i></span>
                  </div>
                  <span class="dish__price">$9.99</span>
                </div>

                <span class="add__to-cart"
                  ><i class="ri-shopping-cart-line"></i
                ></span>
              </div>
            </div>
          </div>
         </div>
     </div>
</div>
<?php
  require_once('./home_footer.php');
//   require_once('./home_navbar.php');
?>