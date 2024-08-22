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




<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
          <title>All Products</title>
          <link rel="stylesheet" href="CSS/products.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@500&display=swap"
           rel="stylesheet">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

           <link rel="stylesheet" href="./owl/owl.carousel.css">
          <link rel="stylesheet" href="./owl/owl.theme.default.css">
          <script src="./owl/jquery.min.js"></script>
          <script src="./owl/owl.carousel.min.js"></script>
</head>
<body class="bdy">
          
  <?php
  include 'navbar.php'
  ?>

  <div class="top">
          <a href="main.php">Home</a>
          <p>/ Blogs</p>
  </div>

  <div class="hot">
          <span>Products</span>
        </div>
        <div class="line1 mb-4 mt-2"></div>

  <div class="owl-one owl-carousel owl-theme mt-4">
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_34_4.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">Smartphone</small><br>
                      </div>
                    </div>
                    </form>
          </div>
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_31_1_9617e01f-65e8-464c-8e92-1f17c1002192.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">Smartwatch</small><br>
                      </div>
                    </div>
                    </form>
          </div>
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_4_4.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">iPad Pro</small><br>
                      </div>
                    </div>
                    </form>
          </div>
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_23_3.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">AirPods</small><br>
                      </div>
                    </div>
                    </form>
          </div>
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_13_1.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">Speaker</small><br>
                      </div>
                    </div>
                    </form>
          </div>
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_28_3.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">GamePad</small><br>
                      </div>
                    </div>
                    </form>
          </div>
          <div class="item">
                    <form action="" method="POST">
                    <div class="card card2 border-0" style="width: 13rem;">
                      <img src="./images/products_3_6_8b177e91-c23c-478c-837f-141f57a7e41b.webp" class="card-img-top pt-2 ps-2 pe-2 " height="200">
                      <div class="card-body">
                        <small class="card-text mb-1">Hard Drives</small><br>
                      </div>
                    </div>
                    </form>
          </div>
      </div>

      <section>
          <div class="container-fluid mt-5">
                    <div class="row">
                    <div class="d-flex ">
                    <div class="col-3">
                    <div class="categories">
                        <h6>Product Categories</h6>
                        <hr class="hrr">
                        <p>Babies & Moms (0)</p>
                        <p>Books & Office (0)</p>
                        <p>Chairs & Stools (1)</p>
                        <p>Clothing & Apparel (8)</p>
                        <p>Computers & Technologies(11)</p>
                        <p>Consumer Electrics (6)</p>
                        <p>Decor & Furniture (11)</p>
                        <p>Furniture & Acessories (12)</p>
                        <p>Kitchen & Tableware (10)</p>
                        <p>Phones & Accessories (21)</p>
                        <p>Sport & Outdoo (0)</p>

                    </div>
                    <div class="filter mt-4">
                        <h6>Filter By</h6>
                        <hr class="filterhr">
                    <div>
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i> AVAILABILITY</span>
                    </div>
                    <div class="pt-4 pb-4">
                    <input type="checkbox">
                    <label for="vehicle1"> In Stock (108)</label><br>
                    <input type="checkbox">
                    <label for="vehicle2"> Out Of Stock (5)</label><br>
                    </div>
                    <hr class="filterhr">
                    <div class="pb-4">
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i> PRICE</span>
                    </div>
                    <small>The highest price is <b>$1,300.00</b></small>
                    <div class="price pb-4">
                         <small>$</small>
                         <input type="number">
                         <input type="number">
                    </div>

                    <hr class="filterhr">
                    <div class="pb-4">
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i> COLOR</span>
                    </div>
                    <small>Select Colour <b>Click On Box</b></small>
                    <div class="color pb-4">
                         <input type="color">
                    </div>

                    <hr class="filterhr">
                    <div class="pb-4">
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i> BRAND</span>
                    </div>
                    <div class="pb-4">
                              <input type="checkbox">
                              <label for="vehicle2"> Apple (21)</label><br>
                              <input type="checkbox">
                              <label for="vehicle1"> Dell (2)</label><br>
                              <input type="checkbox">
                              <label for="vehicle2"> HP (1)</label><br>
                              <input type="checkbox">
                              <label for="vehicle1"> Samsung (10)</label><br>
                              <input type="checkbox">
                              <label for="vehicle2"> Sofine (18)</label><br>
                              <input type="checkbox">
                              <label for="vehicle1"> Uminex (23)</label><br>
                              <input type="checkbox">
                              <label for="vehicle2"> Window (1)</label><br>
                              <input type="checkbox">
                              <label for="vehicle1"> Zaenix (10)</label><br>
                              </div>

                              <hr class="filterhr">
                    <div class="pb-4">
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i> SIZE</span>
                    </div>
                    <div class="size d-flex ">
                         <p class="me-3">64GB (25)</p>
                         <p>128GB (10)</p>
                    </div>
                    <div class="size d-flex ">
                         <p class="me-3">256GB (2)</p>
                         <p>512GB (15)</p>
                    </div>
          
                    </div>

                    <div class="categories mt-4">
                              <h6><i class="fa-solid fa-minus" style="color: #000000;"></i> FEATURED PRODUCT</h6>
                              <hr class="hrr">
                              <form action="" method="POST">
                                        <div class="card deals mb-3 border-0" style="width: 240px; height: 140px;">
                                          <div class="row g-0">
                                            <div class="col-md-4 pt-3">
                                              <img src="./images/products_23_1.webp" class="card-img-top" height="100" style="width: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                              <div class="card-body ps-4">
                                                <small class="card-text">Apple Airpods Pro MWP22A</small>
                                                <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                                                <span class="card-subtitle">$428.00</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                                    <form action="" method="POST">
                                        <div class="card deals mb-3 border-0" style="width: 240px; height: 140px;">
                                          <div class="row g-0">
                                            <div class="col-md-4 pt-3">
                                              <img src="./images/products_29_1.webp" class="card-img-top" height="100" style="width: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                              <div class="card-body ps-4">
                                                <small class="card-text">Apple Bluetooth AirPods Max</small>
                                                <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                                                <span class="card-subtitle">$100.00</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                                    <form action="" method="POST">
                                        <div class="card deals mb-3 border-0" style="width: 240px; height: 140px;">
                                          <div class="row g-0">
                                            <div class="col-md-4 pt-3">
                                              <img src="./images/products_3_3.webp" class="card-img-top" height="100" style="width: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                              <div class="card-body ps-4">
                                                <small class="card-text">Apple iPad Air 4 10.9-inch Wi-Fi</small>
                                                <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                                                <span class="card-subtitle">$490.00</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                                    <form action="" method="POST">
                                        <div class="card deals mb-3 border-0" style="width: 240px; height: 140px;">
                                          <div class="row g-0">
                                            <div class="col-md-4 pt-3">
                                              <img src="./images/products_5_1.webp" class="card-img-top" height="100" style="width: 100px;">
                                            </div>
                                            <div class="col-md-8">
                                              <div class="card-body ps-4">
                                                <small class="card-text">Apple iPhone 11 Pro Wi-Fi</small>
                                                <p class="mb-1 mt-1"><img src="./images/rating.png" width="80px"></p>
                                                <span class="card-subtitle">$210.00</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
      
                          </div>

                          <div class="big mt-4">
                              <img src="./images/menu_2.webp" alt="">
                          </div>
                    </div>
                    <div class="container-fluid">
                <div class="row d-flex">
    
                      <div class="col-3 mb-3">
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
                    <div class="col-3 mb-3">
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
                  <div class="col-3 mb-3">
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
                <div class="col-3 mb-3">
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
              <div class="col-3 mb-3">
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
          </div>
                    </div>
          </div>
      </section>




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
          margin:20,
          animateOut: 'slideOutDown',
          animateIn: 'flipInX',
          animateOut: 'fadeOut',
          dots:false,
          responsive:{
          0:{
           items:1
           },
          600:{
           items:3
           },
          1000:{
           items:6
          }
}
})
          })
        </script>

<script>
          $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
          }).resize();
          </script>

<script>
  // Get the carousel element
var carousel = document.querySelector('.owl-one');

// Get the dropdown and offcanvas elements
var dropdown = document.querySelector('.dropdown-menu');
var offcanvasCart = document.querySelector('#offcanvasCart');
var offcanvasWishlist = document.querySelector('#offcanvasWishlist');

// Move the dropdown and offcanvas elements after the carousel
carousel.parentNode.insertBefore(dropdown, carousel.nextSibling);
carousel.parentNode.insertBefore(offcanvasCart, carousel.nextSibling);
carousel.parentNode.insertBefore(offcanvasWishlist, carousel.nextSibling);

</script>          

      <script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>