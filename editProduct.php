<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');


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
?>

<body>
<script src="./tinymce/js/tinymce/tinymce.min.js"></script>
  <script>
    // Initialize TinyMCE
    tinymce.init({
      selector: '#myTextarea',
      height: 300,
      plugins: 'advlist autolink lists link image charmap print preview anchor',
      toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image ',
      menubar: 'file edit view insert format tools table help'
    });
  </script>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

       <form action="./includes/editProduct.php" method="post" enctype="multipart/form-data">
        <div class="row bg-white shadow p-3">
           <div class="col-lg-6 mb-3">
              <label>Product Name</label>
               <input type="text" name="pname" class="form-control" value="<?=$pname?>">
           </div>
           <div class="col-lg-6 mb-3">
              <label>Product Category</label>
               <select name="pcat" class="form-control">
                <option selected><?=$pcat?></option>
                <option>Orange</option>
                <option>Grapes</option>
                <option>Vegetable</option>
               </select>
           </div>
           <div class="col-lg-6 mb-3">
              <label>
                Product Rating
                 (<?php
                        if($prating == 5){
                           ?>
                               <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                
                           <?php
                        }elseif($prating == 4){
                            ?>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                
                             <?php
                        }elseif($prating == 3){
                            ?>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                
                             <?php
                        }elseif($prating == 2){
                            ?>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                
                             <?php
                        }elseif($prating == 1){
                            ?>
                                <i class="fa fa-star" style="color: #E74735;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                <i class="fa fa-star" style="color: #f0f0f0;"></i>
                                
                             <?php
                        }else{
                            echo "no review yet!!";
                        }
                 ?>)
                
              </label>
               <input type="number" name="prating" class="form-control" value="<?=$prating?>">
           </div>
           <div class="col-lg-6 mb-3">
              <label>In Stock</label>
               <input type="number" name="pstock" class="form-control" value="<?=$pstock?>">
           </div>
           <div class="col-lg-6 mb-3">
              <label>Product Price</label>
               <input type="number" name="pprice" class="form-control" value='<?=$pprice?>'>
               <input type="hidden" name="product_id" value="<?=$id?>">
               <input type="hidden" name="photo" value="<?=$pic?>">
           </div>
           <div class="col-lg-6 mb-3">
              <label class="mb-3"><img style="height: 50px; width: 150px" src="./includes/productImg/<?=$pic?>" alt=""></label>
               <input type="file" name="file" class="form-control">
           </div>
           <div class="col-lg-12 mb-3">
                  <label class="fw-bold">Product Details</label>
                  <textarea id="myTextarea"  name="pdetails" id="" cols="30" rows="10" class="form-control"><?=$pdetails?></textarea>
              </div>
              <div class="col-lg-4">
                   <button name="update" style="background-color: #E6392D; border: none; padding: 10px 30px; color: white; text-transform: uppercase; border-radius: 50px">Update Product</button>
              </div>
        </div>
       </form>

    </main><!-- End #main -->
    <?php
     require_once('./alertify.php');
     require_once('./footer.php');
?>
</body>

</html>