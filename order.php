<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');
  
 

?>

<main class="main" id="main">
      <div class="pagetitle">
            <h1>All Orders</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="row">
           <div class="col-lg-6 mb-4">
                <input type="search" name="search" class="form-control" placeholder="search order by order id">
           </div>
          
        </div>
        <div class="table-responsive bg-white shadow">
              <table class="table table-bordered ">
                  <thead>
                       <tr align="center">
                          <th>S/N</th>
                          <th>Customer</th>
                          <th>product</th>
                          <th>Order_ref</th>
                          <th>product Name</th>
                          <th>Price</th>
                          <th>Status</th>
                       </tr>
                  </thead>
                  <tbody>
                      <?php
                           
                            $sql = "SELECT * FROM orders";
                             $result = mysqli_query($conn, $sql);
                             $num = 1;
                             while($row = mysqli_fetch_assoc($result)){
                                 $user_id = $row['user_id'];
                                 $product_id = $row['product_id'];
                                 $status = $row['status'];
                                 $order_id = $row['order_id'];
                                 $ref_id = $row['ref_id'];
                                 $price = $row['price'];
                                 
                                //  get user details
                                 $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
                                 $userResult = mysqli_query($conn, $userSql);
                                 $userRow = mysqli_fetch_assoc($userResult);
                                 $uname = $userRow['name'];
                                
                                //  get product details

                                    $productSql = "SELECT * FROM products WHERE product_id = '$product_id'";
                                    $productResult = mysqli_query($conn, $productSql);
                                    $productRow = mysqli_fetch_assoc($productResult);
                                    $pimage = $productRow['pimage'];
                                    $pname = $productRow['pname'];
                                    

                                   
                                    
                                 ?>
                                   <form action="./includes/approved_orders.php" method="post">
                                   <tr align="center">
                                      <td><a href=""><?=$num++?></a></td>
                                      <td><?=$uname?></td>
                                      <td class="bg-light"><img style="width: 4rem;" src="./includes/productImg/<?=$pimage?>" alt=""></td>
                                      <td><?=$ref_id?></td>
                                      <td><?=$pname?></td>
                                      <td><i class="fa fa-naira-sign"></i>$<?=number_format($price, 2)?></td>
                                      <td>
                                         
                                          <input name="order_id" type="hidden" value="<?=$order_id?>">
                                          <button class="btn <?=$status == 'Pending'? 'btn-danger':($status == 'Approved' ? 'btn-success': 'btn-info text-white')?>" name="<?=$status == 'Approved' ? 'approved':($status == 'Shipped' ? 'shipped' :($status == 'Pending' ? 'status' : ($status == 'Delivered' ? 'delivered' : '')))?>"><?=$status?></button>
                                          
                                      </td>
                                   </tr>
                                   </form>
                                 <?php
                             }
                             

                    ?>
                  </tbody>
              </table>
        </div>
        
</main>


<?php
require_once('./alertify.php');
  require_once("./footer.php")

?>