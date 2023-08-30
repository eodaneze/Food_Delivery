<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');
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
   
</style>
<div class="all__account">
     <div class="container">
          <div class="account__wrapper">
              <div class="account__left">
                   <div class="account__left-1 ">
                        <p><i class="ri-user-received-2-fill"></i></p>
                        <h3><a href="./userAccount.php">My Pizza<span class="highlight">Store</span> Account</a></h3>
                   </div>
                   <div class="account__left-1">
                        <p><i class="ri-truck-line"></i></p>
                        <a href="./myOrders.php"><h3>My orders</h3></a>
                   </div>
                   <div class="account__left-1 main__account">
                        <p><i class="ri-heart-line"></i></p>
                        <a href="wishList.php"><h3>Saved items</h3></a>
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
                   
              </div>
          </div>
     </div>
</div>
<?php
  require_once('./home_footer.php');
?>