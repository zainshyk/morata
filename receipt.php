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
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Morata</title>
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
          <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">

<!-- ========== All CSS files linkup ========= -->
<link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Admin/assets/css/lineicons.css" />
    <link rel="stylesheet" href="Admin/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="Admin/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="Admin/assets/css/main.css" />



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

<section>
        <div class="container">
          <!-- ========== title-wrapper end ========== -->

          <!-- Invoice Wrapper Start -->
          <div class="invoice-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="invoice-card card-style mb-30">
                    <?php

include 'Admin/conn.php';
$get = $_GET['ID'];
$display = "SELECT * FROM `order` WHERE id='$get' && User = '$user'";
$display = mysqli_query($conn, $display);
while($view= mysqli_fetch_array($display)){
?>
                  <div class="invoice-header">
                    <div class="invoice-for">
                      <h2 class="mb-10">Invoice</h2>
                      <p class="text-sm">
                        Morata Online Shopping Store
                      </p>
                    </div>
                    <div class="invoice-logo">
                      <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                    </div>
                    <div class="invoice-date">
                      <p><span>Date Issued:</span> 20/02/2024</p>
                      <p><span>Date Due:</span> 20/02/2028</p>
                      <p><span>Order ID:</span> #<?php echo $view ['ID']; ?></p>
                    </div>
                  </div>
                  <div class="invoice-address">
                    <div class="address-item">
                      <h5 class="text-bold">From</h5>
                      <h1><?php echo $view ['Name']; ?></h1>
                      <p class="text-sm">
                      <?php echo $view ['Address']; ?>
                      </p>
                      <p class="text-sm">
                        <span class="text-medium">Email:</span>
                        <?php echo $view ['Email']; ?>
                      </p>
                    </div>
                    <div class="address-item">
                      <h5 class="text-bold">To</h5>
                      <h1>Morata Corp.</h1>
                      <p class="text-sm">
                        2972 Westheimer Rd. Santa Ana, Illinois 85486
                      </p>
                      <p class="text-sm">
                        <span class="text-medium">Email:</span>
                        support@morata.com
                      </p>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="invoice-table table">
                      <thead>
                        <tr>
                          <th class="service">
                            <h6 class="text-sm text-medium">Product</h6>
                          </th>
                          <th class="desc">
                            <h6 class="text-sm text-medium">Category</h6>
                          </th>
                          <th class="qty">
                            <h6 class="text-sm text-medium">Quantity</h6>
                          </th>
                          <th class="amount">
                            <h6 class="text-sm text-medium">Amounts</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="text-sm"><?php echo $view ['Product']; ?></p>
                          </td>
                          <td>
                            <p class="text-sm">
                            <?php echo $view ['Category']; ?>
                            </p>
                          </td>
                          <td>
                            <p class="text-sm"><?php echo $view ['Quantity']; ?></p>
                          </td>
                          <td>
                            <p class="text-sm">Rs: <?php echo $view ['Price']; ?></p>
                          </td>
                        </tr>
                        
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h6 class="text-sm text-medium">Subtotal</h6>
                          </td>
                          <td>
                            <h6 class="text-sm text-bold"><?php echo $view ['SPrice']; ?></h6>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h6 class="text-sm text-medium">Discount</h6>
                          </td>
                          <td>
                            <h6 class="text-sm text-bold">0%</h6>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h6 class="text-sm text-medium">Shipping Charge</h6>
                          </td>
                          <td>
                            <h6 class="text-sm text-bold">Free</h6>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h4>Total</h4>
                          </td>
                          <td>
                            <h4>Rs: <?php echo $view ['Total']; ?></h4>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                    <div class="alert">
                      <h5 class="text-bold mb-15">Notes:</h5>
                      <p class="text-sm text-gray">
                        All accounts are to be paid within 7 days from receipt
                        of invoice. To be paid by cheque or credit card or
                        direct payment online. If account is not paid within 7
                        days the credits details supplied as confirmation of
                        work undertaken will be charged the agreed quoted fee
                        noted above.
                      </p>
                    </div>
                  </div>
                  <div class="invoice-action">
                    <ul class="d-flex flex-wrap align-items-center justify-content-center">
                      <li class="m-2">
                        <a href="#0" class="main-btn primary-btn-outline btn-hover">
                          Download Invoice
                        </a>
                      </li>
                      <li class="m-2">
                        <a href="#0" class="main-btn primary-btn btn-hover">
                          Send Invoice
                        </a>
                      </li>
                    </ul>
                  </div>
                  <?php
          };
          ?>
                </div>
                <!-- End Card -->
              </div>
              <!-- ENd Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- Invoice Wrapper End -->
        </div>
        <!-- end container -->
      </section>

<style>
body a{
 text-decoration: none;
}
</style>



<script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>