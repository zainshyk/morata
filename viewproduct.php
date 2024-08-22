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

          <link rel="stylesheet" href="CSS/viewproduct.css">
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
          <!-- <style>
            .owl-one {
    z-index: -1;
}
          </style> -->
</head>
<body class="bdy">
          
  <?php
  include 'navbar.php'
  ?>


<?php

include 'Admin/conn.php';
$get = $_GET['ID'];
$display = "SELECT * FROM `products` WHERE id='$get'";
$query = mysqli_query($conn, $display);
while($data= mysqli_fetch_array($query)){
?>
          
    <div class="container">
        <div class="single-product">
            <div class="row">
                <div class="col-6">
                    <div class="product-image">
                        <div class="product-image-main">
                        <img class="image-list" src="Admin/upload/<?php echo $data['Image1']; ?>">
                        </div>
                        <div class="product-image-slider">
                            <img src="Admin/upload/<?php echo $data['Image2']; ?>"  class="image-list">
                            <!-- <img src="img/tshirt-2.png" alt=""  class="image-list">
                            <img src="img/tshirt-3.png" alt=""  class="image-list">
                            <img src="img/tshirt-group.png" alt=""  class="image-list"> -->
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="main.php">Home</a></span>
                        <span><a href="products.php">Product</a></span>
                        <span class="active"><?php echo $data ['Category'];?></span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2><?php echo $data ['Product'];?></h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span class="review">(47 Review)</span>
                        </div>
                        <div class="product-price">
                            <span class="offer-price">Rs: <?php echo $data['Price'];?></span>
                            <span class="sale-price">$129.00</span>
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p><?php echo $data ['Description'];?></p>
                        </div>
                        <div class="product-size">
                            <h4>Size</h4>
                            <div class="size-layout">
                                <input type="radio" name="size" value="S" id="1" class="size-input">
                                <label for="1" class="size">S</label>

                                <input type="radio" name="size" value="M" id="2" class="size-input">
                                <label for="2" class="size">M</label>

                                <input type="radio" name="size" value="L" id="3" class="size-input">
                                <label for="3" class="size">L</label>

                                <input type="radio" name="size" value="XL" id="4" class="size-input">
                                <label for="4" class="size">XL</label>

                                <input type="radio" name="size" value="XXL" id="5" class="size-input">
                                <label for="5" class="size">XXL</label>
                            </div>
                        </div>
                        <div class="product-color">
                            <h4>Color</h4>
                            <div class="color-layout">
                                <input type="radio" name="color"  value="black" class="color-input">
                                <label for="black" class="black"></label>
                                <input type="radio" name="color"  value="red" class="color-input">
                                <label for="red" class="red"></label>

                                <input type="radio" name="color"  value="blue" class="color-input">
                                <label for="blue" class="blue"></label>
                            </div>
                        </div>
                        <span class="divider"></span>

                        <div class="product-btn-group">
                        <input type="hidden" name="image1" value="<?php echo $data['Image1']; ?>">
                      <input type="hidden" name="image2" value="<?php echo $data['Image2']; ?>">
                      <input type="hidden" name="product" value="<?php echo $data['Product']; ?>">
                      <input type="hidden" name="category" value="<?php echo $data['Category']; ?>">
                      <input type="hidden" name="brand" value="<?php echo $data['Brand']; ?>">
                      <input type="hidden" name="price" value="<?php echo $data['Price']; ?>">
                            <a href="login.php"><div class="button buy-now mt-2"><i class='bx bxs-zap' ></i> Buy Now</div></a>
                            <p><i class='bx bxs-cart' ></i><input class="button add-cart mt-2" type="submit" name="addtocart" value="Add To Cart"></p>
                            <div class="button heart"><i class='bx bxs-heart' ></i> Add to Wishlist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                    };
                    ?>





    <?php
              include 'footer.php'
              ?>



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
<script>
  const sliderMainImage = document.getElementById("product-main-image"); //product container image
const sliderImageList = document.getElementsByClassName("image-list"); // image thumblian group selection
console.log(sliderImageList);

sliderImageList[0].onclick = function(){
    sliderMainImage.src = sliderImageList[0].src;
    console.log(sliderMainImage.src);
};

sliderImageList[1].onclick = function(){
    sliderMainImage.src = sliderImageList[1].src;
    console.log(sliderMainImage.src);
};

// sliderImageList[2].onclick = function(){
//     sliderMainImage.src = sliderImageList[2].src;
//     console.log(sliderMainImage.src);
// };

// sliderImageList[3].onclick = function(){
//     sliderMainImage.src = sliderImageList[3].src;
//     console.log(sliderMainImage.src);
// };
</script>


    <script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>