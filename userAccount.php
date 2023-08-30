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
     background-color: var(--card-bg);
     padding: 20px;
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
   .account__right__wrapper{
     display: flex;
     column-gap: 2rem;
     justify-content: space-between;
   }
   .account__right-1, .account__right-2{
     /* width: 50%; */
     border: 1px solid #ccc;
     /* padding: 20px; */
     width: 100%;
     margin-top: 30px;
     border-radius: 5px;
   }
   .account__right-1 h3, .account__right-2 h3{
     font-size: 15px;
     border-bottom: 1px solid #ccc;
     padding: 10px;
   }
   .account__right-1 p, .account__right-2 p{
     padding: 10px;
   }
   
</style>
<div class="all__account">
     <div class="container">
          <div class="account__wrapper">
              <div class="account__left">
                   <div class="account__left-1 main__account">
                        <p><i class="ri-user-received-2-fill"></i></p>
                        <h3><a href="./userAccount.php">My Pizza<span class="highlight">Store</span> Account</a></h3>
                   </div>
                   <div class="account__left-1">
                        <p><i class="ri-truck-line"></i></p>
                        <a href="./myOrders.php"><h3>My orders</h3></a>
                   </div>
                   <div class="account__left-1">
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
                     <h3>Account overview</h3>
                     <div class="account__right__wrapper">
                         <div class="account__right-1">
                             <h3>Account Details</h3>
                             <p>Daniel Ezeali</p>
                             <p>daniel@gmail.com</p>
                         </div>
                         <div class="account__right-2">

                              <h3>Address Book</h3>
                              <p>Your default shipping address:</p>
                             <p>Daniel Ezeali</p>
                             <p>Opposite Government house</p>
                             <p>08024756185</p>
                         </div>
                     </div>
              </div>
          </div>
     </div>
</div>
<?php
  require_once('./home_footer.php');
?>