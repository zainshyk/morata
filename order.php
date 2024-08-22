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
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
          <title>Orders</title>
          <link rel="stylesheet" href="CSS/order.css">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bdy">


<?php
  include 'navbar.php'
  ?>

<div class="top">
          <a href="main.php">Home</a>
          <p>/ Your Orders</p>
  </div>

  <?php
if(isset($_SESSION['email'])){
  ?>
  <h2>YOUR ORDERS DETAIL</h2>
  <?php
}else{
  echo "<h2>THERE IS NO ORDER HERE! <i class='fa-regular fa-face-smile' style='color: #000000;'></i></h2>";
}
?>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-bordered table-hover dt-responsive mb-5">
        <?php
if(isset($_SESSION['email'])){
  ?>
        <thead>
          <tr>
            <th>#ID</th>
            <th>PRODUCT NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>STATUS</th>
            <th>RECEIPT</th>
          </tr>
        </thead>
        <?php
}else{

}
        ?>
        <tbody>
        <?php

include 'Admin/conn.php';
if(isset($_SESSION['email'])){

$display = "SELECT * FROM `order` WHERE User = '$user'";
$display = mysqli_query($conn, $display);
while($view= mysqli_fetch_array($display)){
?>
          <tr>
            <td>#<?php echo $view ['ID']; ?></td>
            <td><?php echo $view ['Product']; ?></td>
            <td><?php echo $view ['Quantity']; ?></td>
            <td>Rs:<?php echo $view ['Price']; ?></td>
            <td>
    <?php
    // Display icon and text based on status
    switch ($view['Status']) {
        case 0:
            echo '<span class="status text-warning"> Pending</span>';
            break;
        case 1:
            echo '<span class="status text-success"> Approved</span>';
            break;
        case 2:
            echo '<span class="status text-danger"> Rejected</span>';
            break;
        case 3:
            echo '<span class="status text-info"> Shipping</span>';
            break;
        case 4:
            echo '<span class="status text-primary"> Complete</span>';
            break;
        default:
            echo 'Unknown';
            break;
    }
    ?>
</td>
            <td><a href="receipt.php?ID=<?php echo $view ['ID']; ?>">Open <i class="fa-solid fa-receipt"></i></a></td>
          </tr>
          <?php
          };
        }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include 'footer.php'
?>
          


          <script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>