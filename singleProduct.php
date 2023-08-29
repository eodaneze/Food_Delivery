<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $pic = $row['pimage'];
    $pname = $row['pname'];
    $pprice = $row['pprice'];
    $prating = $row['prating'];
    $pcat = $row['pcat'];
    $pstock = $row['pstock'];
    $pdetails = $row['pdetails'];
    $id = $row['product_id'];
  }

  if(isset($_GET['category'])){
    $getCat = $_GET['category'];
  }
?>

<div class="all__product">
     <div class="container">
         <form action="./includes/cart.php" method="post" class="product__wrapper">
              <div class="product__img">
                  <img src="./includes/productImg/<?=$pic?>" alt="">
              </div>
              <div class="product__content">
                   <h3><?=$pname?></h3>
                   <div class="ratings">
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-s-fill"></i></span>
                    <span><i class="ri-star-half-s-line"></i></span>
                    <input type="hidden" name="product_id" value='<?=$id?>'>
                  </div>
                  <div class="description">
                      <h3><i class="ri-indent-decrease"></i> Description</h3>
                      <p><?=$pdetails?></p>
                      <button name="addToCart" class="learn__more">Add to cart</button>
                  </div>
              </div>
          </form>
         <div class="related__product">
              <div class="related__top">
                  <h3>Related Products</h3>
                  <p>View More <i class="ri-arrow-right-line"></i></p>
              </div>
              <div class="menu__wrapper">
                <?php  
                   $sql = "SELECT * FROM products WHERE pcat = '$getCat'";
                   $result = mysqli_query($conn, $sql);
                   while($row = mysqli_fetch_assoc($result)){
                    $pic = $row['pimage'];
                    $pname = $row['pname'];
                    $pprice = $row['pprice'];
                      ?>
                      
                      <div class="menu__item">
                        <div class="menu__img">
                          <img src="./includes/productImg/<?=$pic?>" alt="" />
                        </div>
          
                        <h3><?=$pname?></h3>
                        <div class="menu__card-bottom">
                          <div>
                            <div class="ratings">
                              <span><i class="ri-star-s-fill"></i></span>
                              <span><i class="ri-star-s-fill"></i></span>
                              <span><i class="ri-star-s-fill"></i></span>
                              <span><i class="ri-star-s-fill"></i></span>
                              <span><i class="ri-star-half-s-line"></i></span>
                            </div>
                            <span class="dish__price">$<?=number_format($pprice, 2)?></span>
                          </div>
          
                          <button>
                             <span class="add__to-cart"><i class="ri-shopping-cart-line"></i></span>
                          </button>
                        </div>
                      </div>
                      <?php
                   }
                
                ?>
          </div>
         </div>
     </div>
</div>
<?php
  require_once('./home_footer.php');
//   require_once('./home_navbar.php');
?>