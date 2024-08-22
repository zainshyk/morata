<?php
include 'conn.php';
if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `products` WHERE ID = '$remove_id'");
  header('location:allproducts.php');
};
?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
    <title>ALL PRODUCTS</title>

    <!-- Other Files Links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@500&display=swap"
           rel="stylesheet">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/allproducts.css">
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <?php
include 'bar.php';
?>

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>All Products</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="admin.php">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#0">Products</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        All Products
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- All Products -->
              <?php
      include 'conn.php';

      $display = "SELECT * FROM `products`";
      $display = mysqli_query($conn, $display);
      if(mysqli_num_rows($display) > 0){
      while($result = mysqli_fetch_assoc($display)){

      ?>
              <div class="col-3 mb-3">
                    <form action="" method="POST">
                  <div class="card card1 border-0" style="width: 13rem;">
                    <div class="change">
                    <a href=""><img src="upload/<?php echo $result['Image1'];  ?>" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                    <img src="upload/<?php echo $result['Image2'];  ?>" class="card-img-top pt-2 ps-2 pe-2 " height="200"></a>
                    <div class="discount">
                      <p>-25%</p>
                  </div>
                  <div class="quickwish">
                  <a href="updateproduct.php?ID=<?php echo $result ['ID']; ?> "><p><i class="fa-regular fa-eye"></i></p></a><br>
                    <a href="updateproduct.php?ID=<?php echo $result ['ID']; ?> " class="mt-2"><p><i class="fa-regular fa-eye"></i></p></a><br>
                    <a href="allproducts.php?remove=<?php echo $result ['ID']; ?>" onclick="return confirm('Remove item from Products?')" class="mt-2"><p><i class="fa-regular fa-eye"></i></p></a>
                  </div>
                  </div>
                    <div class="card-body">
                      <small class="card-text mb-1"><?php echo $result['Product']?></small><br>
                      <div class="d-flex ">
                      <p class="mb-1 mt-1"><i class="fa-solid fa-star" style="color: #FFD43B;"></i></p>
                      <p class="mb-1 mt-1"><i class="fa-solid fa-star" style="color: #FFD43B;"></i></p>
                      <p class="mb-1 mt-1"><i class="fa-solid fa-star" style="color: #FFD43B;"></i></p>
                      <p class="mb-1 mt-1"><i class="fa-solid fa-star" style="color: #FFD43B;"></i></p>
                      <p class="mb-1 mt-1"><i class="fa-regular fa-star-half-stroke" style="color: #FFD43B;"></i> (1 review)</p>
                    </div>
                      <span class="card-subtitle">Rs: <?php echo $result['Price']?></span><br>
                      <input type="hidden" name="image1" value="<?php echo $result['Image1']; ?>">
                                <input type="hidden" name="image2" value="<?php echo $result['Image2']; ?>">
                                <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                                <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                                <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                                <input type="hidden" name="price" value="<?php echo $result['Price']; ?>">
                      <input class="botun" type="submit" value="View Product">
                    </div>
                  </div>
                  </form>
                </div>
                <?php
                    };
                  };
                    ?>

                



              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
