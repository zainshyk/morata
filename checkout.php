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






<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
      <title>Checkout</title>
      <link rel="stylesheet" href="CSS/checkout.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@500&display=swap"
           rel="stylesheet">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   </head>
   <body>


      <?php

          include 'Admin/conn.php';

          if(isset($_POST['order'])){
          $Name = $_POST['name'];
          $Email = $_POST['email'];
          $Address = $_POST['address'];
          $City = $_POST['city'];
          $State = $_POST['state'];
          $Zip = $_POST['zip'];
          $Accname = $_POST['cardname'];
          $Accnumber = $_POST['cardnumber'];
          $Expmonth = $_POST['expmonth'];
          $Expyear = $_POST['expyear'];
          $Cvv = $_POST['cvv'];

          $cartquery = "SELECT * FROM `cart`";
          $cartquery = mysqli_query($conn, $cartquery);
   $total = 0;
   if(mysqli_num_rows($cartquery) > 0){
      while($item = mysqli_fetch_assoc($cartquery)){
         $Image1[] = $item['Image1'];
         $Product[] = $item['Product'];
         $Category[] = $item['Category'];
         $Brand[] = $item['Brand'];
         $Price[] = $item['Price'];
         $Quantity[] = $item['Quantity'];
         $SPrice = (is_numeric($item['Price']) && is_numeric($item['Quantity'])) ? $item['Price'] * $item['Quantity'] : 0;
         $total += $SPrice;
      };
   };

   $Pimage = implode(', ',$Image1);
   $Pname = implode(', ',$Product);
   $Pcategory = implode(', ',$Category);
   $Pbrand = implode(', ',$Brand);
   $Pprice = implode(', ',$Price);
   $Pquantity = implode(', ',$Quantity);
   // $Subprice = implode(,$SPrice);

          $query = "INSERT INTO `order`(`Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Account Name`, `Account Number`,
           `Exp Month`, `Exp Year`, `CVV`, `Image1`, `Product`, `Category`, `Brand`, `Price`, `Quantity`, `SPrice`, `Total`) 
           VALUES ('$Name','$Email','$Address','$City','$State','$Zip','$Accname','$Accnumber','$Expmonth',
           '$Expyear','$Cvv','$Pimage','$Pname','$Pcategory','$Pbrand','$Pprice','$Pquantity','$SPrice','$total')";
          $query = mysqli_query($conn, $query);

          if($query){
            mysqli_query($conn, "DELETE FROM `cart`");
                    header("location:cart.php");
          }
          else{
          ?>
          <script>
                    alert('Sorry! Your Order is not Completed');
          </script>
          <?php
          };
          };
          ?>


<div class="top">
<span>Check Out Details</span>
<a href="cart.php"><i class="fa-solid fa-bag-shopping" style="color: #01c5c5;"></i></a>
</div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="POST" name="myform" onsubmit="return validateForm()">
      
        <div class="row">
          <div class="col-50 address">
            <h3>BILLING ADDRESS</h3>
            <div>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Zain I.">
            <div class="errorfield" id="fullname">
               <span class="formerror"></span>
           </div>
            </div>
            <div>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="zain@example.com">
            <div class="errorfield" id="emails">
               <span class="formerror"></span>
           </div>
            </div>
            <div>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <div class="errorfield" id="adress">
               <span class="formerror"></span>
           </div>
            </div>
            <div>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="SWL">
            <div class="errorfield" id="cityerror">
               <span class="formerror"></span>
           </div>
            </div>

            <div class="row">
              <div class="col-50">
                <div>
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="PB">
                <div class="errorfield" id="states">
               <span class="formerror"></span>
           </div>
                </div>
              </div>
              <div class="col-50">
                <div>
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="57000">
                <div class="errorfield" id="zips">
               <span class="formerror"></span>
           </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-50 pay">
            <h3>PAYMENT</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <i class="fa-brands fa-cc-visa" style="color: navy;"></i>
              <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
              <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
              <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
              <i class="fa-brands fa-cc-paypal" style="color:rgb(6, 143, 177);"></i>
            </div>
            <div>
            <label for="cname">Account Name</label>
            <input type="text" id="cname" name="cardname" placeholder="Zain Imran">
            <div class="errorfield" id="cardfullname">
               <span class="formerror"></span>
           </div>
            </div>
            <div>
            <label for="ccnum">Account Number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <div class="errorfield" id="cardnum">
               <span class="formerror"></span>
           </div>
            </div>
            <div>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="August">
            <div class="errorfield" id="monthexp">
               <span class="formerror"></span>
           </div>
            </div>
            <div class="row">
              <div class="col-50">
                <div>
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
                <div class="errorfield" id="yearexp">
               <span class="formerror"></span>
           </div>
                </div>
              </div>
              <div class="col-50">
                <div>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
                <div class="errorfield" id="cvverror">
               <span class="formerror"></span>
           </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <button class="btn" type="submit" name="order">Order Now</button>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
    <form action="" method="POST">
      <div class="card wishlist border-0" >
         <div class="row">
   <div class="display-order">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
   <?php
         $cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE User = '$user'");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($cart) > 0){
            while($result = mysqli_fetch_assoc($cart)){
                    $total_price = (is_numeric($result['Price']) && is_numeric($result['Quantity'])) ? $result['Price'] * $result['Quantity'] : 0;
            $grand_total = $total += $total_price;
      ?>
      <div class="checkitem">
      <div class="col-md-4 mt-1">
         <img src="Admin/upload/<?php echo $result ['Image1']; ?>" class="card-img-top" height="50" style="width: 50px;">
       </div>
       <div class="col-md-8">
         <div class="card-body wishtext">
            <small class="card-text mb-4"><?php echo $result ['Product']; ?></small><br>
            <span class="card-subtitle">Rs: <?php echo $result['Price']; ?></span>
          </div>
         </div>
   </div>
      <hr>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>Your Cart is Empty!</span></div>";
      }
      ?>
      <p class="total">Total <span name="price" class="grand-total">Rs: <?= $grand_total; ?>/- </span></p>
      
      </div>
   </div>
</div>
</form>
    </div>
  </div>
</div>
<script src="JS/checkout.js"></script>
<script src="JS/js/bootstrap.bundle.min.js"></script>
   </body>
</html>