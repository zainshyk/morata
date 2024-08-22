<?php
include('Admin/conn.php');

if (!isset($_SESSION['aid'])) {
}

if(isset($_SESSION['email'])) {
  $userid = $_SESSION['email'];
  $query = "SELECT * FROM `users` WHERE Email = '$userid'";
  $query = mysqli_query($conn, $query);
  $row =mysqli_fetch_array($query);
  if($row) {
    $user = $row['ID'];
  } else {
    // Handle case where user doesn't exist
    // Redirect or display error message
    header('Location: error.php'); // Redirect to an error page
    exit();
  }
  } else {
  
  };
?>







<?php
if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE ID = '$remove_id'");
  header('location:main.php');
};
?>

<?php
if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `wishlist` WHERE ID = '$remove_id'");
  header('location:main.php');
};
?>




<?php
$allcategories = array(
    "Accesories",
    "Basket Ball",
    "Clothing",
    "Computer",
    "Computer & Desktop",
    "Cutting Machine",
    "Dining & Kitchen",
    "Drills",
    "Electronics",
    "Fresh Vegetables",
    "Furniture",
    "Garden",
    "Gaming Accesories",
    "Health & Beauty",
    "Jewelery",
    "Laptop",
    "Laptop & iPad",
    "Makeup",
    "Mobile Accesories",
    "Sectional Sofas",
    "Shoes",
    "Stationary",
    "Smart Phones & Tablets",
    "Snacks & Beverage",
    "T-shirts",
    "Tables",
    "Television",
    "Tools",
    "Watches",
    "Watches & Eyewear",
    "Women's Clothing",
    "Zaenix Tools",


);
?>


<!-- Link -->

<link rel="stylesheet" href="CSS/navbar.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- END  -->



<div class="up">
              <ul class="d-flex ">
                  <li class="dropdown">
                    <a class="country" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                    <img class="mb-1" src="images/united-states.png" width="17px"> English <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu countrymenu">
                        <li><a class="dropdown-item" href=""><img class="mb-1" src="images/united-states.png" width="17px"> English</a></li>
                        <li><a class="dropdown-item" href=""><img src="./images/pakistan.png" width="17px"> اردو</a></li>
                        <li><a class="dropdown-item" href=""><img src="./images/saudi-arabia.png" width="17px"> العربية</a></li>
                        <li><a class="dropdown-item" href=""><img class="mb-1" src="./images/italy.png" width="17px"> Italiano</a></li>
                        <li><a class="dropdown-item" href=""><img class="mb-1" src="./images/germany.png" width="17px"> Ελληνικά</a></li>
                        <li><a class="dropdown-item" href=""><img class="mb-1" src="./images/france.png" width="17px"> Français</a></li>
                        </ul>
                    </li>
                  <div class="vl"></div>
                  <li class="dropdown">
                    <a class="country" data-bs-toggle="dropdown" aria-expanded="false" href="#">United States(USD $) <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu countrymenu">
                        <li><a class="dropdown-item" href="">Canada (CAD $)</a></li>
                        <li><a class="dropdown-item" href="">Japan (JPY ¥)</a></li>
                        <li><a class="dropdown-item" href="">United Kingdom (GBP£)</a></li>
                        <li><a class="dropdown-item" href="">United States (USD $)</a></li>
                        </ul>
                    </li>
                  <div class="vl"></div>
                  <li>Need Help? +001 123 456 789</li>
              </ul>
              <div>
                <ul class="up1 d-flex ">
                    <a href="aboutus.php"><li>About Us</li></a>
                    <div class="vl"></div>
                    <a href="order.php"><li>Order Tracking</li></a>
                    <div class="vl"></div>
                    <a href="contact.php"><li>Contact Us</li></a>
                    <div class="vl"></div>
                    <a href="faqs.php"><li class="me-3">FAQs</li></a>
                </ul>
              </div>
          </div>
          <div class="line"></div>
          <nav class="bar">
            <div class="container-fluid d-flex ">
                <a class="navbar-brand" href="#">
                    <img class="mt-3" src="./images/logo_150x@2x.png" alt="Logo" width="150">
                </a>
                <a class="menu" data-bs-toggle="dropdown" aria-expanded="false" href="">All Categories <i class="fa-solid fa-chevron-down"></i></a>
                    <ul class="dropdown-menu categorymenu p-0">
                    <?php
            foreach ($allcategories as $category) {
            ?>
                <li><a class="dropdown-item" href="category.php?Category=<?php echo $category; ?>"><?php echo $category; ?></a></li>
            <?php
            }
            ?>
                        </ul>
                        <span class="searchline">|</span>
                <input class="search pt-1 pb-1" type="search" placeholder="Search For Products...">
                <?php
                if(!isset($_SESSION['aid'])){
                ?>
                <div class="menu1r">
                <div class="menu1 d-flex ms-2">
                      <a href="register.php"><img class="mt-1" src="images/people.png" width="35px"></a>
                  <a href="register.php"><div class="ps-2">
                  <span>Login</span>
                  <h6>Account</h6>
                </div>
              </a>
              </div>
              <?php
                }
                ?>

