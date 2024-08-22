<?php

session_start();

if(!isset($_SESSION['aid'])){
}
else{
 $aid=$_SESSION['aid'];
 $Name=$_SESSION['name'];
 $Emails=$_SESSION['email'];
}


?>



<?php

include 'Admin/conn.php';

if(isset($_SESSION['email'])) {
$userid = $_SESSION['email'];
$query = "SELECT * FROM `users` WHERE Email = '$userid'";
$query = mysqli_query($conn, $query);
$row =mysqli_fetch_array($query);
if($row) {
  $user = $row['ID'];
} else {
}
}



if(isset($_POST['addtocart'])){

   $Image1 = $_POST['image1'];
   $Product = $_POST['product'];
   $Category = $_POST['category'];
   $Brand = $_POST['brand'];
   $Price = $_POST['price'];
   $Quantity = 1;

   $cart = "SELECT * FROM `cart` WHERE Product = '$Product' && User = '$user'";
   $cart = mysqli_query($conn, $cart);

   if(mysqli_num_rows($cart) > 0){
      $message[] = 'product already added to cart';
      header('location:products.php');
   }else{
      $insert_product = "INSERT INTO `cart`(`User`,`Image1`,`Product`, `Brand`, `Category`, `Quantity`, `Price`) 
                         VALUES ('$user','$Image1','$Product','$Brand','$Category','$Quantity','$Price')";
      $query = mysqli_query($conn, $insert_product);
      $message[] = 'product added to cart succesfully';
   };

};

?>



<!-- Wishlist -->


<?php

include 'Admin/conn.php';


if(isset($_POST['wishlist'])){

   $Image1 = $_POST['image1'];
   $Image2 = $_POST['image2'];
   $Product = $_POST['product'];
   $Price = $_POST['price'];
   $Discount = $_POST['discount'];

   $wish = "SELECT * FROM `wishlist` WHERE Product = '$Product' && User = '$user'";
   $wish = mysqli_query($conn, $wish);

   if(mysqli_num_rows($wish) > 0){
      $message[] = 'product already added to wishlist';
      header('location:products.php');
   }else{
      $insert_wish = "INSERT INTO `wishlist`(`User`,`Image1`,`Image2`, `Product`,`Price`,`Discount`) 
                         VALUES ('$user','$Image1','$Image2','$Product','$Price','$Discount')";
      $query = mysqli_query($conn, $insert_wish);
      $message[] = 'product added to wishlist succesfully';
   };

};

?>



<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Morata</title>
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
          <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">

          <link rel="stylesheet" href="CSS/main.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@500&display=swap"
           rel="stylesheet">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;1,700&family=Rubik:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

           <link rel="stylesheet" href="./owl/owl.carousel.css">
          <link rel="stylesheet" href="./owl/owl.theme.default.css">
          <script src="./owl/jquery.min.js"></script>
          <script src="./owl/owl.carousel.min.js"></script>
          <style>
            .owl-one {
    z-index: -1;
}
          </style>
