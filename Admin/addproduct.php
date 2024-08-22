<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
    <title>ADD PRODUCT</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/addproduct.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->




    <?php

    include 'conn.php';

    if(isset($_POST['submit'])){
        $Product = $_POST['pname'];
        $Price = $_POST['price'];
        $Description = $_POST['description'];
        $Brand = $_POST['brand'];
        $Category = $_POST['category'];
        $Discount = $_POST['discount'];
        $image1 = $_FILES['image1']; 
        $filename1 = $image1['name'];
        move_uploaded_file($image1['tmp_name'],'upload/'.$filename1);
        $image2 = $_FILES['image2']; 
        $filename2 = $image2['name'];
        move_uploaded_file($image2['tmp_name'],'upload/'.$filename2);

        $insert = "INSERT INTO `products`(`Image1`,`Image2`, `Product`, `Description`, `Price`, `Brand`, `Category`, `Discount`) 
                   VALUES ('$filename1','$filename2','$Product','$Description','$Price','$Brand','$Category','$Discount')";

    $query = mysqli_query($conn , $insert);

    if($query){
          header('location:addproduct.php');
       }

    }

    ?>


















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
                  <h2>Add Product</h2>
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
                        Add Product
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- Add Product -->

              <div class="col-xl-6 col-lg-6 col-md-12">
                <form class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="pname"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name="description"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Brand
                    </label>
                    <input
                      id="name"
                      name="brand"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category" name="category"
                    >
                      <option selected>Select category</option>
                      <option>New Arrival</option>
                      <option>Laptop & iPad</option>
                      <option>Mobile Accesories</option>
                      <option>Watches</option>
                      <option>Electronics</option>
                      <option>Dining & Kitchen</option>
                      <option>Clothing</option>
                      <option>Most Popular</option>
                      <option>Trending</option>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Discount
                          </label>
                          <input
                            id="expire_date"
                            name="discount"
                            type="number"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Price
                          </label>
                          <input
                            id="stock"
                            name="price"
                            type="number"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput1').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput1" name="image1" type="file" style="display:none;" />
                  <input id="fileInput2" name="image2" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput2').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>


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