<?php
                if(isset($_SESSION['aid'])){
                ?>
                
              <div class="menu1 d-flex ms-2" data-bs-toggle="dropdown" aria-expanded="false">
                    <p><img class="mt-1" src="images/people.png" width="35px"></p>
                 <div class="ps-2">
                  <span>Hello,</span>
                  <h6><?php echo $Name; ?></h6>
                </div>
              </div>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="">Profile</a></li>
              <li><a class="dropdown-item" href="">Setting</a></li>
              <li><a class="dropdown-item" href="">Add Account</a></li>
              <li><a class="dropdown-item" href="">Help</a></li>
              <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
              </ul>
              <?php
                };
                ?>

                <!-- My Wishlist -->
                <?php
                
                include 'Admin/conn.php';
                if(isset($_SESSION['email'])){

                  include 'Admin/conn.php';
                  $rows = "SELECT * FROM `wishlist` WHERE User = '$user'";
                  $rows = mysqli_query($conn, $rows);
                  $count = mysqli_num_rows($rows);
                }
?>

                <div class="menu1 d-flex ms-4"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWishlist" aria-controls="offcanvasWishlist">
                  <div>
                <p><img class="mt-2" src="images/love.png" width="31px"></p>
                <?php
                    if(isset($_SESSION['email'])){
                    ?>
    <div class="count">
                  <p><?php echo $count; ?></p>
              </div>
              <?php
                    }else{
                      echo "<div class='count'>
                      <p>0</p>
                  </div>";
                    }
                    ?>
                </div>
              <div class="ps-2">
              <span>Favourite</span>
              <h6>My Wishlist</h6>
            </div>
          </div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWishlist" aria-labelledby="offcanvasWishlistLabel">
                  <div class="offcanvas-header bg-body-secondary p-0">
                    <h5 class="offcanvas-title" id="offcanvasWishlistLabel">My Wishlist</h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                  <?php

if(isset($_SESSION['email'])){
  include 'conn.php';
  $display = "SELECT * FROM `wishlist` WHERE User = '$user'";
  $display = mysqli_query($conn, $display);
  $grand_total = 0;
  if(mysqli_num_rows($display) > 0){
  while($view= mysqli_fetch_array($display)){
  ?>
                    <form action="" method="POST">
                      <div class="card wishlist border-0" style="width: 350px; height: 100px;">
                        <div class="row">
                          <div class="col-md-4 mt-2">
                            <img src="Admin/upload/<?php echo $view ['Image1']; ?>" class="card-img-top" height="80" style="width: 80px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body wishtext">
                              <small class="card-text"><?php echo $view ['Product']; ?></small><br>
                              <span class="card-subtitle">Rs: <?php echo $view['Price']; ?></span>
                              <a href="main.php?remove=<?php echo $view ['ID']; ?>" onclick="return confirm('remove item from wishlist?')" class="delete"> <i class="fas fa-trash"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                  </form>
                  <?php
          }
        }
        }else{
          echo "<div class='display-order'><span>YOUR WISHLIST IS EMPTY!</span></div>";
       }
          ?>
<?php
if(isset($_SESSION['email'])){
                    if(mysqli_num_rows($display) > 0){
                    ?>
<div class="check ms-2">
                  <a href="wishlist.php">MY WISHLIST</a>
                </div>
                <?php
                    }
                    }else{
                    }
                  ?>
                  </div>
                </div>

                <!-- Cart  -->
                <?php
                if(isset($_SESSION['email'])){

                include 'Admin/conn.php';
                $rows = "SELECT * FROM `cart` WHERE User = '$user'";
                $rows = mysqli_query($conn, $rows);
                $count = mysqli_num_rows($rows);
$grand_total = 0;

while ($view = mysqli_fetch_array($rows)) {
    $sub_total = (is_numeric($view['Price']) && is_numeric($view['Quantity'])) ? $view['Price'] * $view['Quantity'] : 0;
    $grand_total += $sub_total;
}
                }
// Display only the grand total after calculating it
?>

