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
          <title>Morata</title>
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
          <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">

          <link rel="stylesheet" href="CSS/contact.css">
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


  <div class="top">
          <a href="main.php">Home</a>
          <p>/ Contact Us</p>
  </div>
    

  <div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11672.945750644447!2d-122.42107853750231!3d37.7730507907087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858070cc2fbd55%3A0xa71491d736f62d5c!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1619524992238!5m2!1sen!2sus"
      width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <section class="contact" id="contact">
        <div class="container-fluid ">
  <div class="row">
                <div class="col-md-7">
                    <div class="title">
                              <h3>Get in Touch</h3>
                              <p>Your email address will not be published. Required fields are marked *</p>
                          </div>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">SEND MESSAGE</button>
                    </form>
                </div>

                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact Information</h3>
                        <p>Class aptent taciti sociosqu ad litora per conubia nostra per inceptos pretium.</p>
                    </div>
                    <div class="content">
                              <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">LOCATION STORE :
                                <br>
                                <span>268 St, Asia Sahiwal/PB 98944, Pakistan.</span></h4>
                        </div>
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">WORK TIME :
                                <br>
                                <span>Monday – Friday: 9:00-20:00</span><br>
                                <span>Saturady: 11:00 – 15:00</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                              <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE NUMBER :
                                <br>
                                <span>+319-2523617</span><br>
                                <span>+321-7200817</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                              <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL ADDRESS :<br>
                              <span>support@morata.com</span><br>
                              <span>zain@gmail.com</span></h4>
                        </div>
                    </div>
                </div>

            </div>
            </div>
</section>













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