</head>
<body class="bdy">
          
  <?php
  include 'navbar.php'
  ?>

        <section>
            <div class="container-fluid">
            <div class="row d-flex">
            <div class="col-7">
            <div class="owl-one owl-carousel owl-theme mt-4">
              <div class="item"><img src="./images/Slider2.webp"  height="400px">
                <div class="custom-carousel-caption slidecaption">
                  <h3>Sport Edition Best Choice is Your</h3>
                  <p>Wireless Conection with TV, Computer & Laptop</p>
                  <a href="">DISCOVER NOW</a>
              </div>
              </div>
              <div class="item"><img src="./images/Slider1.webp"  height="400px">
                <div class="custom-carousel-caption slidecaption">
                  <h3>Gaming Headset Brilliant Lighting Effect</h3>
                  <p>Wireless Conection with TV, Computer & Laptop</p>
                  <a href="">DISCOVER NOW</a>
              </div>
              </div>
              <div class="item"><img src="./images/Slider2.webp" height="400px">
                <div class="custom-carousel-caption slidecaption">
                  <h3>Sport Edition Best Choice is Your</h3>
                  <p>Wireless Conection with TV, Computer & Laptop</p>
                  <a href="">DISCOVER NOW</a>
              </div>
              </div>
              <div class="item"><img src="./images/Slider1.webp"  height="400px">
                <div class="custom-carousel-caption slidecaption">
                  <h3>Gaming Headset Brilliant Lighting Effect</h3>
                  <p>Wireless Conection with TV, Computer & Laptop</p>
                  <a href="">DISCOVER NOW</a>
              </div>
              </div>
          </div>
          </div>

            <div class="col">
              <div class="slide1 mt-4">
                <div class="side2">
                  <div class="image-container">
              <img src="./images/1_1.avif" width="250px" height="190px">
              <div class="overlay">
                <h3>Canyon Star Raider</h3>
                <p>Headphone & Audio</p>
            </div>
          </div>
            </div>
            <div class="side2">
              <div class="image-container">
              <img src="./images/1_2.avif" width="250px" height="190px">
              <div class="overlay">
                <h3>Phone Galaxy S20</h3>
                <p>Smartphone & Tablets</p>
            </div>
          </div>
            </div>
            </div>
            <div class="slide1 mt-3">
              <div class="side2">
                <div class="image-container">
              <img src="./images/1_3.avif" width="250px" height="190px">
              <div class="overlay">
                <h3>Apple Buds Plus</h3>
                <p>Wireless Earbuds</p>
            </div>
          </div>
            </div>
            <div class="side2">
              <div class="image-container">
              <img src="./images/1_4.avif" width="250px" height="190px">
              <div class="overlay">
                <h3>Chair Swoon Lounge</h3>
                <p>Decor & Furniture</p>
            </div>
          </div>
            </div>
            </div>
            </div>
          </div>
          </div>
          </section>
          <div class="hot">
            <span>Hot Trending Products</span>
            <a class="mt-2" href="products.php">View All Products</a>
          </div>
          <div class="line1 mb-4 mt-2"></div>

          <section>
            <div class="container-fluid">
            <div class="row d-flex">

              <div class="owl-two owl-carousel owl-theme">
                <div class="item">
                  <?php

                include 'Admin/conn.php';
                $display = "SELECT * FROM `products` WHERE Position = 'hot' ORDER BY ID ASC";
                $display = mysqli_query($conn, $display);
                while($result= mysqli_fetch_array($display)){
                ?>
            <form action="" method="POST">
          <div class="card card1 border-0" style="width: 13rem;">
          <div class="change">
          <a href=""><img src="Admin/upload/<?php echo $result['Image1'];  ?>" class="card-img-top pt-2 ps-2 pe-2 " height="200">
          <img src="Admin/upload/<?php echo $result['Image2'];  ?>" class="card-img-top pt-2 ps-2 pe-2 " height="200"></a>
          <div class="discount">
    <p>-<?php echo $result['Discount']?>%</p>
</div>
<div class="quickwish">
<?php
  if(isset($_SESSION['email'])){
  ?>
  <p><i class="fa-regular fa-heart"></i><input type="submit" name="wishlist" value="."></p>
  <?php
}else{
    echo "<a href='register.php'><p><i class='fa-regular fa-heart'></i></p></a>";
  }
  ?>
  <a href="viewproduct.php?ID=<?php echo $result ['ID']; ?>"><p><i class="fa-regular fa-eye"></i></p></a>
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
              <span class="card-subtitle pe-5">Rs: <?php echo $result['Price']?></span>
              <input type="hidden" name="image1" value="<?php echo $result['Image1']; ?>">
              <input type="hidden" name="image2" value="<?php echo $result['Image2']; ?>">
              <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
              <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
              <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
              <input type="hidden" name="price" value="<?php echo $result['Price']; ?>">
              <input type="hidden" name="discount" value="<?php echo $result['Discount']; ?>">
              <?php
  if(isset($_SESSION['email'])){
  ?>
              <input class="botun" type="submit" name="addtocart" value="Add To Cart">
              <?php
  }else{
    echo "<div class='botuns'><a href='register.php'><p>Add to Cart</p></a></div>";
  }
  ?>
            </div>
          </div>
          <?php
                    };
                    ?>
            </div>
            </div>
            </div>
          </section>

          <div class="popular">
            <span>Popular Categories</span>
          </div>
          <div class="line1 mb-4 mt-2"></div>
          
          <div class="container-fluid ">
            <div class="row d-flex ">
              <div class="mb-3 d-flex popular">
                <div class="popularcat">
                  <div class="image-container">
                <img src="./images/cate_1_1.avif" width="250px">
                <div class="overlay1">
                  <h3>Decor & Furniture</h3>
                  <p>(11 Products)</p>
              </div>
            </div>
              </div>
              <div class="popularcat">
                <div class="image-container">
                <img src="./images/cate_1_2.avif" width="251px">
                <div class="overlay1">
                  <h3>Smart Phones</h3>
                  <p>(21 Porducts)</p>
              </div>
            </div>
              </div>
              <div class="popularcat">
                <div class="image-container">
                <img src="./images/cate_1_3.avif" width="251px">
                <div class="overlay1">
                  <h3>Fashion & Clothing</h3>
                  <p>(8 Products)</p>
              </div>
            </div>
              </div>
                <div class="popularcat">
                  <div class="image-container">
                <img src="./images/cate_1_4.avif" width="251px">
                <div class="overlay1">
                  <h3>Home Kitchen</h3>
                  <p>(10 Products)</p>
              </div>
            </div>
              </div>
                <div class="popularcat">
                  <div class="image-container">
                <img src="./images/cate_1_5.avif" width="251px">
                <div class="overlay1">
                  <h3>Camera & Photo</h3>
                  <p>(0 Product)</p>
              </div>
            </div>
              </div>
                </div>
              </div>
              </form>
            </div>

            <div class="hot">
              <span>Top Deals Of The Day</span>
              <a class="mt-2" href="">Hurry up! Offer ends in 24 Hours...</a>
            </div>
            <div class="line1 mb-4 mt-2"></div>

            <div class="container-fluid">
              <div class="row d-flex">
                <div class="col-6 mb-3">
                  <form action="" method="POST">
                    <div class="card deals mb-3 border-0 pt-3" style="width: 650px; height: 320px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="./images/products_5_3.webp" class="card-img-top" height="250" style="width: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body ps-5">
                            <small class="card-text ps-3">Apple iPhone 11 Pro 256GB Space Gray – Unlocked</small>
                            <p class="mb-2 mt-2 ps-3"><img src="./images/rating.png" width="80px"> (1 review)</p>
                            <span class="card-subtitle ps-3">$210.00</span>
                            <ul class="pt-3">
                              <li>Screen Size 10.9 inch</li>
                              <li>Operating System iOS 14.0</li>
                              <li>Product Length 9.74 inch</li>
                            </ul>
                            <p class="ps-3"><progress value="80" max="100"></progress></p>
                            <input class="boton" type="submit" value="Add To Cart">
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
              </div>

              <div class="col-6 mb-3">
                <form action="" method="POST">
                  <div class="card deals mb-3 border-0 pt-3" style="width: 650px; height: 320px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./images/products_7_1.webp" class="card-img-top" height="250" style="width: 250px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body ps-5">
                          <small class="card-text ps-3">Apple iPhone 13 Pro Max 128GB – Unlocked</small>
                          <p class="mb-2 mt-2 ps-3"><img src="./images/rating.png" width="80px"> (1 review)</p>
                          <span class="card-subtitle ps-3">$120.00                          </span>
                          <ul class="pt-3">
                            <li>Bass and Stereo Sound.</li>
                            <li>Display with 3088 x 1440 pixels resolution.</li>
                            <li>Memory, Storage & SIM: 12GB RAM, 256GB.</li>
                          </ul>
                          <p class="ps-3"><progress value="60" max="100"></progress></p>
                          <input class="boton" type="submit" value="Add To Cart">
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
              </div>
            </div>

            <div class="container-fluid ">
              <div class="row d-flex ">
                <div class="popular mt-5">
                  <div class="popularcat">
                    <div class="image-containers">
                  <img src="./images/1_5.webp" width="425px" height="190px">
                  <div class="overlay2">
                    <h3>Microsoft Surface Laptop 14"</h3>
                    <p>Up To -30%</p>
                </div>
              </div>
                </div>
                <div class="popularcat">
                  <div class="image-containers">
                  <img src="./images/1_6.webp" width="425px" height="190px">
                  <div class="overlay2">
                    <h3>Cameras Best Sport Edition</h3>
                    <p>Up To -20%</p>
                </div>
              </div>
                </div>
                  <div class="popularcat">
                    <div class="image-containers">
                  <img src="./images/1_7.webp" width="425px" height="190px">
                  <div class="overlay2">
                    <h3>Sneaker Nike Air Max 90</h3>
                    <p>Up To -60%</p>
                </div>
              </div>
                </div>
                  </div>
                </div>
                </form>
              </div>

              <div class="hot">
                <span>Top Featured Products</span>
              </div>
              <div class="line1 mb-4 mt-2"></div>

              <section>
                <div class="container-fluid">
                <div class="row d-flex">
                <div class="col-5">
                  <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <form action="" method="POST">
                          <div class="card tops mb-3 border-0 pt-3" style="width: 538px; height: 300px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="./images/products_3_3.webp" class="card-img-top" height="200" style="width: 200px;">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <small class="card-text ps-2">Apple iPad Air 4 10.9-inch Wi-Fi 256GB</small>
                                  <p class="mb-2 mt-2 ps-2"><img src="./images/rating.png" width="80px"> (1 review)</p>
                                  <span class="card-subtitle ps-2">$49.00</span>
                                  <ul class="pt-3 ps-4">
                                    <li>Bass and Stereo Sound.</li>
                                    <li>Display with 3088 x 1440 pixels resolution.</li>
                                    <li>Memory, Storage & SIM: 12GB RAM, 256GB.</li>
                                  </ul>
                                  <input class="butun" type="submit" value="Add To Cart">
                                </div>
                              </div>
                            </div>
                          </div>
                      </form>
                      </div>
                      <div class="carousel-item">
                        <form action="" method="POST">
                          <div class="card tops mb-3 border-0 pt-3" style="width: 538px; height: 300px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="./images/products_4_1.webp" class="card-img-top" height="200" style="width: 200px;">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <small class="card-text ps-2">Apple iPad Mini 6 Wi-Fi Cellular 64GB/128GB</small>
                                  <p class="mb-2 mt-2 ps-2"><img src="./images/rating.png" width="80px"> (1 review)</p>
                                  <span class="card-subtitle ps-2">$56.00</span>
                                  <ul class="pt-3 ps-4">
                                    <li>Bass and Stereo Sound.</li>
                                    <li>Display with 3088 x 1440 pixels resolution.</li>
                                    <li>Memory, Storage & SIM: 12GB RAM, 256GB.</li>
                                  </ul>
                                  <input class="butun" type="submit" value="Add To Cart">
                                </div>
                              </div>
                            </div>
                          </div>
                      </form>
                      </div>
                      <div class="carousel-item">
                        <form action="" method="POST">
                          <div class="card tops mb-3 border-0 pt-3" style="width: 538px; height: 300px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="./images/products_2_2.webp" class="card-img-top" height="200" style="width: 200px;">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <small class="card-text ps-2">Apple iPad Pro M1 11-inch 2021 Wi-Fi 128GB</small>
                                  <p class="mb-2 mt-2 ps-2"><img src="./images/rating.png" width="80px"> (1 review)</p>
                                  <span class="card-subtitle ps-2">$120.00</span>
                                  <ul class="pt-3 ps-4">
                                    <li>Bass and Stereo Sound.</li>
                                    <li>Display with 3088 x 1440 pixels resolution.</li>
                                    <li>Memory, Storage & SIM: 12GB RAM, 256GB.</li>
                                  </ul>
                                  <input class="butun" type="submit" value="Add To Cart">
                                </div>
                              </div>
                            </div>
                          </div>
                      </form>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
              </div>
    
                <div class="col-6 mb-3">
                  <div class="d-flex ">
                  <form action="" method="POST">
                    <div class="card deals mb-3 border-0" style="width: 240px; height: 140px;">
                      <div class="row g-0">
                        <div class="col-md-4 pt-3">
                          <img src="./images/products_5_1.webp" class="card-img-top" height="100" style="width: 100px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body ps-4">
                            <small class="card-text">Apple iPhone 11 Pro</small>
                            <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                            <span class="card-subtitle">$210.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
                <form action="" method="POST">
                  <div class="card deals mb-3 border-0 ms-3" style="width: 240px; height: 140px;">
                    <div class="row g-0">
                      <div class="col-md-4 pt-3">
                        <img src="./images/products_7_1.webp" class="card-img-top" height="100" style="width: 100px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body ps-4">
                          <small class="card-text">Apple iPhone 13 Pro Max</small>
                          <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                          <span class="card-subtitle">$120.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
              <form action="" method="POST">
                <div class="card deals mb-3 border-0 ms-3" style="width: 240px; height: 140px;">
                  <div class="row g-0">
                    <div class="col-md-4 pt-3">
                      <img src="./images/products_30_1.webp" class="card-img-top" height="100" style="width: 100px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body ps-4">
                        <small class="card-text">Apple Watch Aluminum Case</small>
                        <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                        <span class="card-subtitle">$49.00</span>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
              </div>
              <div class="d-flex ">
                <form action="" method="POST">
                  <div class="card deals mb-3 border-0" style="width: 240px; height: 140px;">
                    <div class="row g-0">
                      <div class="col-md-4 pt-3">
                        <img src="./images/products_34_1.webp" class="card-img-top" height="100" style="width: 100px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body ps-4">
                          <small class="card-text">Apple iPhone 13 Mini</small>
                          <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                          <span class="card-subtitle">$150.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
              <form action="" method="POST">
                <div class="card deals mb-3 border-0 ms-3" style="width: 240px; height: 140px;">
                  <div class="row g-0">
                    <div class="col-md-4 pt-3">
                      <img src="./images/products_32_1.webp" class="card-img-top" height="100" style="width: 100px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body ps-4">
                        <small class="card-text">Apple Watch Aluminum Case</small>
                        <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                        <span class="card-subtitle">$100.00
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <form action="" method="POST">
              <div class="card deals mb-3 border-0 ms-3" style="width: 240px; height: 140px;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3">
                    <img src="./images/products_22_1.webp" class="card-img-top" height="100" style="width: 100px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body ps-4">
                      <small class="card-text">Apple Watch Magnetic Charger</small>
                      <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                      <span class="card-subtitle">$69.00</span>
                    </div>
                  </div>
                </div>
              </div>
          </form>
            </div>
                </div>
              </div>
              </div>
              </section>


              <div class="hot">
                <span>Recommended For You</span>
                <a class="mt-2" href="products.php">View All Products</a>
              </div>
              <div class="line1 mb-4 mt-2"></div>
    
              <section>
                <div class="container-fluid">
                <div class="row d-flex">
                  <div class="owl-two owl-carousel owl-theme">
                    <?php

                    include 'Admin/conn.php';
                    $display = "SELECT * FROM `products` WHERE Position = 'foryou' ORDER BY ID ASC";
                    $display = mysqli_query($conn, $display);
                    while($result= mysqli_fetch_array($display)){
                    ?>
                    <div class="col-3 mb-3">
                      <form action="" method="POST">
                    <div class="card card1 border-0" style="width: 13rem;">
                    <div class="change">
                    <a href=""><img src="Admin/upload/<?php echo $result['Image1'];  ?>" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                    <img src="Admin/upload/<?php echo $result['Image2'];  ?>" class="card-img-top pt-2 ps-2 pe-2 " height="200"></a>
                    <div class="discount">
              <p>-<?php echo $result['Discount']?>%</p>
          </div>
          <div class="quickwish">
          <?php
            if(isset($_SESSION['email'])){
            ?>
            <p><i class="fa-regular fa-heart"></i><input type="submit" name="wishlist" value="."></p>
            <?php
          }else{
              echo "<a href='register.php'><p><i class='fa-regular fa-heart'></i></p></a>";
            }
            ?>
            <a href="viewproduct.php?ID=<?php echo $result ['ID']; ?>"><p><i class="fa-regular fa-eye"></i></p></a>
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
                        <span class="card-subtitle pe-5">Rs: <?php echo $result['Price']?></span>
                        <input type="hidden" name="image1" value="<?php echo $result['Image1']; ?>">
                        <input type="hidden" name="image2" value="<?php echo $result['Image2']; ?>">
                        <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                        <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                        <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                        <input type="hidden" name="price" value="<?php echo $result['Price']; ?>">
                        <input type="hidden" name="discount" value="<?php echo $result['Discount']; ?>">
                        <?php
            if(isset($_SESSION['email'])){
            ?>
                        <input class="botun" type="submit" name="addtocart" value="Add To Cart">
                        <?php
            }else{
              echo "<div class='botuns'><a href='register.php'><p>Add to Cart</p></a></div>";
            }
            ?>
                      </div>
                    </div>
                          <?php
                              };
                              ?>
                  </div>
                </div>
                </div>
              </section>


              <div class="hot">
                <span>From Our Blog</span>
                <a class="mt-2" href="">See All Post</a>
              </div>
              <div class="line1 mb-4 mt-2"></div>
    
              <section>
                <div class="container-fluid">
                <div class="row d-flex">
    
                      <div class="col mb-3">
                        <form action="" method="POST">
                      <div class="card blog border-0" style="width: 15rem;">
                        <img src="./images/blog1.webp" class="card-img-top" height="170">
                        <div class="card-body">
                          <small class="card-text">Limited Edition Safari & Silver Summicron M-Lenses</small><br>
                          <p class="mb-2 mt-2 p1">Category: <a class="a1" href="">Technology</a></p>
                          <span class="card-subtitle">iPad Pro is the fastest device of its kind.
                             It’s designed to take full advantage</span><br>
                             <hr>
                          <!-- <input type="hidden" name="image" value="<?php echo $result['Image']; ?>">
                          <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                          <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                          <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                          <input type="hidden" name="price" value="<?php echo $result['Price']; ?>"> -->
                          <p class="mb-1 mt-1 p2"><a class="a2" href="">READ MORE</a>FEB, 19 2024</p>
                        </div>
                      </div>
                      </form>
                    </div>
                    <div class="col mb-3">
                      <form action="" method="POST">
                    <div class="card blog border-0" style="width: 15rem;">
                      <img src="./images/blog2.webp" class="card-img-top" height="170">
                      <div class="card-body">
                        <small class="card-text">Limited Edition Safari & Silver Summicron M-Lenses</small><br>
                        <p class="mb-2 mt-2 p1">Category: <a class="a1" href="">Technology</a></p>
                        <span class="card-subtitle">iPad Pro is the fastest device of its kind.
                           It’s designed to take full advantage</span><br>
                           <hr>
                        <!-- <input type="hidden" name="image" value="<?php echo $result['Image']; ?>">
                        <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                        <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                        <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                        <input type="hidden" name="price" value="<?php echo $result['Price']; ?>"> -->
                        <p class="mb-1 mt-1 p2"><a class="a2" href="">READ MORE</a>FEB, 19 2024</p>
                      </div>
                    </div>
                    </form>
                  </div>
                  <div class="col mb-3">
                    <form action="" method="POST">
                  <div class="card blog border-0" style="width: 15rem;">
                    <img src="./images/blog3.webp" class="card-img-top" height="170">
                    <div class="card-body">
                      <small class="card-text">Limited Edition Safari & Silver Summicron M-Lenses</small><br>
                      <p class="mb-2 mt-2 p1">Category: <a class="a1" href="">Technology</a></p>
                      <span class="card-subtitle">iPad Pro is the fastest device of its kind.
                         It’s designed to take full advantage</span><br>
                         <hr>
                      <!-- <input type="hidden" name="image" value="<?php echo $result['Image']; ?>">
                      <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                      <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                      <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                      <input type="hidden" name="price" value="<?php echo $result['Price']; ?>"> -->
                      <p class="mb-1 mt-1 p2"><a class="a2" href="">READ MORE</a>FEB, 19 2024</p>
                    </div>
                  </div>
                  </form>
                </div>
                <div class="col mb-3">
                  <form action="" method="POST">
                <div class="card blog border-0" style="width: 15rem;">
                  <img src="./images/blog4.webp" class="card-img-top" height="170">
                  <div class="card-body">
                    <small class="card-text">Limited Edition Safari & Silver Summicron M-Lenses</small><br>
                    <p class="mb-2 mt-2 p1">Category: <a class="a1" href="">Technology</a></p>
                    <span class="card-subtitle">iPad Pro is the fastest device of its kind.
                       It’s designed to take full advantage</span><br>
                       <hr>
                    <!-- <input type="hidden" name="image" value="<?php echo $result['Image']; ?>">
                    <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                    <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                    <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                    <input type="hidden" name="price" value="<?php echo $result['Price']; ?>"> -->
                    <p class="mb-1 mt-1 p2"><a class="a2" href="">READ MORE</a>FEB, 19 2024</p>
                  </div>
                </div>
                </form>
              </div>
              <div class="col mb-3">
                <form action="" method="POST">
              <div class="card blog border-0" style="width: 15rem;">
                <img src="./images/blog5.webp" class="card-img-top" height="170">
                <div class="card-body">
                  <small class="card-text">Limited Edition Safari & Silver Summicron M-Lenses</small><br>
                  <p class="mb-2 mt-2 p1">Category: <a class="a1" href="">Technology</a></p>
                  <span class="card-subtitle">iPad Pro is the fastest device of its kind.
                     It’s designed to take full advantage</span><br>
                     <hr>
                  <!-- <input type="hidden" name="image" value="<?php echo $result['Image']; ?>">
                  <input type="hidden" name="product" value="<?php echo $result['Product']; ?>">
                  <input type="hidden" name="category" value="<?php echo $result['Category']; ?>">
                  <input type="hidden" name="brand" value="<?php echo $result['Brand']; ?>">
                  <input type="hidden" name="price" value="<?php echo $result['Price']; ?>"> -->
                  <p class="mb-1 mt-1 p2"><a class="a2" href="">READ MORE</a>FEB, 19 2024</p>
                </div>
              </div>
              </form>
            </div>
                  </div>
                </div>
              </section>

              <div class="container-fluid mt-5">
                <div class="row">
                  <div class="brands d-flex">
                  <a href=""><img src="./images/brand_1_1.avif" width="200px"></a>
                  <a href=""><img src="./images/brand_1_2.avif" width="200px"></a>
                  <a href=""><img src="./images/brand_1_3.avif" width="200px"></a>
                  <a href=""><img src="./images/brand_1_4.avif" width="200px"></a>
                  <a href=""><img src="./images/brand_1_5.avif" width="200px"></a>
                  <a href=""><img src="./images/brand_1_6.avif" width="200px"></a>
                </div>
              </div>
              </div>

              <?php
              include 'footer.php'
              ?>


          <script>
            $(document).ready(function(){
              $('.owl-one').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            smartSpeed:500,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            animateOut: 'fadeOut',
            dots:false,
            responsive:{
            0:{
             items:1
             },
            600:{
             items:1
             },
            1000:{
             items:1
            }
}
})

$('.owl-two').owlCarousel({
            loop:true,
            // autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            smartSpeed:500,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            animateOut: 'fadeOut',
            dots:false,
            margin:15,
            responsive:{
            0:{
             items:2
             },
            600:{
             items:4
             },
            1000:{
             items:6
            }
}
})

            })
          </script>

<script>
  // Get the carousel element
var carousel = document.querySelector('.owl-one');

// Get the dropdown and offcanvas elements
var offcanvasCart = document.querySelector('#offcanvasCart');
var offcanvasWishlist = document.querySelector('#offcanvasWishlist');

// Move the dropdown and offcanvas elements after the carousel
carousel.parentNode.insertBefore(offcanvasCart, carousel.nextSibling);
carousel.parentNode.insertBefore(offcanvasWishlist, carousel.nextSibling);

</script> 




        <script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>