<div class="menu1 d-flex ms-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
  <div>
    <p><img class="mt-1" src="images/shopping-cart.png" width="35px"></p>
    <?php
                    if(isset($_SESSION['email'])){
                    ?>
    <div class="count">
                  <p><?php echo $count; ?></p>
              </div>
              <?php
                    }else{
                      echo "<div class='count'>
                      <p>0</p>
                  </div>";
                    }
                    ?>
    </div>
    <div class="ps-2">
        <span>Your Cart</span>
        <?php
                    if(isset($_SESSION['email'])){
                    ?>
        <h6>Rs: <?= $grand_total; ?></h6>
        <?php
                    }else{
                      echo "<h6>Rs: 0</h6>";
                    }
                    ?>
                  </div>
    </div>
</div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
                  <div class="offcanvas-header bg-body-secondary p-0">
                    <h5 class="offcanvas-title" id="offcanvasCartLabel">Shopping Cart</h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                  
                  <div class="cartproduct">
                  <?php
                  if(isset($_SESSION['email'])){
include 'conn.php';
$display = "SELECT * FROM `cart` WHERE User = '$user'";
$display = mysqli_query($conn, $display);
$grand_total = 0;
if(mysqli_num_rows($display) > 0){
while($view= mysqli_fetch_array($display)){
  $sub_total = (is_numeric($view['Price']) && is_numeric($view['Quantity'])) ? $view['Price'] * $view['Quantity'] : 0;
        
        $grand_total += $sub_total;
?>
                    <form action="" method="POST">
                      <div class="card wishlist border-0" style="width: 350px; height: 90px;">
                        <div class="row">
                          <div class="col-md-4 mt-1">
                            <img src="Admin/upload/<?php echo $view ['Image1']; ?>" class="card-img-top" height="80" style="width: 80px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body wishtext">
                              <small class="card-text mb-4"><?php echo $view ['Product']; ?></small><br>
                              <span class="card-subtitle">Rs: <?php echo $view['Price']; ?></span>
                              <a href="main.php?remove=<?php echo $view ['ID']; ?>" onclick="return confirm('remove item from cart?')" class="delete"> <i class="fas fa-trash"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                  </form>
                  <?php
          }
        }
        }else{
          echo "<div class='display-order'><span>YOUR CART IS EMPTY!</span></div>";
       }
          ?>
                  </div>
                  <?php
                  if(isset($_SESSION['email'])){
                    if(mysqli_num_rows($display) > 0){
                    ?>
                  <div class="wishdown">
                    <p>Spend Rs: 30,000 more and get <small>Free Delivery !</small></p>
                    
                    <div class="justify-content-between d-flex">
                    <span>SUBTOTAL:</span>
                    <span class="me-4">Rs: <?php echo $grand_total; ?></span>
                    </div>
                  </div>
                  <div class="view ms-2">
                  <a href="./cart.php">VIEW CART</a>
                </div>
                  <div class="check ms-2">
                  <a href="checkout.php">CHECK OUT</a>
                </div>
              
                  <?php
                    }
                    }else{
                    }
                  ?>
                  </div>
                </div>
                
                
        </nav>
        <div class="line"></div>
        <div class="down">
            <div class="d-flex ">
              <li class="dropdown">
            <span class="bar1" data-bs-toggle="dropdown" aria-expanded="false"><img class="mb-1 me-2" src="images/hamburger.png" width="17px">SHOP BY DEPARTMENT</span>
            <ul class="dropdown-menu department mt-2 pt-4">
              <li><a class="dropdown-item" href="">Computer & Desktop<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Laptop & iPad<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Cameras & Photos<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Smart Phones & Tablets<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Home & Kitchen<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">TV & Audios<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Health & Beauty<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Watches & Eyewear<i class="fa-solid fa-angle-right" ></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Top Deals<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Top Selling Products<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Top Featured Products<i class="fa-solid fa-angle-right"></i></a></li>
              <hr class="mt-2 mb-2 ms-3 me-3 hr">
              <li><a class="dropdown-item" href="">Top Zaenix Products<i class="fa-solid fa-angle-right"></i></a></li>
              </ul>
            </li>

            <ul class="down2">
                <div class="vl"></div>
                <a href="main.php"><li>HOME</li></a>
                <a href="products.php"><li>SHOP</li></a>
                <a href="products.php"><li>PRODUCT</li></a>
                <a href="order.php"><li>ORDER & RETURNS</li></a>
                <a href="blog.php"><li>BLOG</li></a>
                <a href="contact.php"><li>CONTACT US</li></a>
            </ul>
        </div>
            <div class="downl">
              <span><img class="me-2 mb-1" src="./images/art.png" width="25px">Sale $20 Off Your First Order.</span>
            </div>
        </div>