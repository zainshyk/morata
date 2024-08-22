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
      header('location:cart.php');
   }else{
      $insert_wish = "INSERT INTO `wishlist`(`User`,`Image1`,`Image2`, `Product`,`Price`,`Discount`) 
                         VALUES ('$user','$Image1','$Image2','$Product','$Price','$Discount')";
      $query = mysqli_query($conn, $insert_wish);
      $message[] = 'product added to wishlist succesfully';
   };

};

?>














<?php

include 'Admin/conn.php';

if(isset($_POST['update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_id'];
   $update = mysqli_query($conn, "UPDATE `cart` SET Quantity = '$update_value' WHERE ID = '$update_id'");
   if($update){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE ID = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
          <title>Shopping Cart</title>
          <link rel="stylesheet" href="CSS/cart.css">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php
include 'navbar.php'
?>
<div class="top">
  <a href="main.php">Home</a>
  <p>/ Shopping Cart</p>
</div>

<div class="container mt-4">
  <div class="row">
      <div class="col-xl-8">

        <?php
      include 'Admin/conn.php';

      $display = "SELECT * FROM `cart` WHERE User = '$user'";
      $display = mysqli_query($conn, $display);
      $grand_total = 0;
      if(mysqli_num_rows($display) > 0){
      while($result = mysqli_fetch_assoc($display)){
        $sub_total = (is_numeric($result['Price']) && is_numeric($result['Quantity'])) ? $result['Price'] * $result['Quantity'] : 0;
        
        $grand_total += $sub_total;
      ?>
          <div class="card border shadow-none">
              <div class="card-body">

                  <div class="d-flex align-items-start border-bottom pb-3">
                      <div class="me-4">
                          <img src="Admin/upload/<?php echo $result ['Image1']; ?>" class="avatar-lg rounded">
                      </div>
                      <div class="flex-grow-1 align-self-center overflow-hidden">
                          <div>
                            <a href="#" class="text-dark"><h5 class="text-truncate"><?php echo $result ['Product']; ?></h5></a>
                              <p class="text-muted mb-0">
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star text-warning"></i>
                                  <i class="bx bxs-star-half text-warning"></i>
                              </p>
                              <p class="mb-0 mt-1">Category : <span class="fw-medium"><?php echo $result ['Category']; ?></span></p>
                          </div>
                      </div>
                      <div class="flex-shrink-0 ms-2">
                          <ul class="list-inline mb-0 font-size-16">
                              <li class="list-inline-item">
                                  <a href="cart.php?remove=<?php echo $result ['ID']; ?>" onclick="return confirm('remove item from cart?')" class="text-muted px-1">
                                      <i class="mdi mdi-trash-can-outline"></i>
                                  </a>
                              </li>
                              <li class="list-inline-item">
                                  <a href="#" class="text-muted px-1">
                                      <i class="mdi mdi-heart-outline"></i>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>

                  <div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="mt-3">
                                  <p class="text-muted mb-2">Price</p>
                                  <h5 class="mb-0 mt-2">Rs: <?php echo number_format($result['Price']); ?></h5>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="mt-3">
                                  <p class="text-muted mb-2">Quantity</p>
                                  <form action="" method="post">
                                    <input type="hidden" name="update_id"  value="<?php echo $result ['ID']; ?>" >
                                    <input class="quantity" type="number" name="update_quantity" min="1"  value="<?php echo $result ['Quantity']; ?>" >
                                    <input class="update" type="submit" value="Update" name="update_btn">
                                 </form>  
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="mt-3">
                                  <p class="text-muted mb-2">Total</p>
                                  <h5>Rs: <?php echo $sub_total = number_format($result['Price'] * $result['Quantity']); ?></h5>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <?php
        // $grand_total += $sub_total;
          };
        };
          ?>

          <!-- end card -->

          <div class="row my-4">
              <div class="col-sm-6 btnn">
                  <a href="products.php" class="btn btn-link">
                      <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
              </div> <!-- end col -->
              <div class="col-sm-6">
                  <div class="text-sm-end mt-2 mt-sm-0 btnn">
                      <a href="checkout.php" class="btn btn-dark btnn">
                          <i class="mdi mdi-cart-outline me-1"></i> Checkout </a>
                  </div>
              </div> <!-- end col -->
          </div> <!-- end row-->
      </div>

      <div class="col-xl-4">
          <div class="mt-5 mt-lg-0">
              <div class="card border shadow-none">
                  <div class="card-header bg-transparent border-bottom py-3 px-4">
                      <h5 class="font-size-16 mb-0 summary">Order Summary</h5>
                  </div>
                  <div class="card-body p-4 pt-2">

                      <div class="table-responsive">
                          <table class="table mb-0">
                              <tbody>
                                  <tr>
                                      <td>Sub Total :</td>
                                      <td class="text-end">Rs: <?php echo $grand_total; ?></td>
                                  </tr>
                                  <tr>
                                      <td>Discount : </td>
                                      <td class="text-end">Rs: 0</td>
                                  </tr>
                                  <tr>
                                      <td>Shipping Charge :</td>
                                      <td class="text-end">Rs: 0</td>
                                  </tr>
                                  <tr>
                                      <td>Estimated Tax : </td>
                                      <td class="text-end">Rs: 0</td>
                                  </tr>
                                  <tr class="bg-light">
                                      <th>Total :</th>
                                      <td class="text-end">
                                          <span class="fw-bold">
                                          Rs: <?php echo $grand_total; ?>
                                          </span>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <!-- end table-responsive -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end row -->
  
</div>
         
<?php
include 'footer.php'
?>

<script>
// Select the navbar and card sections
var navbar = document.querySelector('nav.bar');
var cardSection1 = document.querySelector('.col-xl-8');
var cardSection2 = document.querySelector('.col-xl-4');

// Set initial z-index of the navbar and card sections
navbar.style.zIndex = 0;
cardSection1.style.zIndex = 0;
cardSection2.style.zIndex = 0;

// Function to handle offcanvas and dropdown visibility
function handleVisibility(event, zIndexValue) {
    if (event.type === 'show.bs.offcanvas' || event.type === 'show.bs.dropdown') {
        navbar.style.zIndex = zIndexValue; // Set lower z-index when offcanvas or dropdown is shown
        cardSection1.style.zIndex = zIndexValue; // Set lower z-index when offcanvas or dropdown is shown
        cardSection2.style.zIndex = zIndexValue; // Set lower z-index when offcanvas or dropdown is shown
    }
}

// Event listeners for offcanvas and dropdown elements
document.addEventListener('show.bs.offcanvas', function(event) {
    handleVisibility(event, -1); // Set z-index to -1 when offcanvas is shown
});

document.addEventListener('show.bs.dropdown', function(event) {
    handleVisibility(event, -1); // Set z-index to -1 when dropdown is shown
});

document.addEventListener('hidden.bs.offcanvas', function(event) {
    navbar.style.zIndex = 0; // Reset z-index when offcanvas is fully hidden
    cardSection1.style.zIndex = 0; // Reset z-index when offcanvas is fully hidden
    cardSection2.style.zIndex = 0; // Reset z-index when offcanvas is fully hidden
});

document.addEventListener('hidden.bs.dropdown', function(event) {
    handleVisibility(event, 0); // Reset z-index when dropdown is hidden
});

</script>


<script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>