<?php
  require_once('./includes/connection.php');
  if(isset($_SESSION['userId'])){
    $id = $_SESSION['userId'];
    $sql3 = "SELECT COUNT(*) AS carts FROM cart WHERE user_id = '$id'";
        $result3 = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        $count = $row3['carts'];
  }
?>
<header class="header" style="position: sticky; top: 0; background: #13252f">
      <nav class="nav">
        <div class="container">
          <div class="nav__wrapper">
            <div class="logo">
              <a href="./index.php"><h1>Pizza<span class="highlight">Store</span></h1></a>
            </div>

            <div class="navigation">
              <ul class="nav__menu">
                <li class="nav__item">
                  <a href="#home" class="nav__link">Home</a>
                </li>
                <li class="nav__item">
                  <a href="#menu" class="nav__link">Menu</a>
                </li>
                <li class="nav__item">
                  <a href="#about" class="nav__link">About Us</a>
                </li>
                <li class="nav__item">
                  <a href="#blog" class="nav__link">Blog</a>
                </li>
                <li class="nav__item" style="display: flex; align-items: center; justify-content: center">
                  <span><i class="ri-account-circle-fill" style="color: white; font-size: 30px; position: relative; top: 5px; margin-right: 10px"></i></span>
                  <?php  
                     if(isset($_SESSION['userId'])){
                        $user_id = $_SESSION['userId'];
                        $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['name'];
                        $getName = explode(' ', $name);
                        $getFirstName = $getName[0];
                        ?>
                            <a href="" class="nav__link">Welcome <?=$getFirstName?> |</a>
                            <a href="./includes/logout.php" class="nav__link logout">Logout</a>
                        <?php
                     }else{
                         ?>
                            <a href="./userRegister.php" class="nav__link">Register | </a>
                          <a href="./userLogin.php" class="nav__link">Login</a>
                       <?php
                     }
                  ?>
                </li>
                <span>

                  <?php
                    if(isset($_SESSION['userId'])){
                      $id = $_SESSION['userId'];
                      $sql3 = "SELECT COUNT(*) AS carts FROM cart WHERE user_id = '$id'";
                          $result3 = mysqli_query($conn, $sql3);
                          $row3 = mysqli_fetch_assoc($result3);
                          $count = $row3['carts'];
                          ?><a href="./carts.php"> <i style="font-size: 30px; color: white" class="ri-shopping-bag-line"><sup style="color: #A1FF69"><?=$count?></sup></i></a><?php
                    }else{
                         ?><a href="./carts.php"> <i style="font-size: 30px; color: white" class="ri-shopping-bag-line"><sup style="color: #A1FF69">0</sup></i></a><?php
                      }

                  ?>
                </span>
              </ul>
            </div>

            <span class="mobile__menu"><i class="ri-menu-line"></i></span>
          </div>
        </div>
      </nav>
    </header>

    <script>
        const navJs = document.querySelector('.nav_js');
        const navJs2 = document.querySelector('.nav_js2');
        const logout = document.querySelector('.logout');
        navJs.addEventListener(('click'), () => {
              window.location.href = 'userRegister.php'
        })
        navJs2.addEventListener(('click'), () => {
              window.location.href = 'userLogin.php'
        })
        logout.addEventListener(('click'), () => {
              window.location.href = './includes/logout.php'
        })
    </script>