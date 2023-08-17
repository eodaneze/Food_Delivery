<?php
  require_once('./home_header.php');
  require_once('./home_navbar.php');
?>
<style>
    .register-main{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container-main{
        background-color: #f0f0f0;
        width: 40%;
        padding: 30px;
        border-radius: 5px;
    }
    .register-content h1{
        color: #13252F;
        font-weight: bold;
        text-align: center;
    }
    .form-1{
        margin-top: 30px;
    }
    .form-1 input{
        width: 500px;
        padding: 15px 8px;
        background-color: transparent;
        border: 1px solid #ccc;
    }
    .form-1 input:focus{
      outline: 1px solid #A0FD69;
        border: none;
    }
    .form-1 button{
        width: 100%;
        padding: 15px 8px;
        background-color: #13252F;
        color: white;
        text-transform: uppercase;
        border: none;
        font-weight: 500;
        font-size: 20px;
    }
</style>
  <section class="all-register">
      <div class="container container-main">
            <div class="register-main">
                  <div class="register-content">
                        <h1>Admin Register</h1>
                        <div class="register-form">
                              <div class="form-1">
                                  <input type="text" placeholder="Enter Name">
                              </div>
                              <div class="form-1">
                                  <input type="email" placeholder="Enter Email">
                              </div>
                              <div class="form-1">
                                  <input type="password" placeholder="Enter Password">
                              </div>
                              <div class="form-1">
                                  <button>Register</button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
  </section>
<?php
  require_once('./home_footer.php');

?>