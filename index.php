<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php')

?>
  <body>

    <!-- =========== main start ============ -->
    <main>
      <!-- hero section start -->
      <section id="home" class="section">
        <div class="container">
          <div class="hero__wrapper">
            <div class="hero__content">
              <h2 class="hero__title">Today's Special</h2>
              <h2 class="highlight">Italian Pizza</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum
                aliquam quod minima! Vel necessitatibus ratione in unde,
                consequuntur officia illum.
              </p>

              <div class="hero__btns">
                <button class="view__more-btn">View menu</button>
                <span class="play__btn"><i class="ri-play-fill"></i></span>
              </div>
            </div>

            <div class="hero__img">
              <img src="./assets/images/hero-img.png" alt="hero-img" />
            </div>
          </div>
        </div>
      </section>

      <!-- hero section start -->
      <!-- popular dishes section start -->
      <section class="section">
        <div class="container">
          <div class="dishes__section-top">
            <h2>Popular Dishes</h2>
          </div>

          <div class="dishes__wrapper">
              <?php  
                 $sql = "SELECT * FROM products";
                 $result = mysqli_query($conn, $sql);
                 while($row = mysqli_fetch_assoc($result)){
                   $pic = $row['pimage'];
                   $pname = $row['pname'];
                   $pcat = $row['pcat'];
                   $pprice = $row['pprice'];
                   $pstock = $row['pstock'];
                   $id = $row['product_id'];
                    ?>

                      <form class="dish__item">
                        <div class="dish__img">
                          <img src="./includes/productImg/<?=$pic?>" alt="" />
                        </div>

                        <div class="dish__content">
                          <h3><a href="./singleProduct.php?id=<?=$id?>&category=<?=$pcat?>"><?=$pname?></a></h3>
                          <div class="ratings">
                            <span><i class="ri-star-s-fill"></i></span>
                            <span><i class="ri-star-s-fill"></i></span>
                            <span><i class="ri-star-s-fill"></i></span>
                            <span><i class="ri-star-s-fill"></i></span>
                            <span><i class="ri-star-half-s-line"></i></span>
                          </div>

                          <div class="dish__content-bottom">
                            <span class="dish__price">$<?=number_format($pprice, 2)?></span>
                            <span class="add__to-cart"
                              ><i class="ri-shopping-cart-line"></i
                            ></span>
                          </div>
                        </div>
                      </form>
                    <?php

                 }
              
              ?>

           

          
          </div>
        </div>
      </section>

      <!-- popular dishes section end -->
      <!-- about us section start -->
      <section class="section" id="about">
        <div class="container">
          <div class="about__wrapper">
            <div class="about__img">
              <img src="./assets/images/burger.png" alt="" />
            </div>

            <div class="about__content">
              <h3>
                We pride ourselves on making real food from the best
                ingredients.
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                dolorem distinctio. Nulla alias excepturi aliquid.
              </p>

              <button class="learn__more"><a href="#">Learn more</a></button>
            </div>
          </div>
        </div>
      </section>
      <!-- about us section end -->
      <!-- menu section start -->
      <section class="section" id="menu">
        <div class="container">
          <div class="menu__section-top">
            <h2>Special Menu For You</h2>
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
      </section>
      <!-- menu section end -->
      <!-- offer section start -->
      <section class="section">
        <div class="container">
          <div class="offer__wrapper">
            <div class="offer__content">
              <h2>
                Get upto <span class="highlight">50%</span> offer on festival!
              </h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Commodi voluptas eos quidem tempora mollitia iure ratione
                corporis repellendus quasi nemo. Eligendi, repellat. Doloremque
                minus qui obcaecati nemo! Quis, molestiae. Rem?
              </p>

              <button class="view__more-btn">Order Now</button>
            </div>

            <div class="offer__img">
              <img src="./assets/images/offer.png" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- offer section end -->
      <!-- blog section start -->
      <section class="section" id="blog">
        <div class="container">
          <div class="blog__top">
            <h2>Our Top Recipes</h2>
          </div>

          <div class="blog__wrapper">
            <div class="blog__item">
              <div class="blog__img">
                <img src="./assets/images/recipe-01.jpg" alt="" />
              </div>
              <div class="blog__content">
                <h3>Better than takeout sesame chicken</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab,
                  totam!
                </p>

                <a href="#" class="read__more">Read More</a>
              </div>
            </div>

            <div class="blog__item">
              <div class="blog__img">
                <img src="./assets/images/recipe-02.jpg" alt="" />
              </div>
              <div class="blog__content">
                <h3>Better than takeout sesame chicken</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab,
                  totam!
                </p>

                <a href="#" class="read__more">Read More</a>
              </div>
            </div>

            <div class="blog__item">
              <div class="blog__img">
                <img src="./assets/images/recipe-03.jpg" alt="" />
              </div>
              <div class="blog__content">
                <h3>Better than takeout sesame biriyani</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab,
                  totam!
                </p>

                <a href="#" class="read__more">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- blog section end -->
    </main>
    <!-- =========== main end ============ -->

    <?php
      require_once('./alertify.php');
      require_once('./home_footer.php');
    ?>

    <!-- main js file -->
    <script src="./assets/js/app.js"></script>
  </body>
</html>
