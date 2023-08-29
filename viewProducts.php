<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');

?>
<style>
  .product__wrapper{
    display: flex;
  align-items: center;
  column-gap: 1.5rem;
  }
  .product__item{
    width: 33%;
  display: flex;
  column-gap: 1rem;
  cursor: pointer;
  background: white;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  transition: 0.3s;
  }
  .product__img{
    width: 40%;
  }
  .product__img img{
    width: 100%;
  }
  .product__content{
    width: 100%;
  }
  .product__content h3{
    font-size: 20px;
  }
  .product__bottom{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .icons{
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .icons a{
    text-decoration: none;
    color: black;
    display: flex;
    align-items: center;
  }
  .icons a i{
    background-color: #a1ff69;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .icons a:last-child{
    margin-left: 10px;
  }
  .ratings i{
    color: #a1ff69;
  }
</style>
<main class="main" id="main">
    <div class="pagetitle">
            <h1>View Products</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <div class="all__product">
            <div class="product__wrapper">
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
                           
                           <div class="product__item">
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
                                       <!-- <span>(23 reviews)</span> -->
                                   </div>
                                     <div class="product__bottom">
                                         <div class="product__price">
                                             <h3>$<?=number_format($pprice, 2)?></h3>
                                         </div>
                                         <div class="icons">
                                             <a href="./editProduct.php?id=<?=$id?>"><i class="ri-edit-box-line"></i></a>                                                                                               
                                             <a href="./includes/delete.php?id=<?=$id?>"><i class="ri-delete-bin-6-line"></i></a>                                                                                               
                                         </div>
                                     </div>                                                                                                      
           
                               </div>
                           </div>
                        <?php
                     }
                 ?>
                
            </div>
        </div>
</main>

<?php
require_once('./alertify.php');
 require_once("./footer.php")
?>