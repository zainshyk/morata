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

          <link rel="stylesheet" href="CSS/aboutus.css">
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
          <p>/ About Us</p>
  </div>

<section class="welcome">
<span>WELCOME TO MORATA</span>
<h4>OUR PERFECT STORE</h4>
<p>Over 20 years of experience, we have crafted thousands of strategic discovery process that <br>
          enables us to peel back the layers which enable us to understand, connect.</p>
          <div class="aboutimg">
          <div class="zoom">
          <img src="./images/img_about.webp" alt="">
</div>
</div>
</section>
<div class="row">
<div class="col-3 sale">
<h4>21K</h4>
<span>Products For Sale</span>
<p>Class aptent taciti sociosqu litora torquent per conubia.</p>
</div>
<div class="col-3 sale">
<h4>21K</h4>
<span>Products For Sale</span>
<p>Class aptent taciti sociosqu litora torquent per conubia.</p>
</div>
<div class="col-3 sale">
<h4>21K</h4>
<span>Products For Sale</span>
<p>Class aptent taciti sociosqu litora torquent per conubia.</p>
</div>
<div class="col-3 sale">
<h4>21K</h4>
<span>Products For Sale</span>
<p>Class aptent taciti sociosqu litora torquent per conubia.</p>
</div>
</div>
<hr class="hr">

<section class="why">
<div class="why1">
<span>WHY CHOOSE US</span>
<h4>OVER 20 YEARS OF EXPERIENCE</h4>
<p>Over 20 years of experience, we have crafted thousands of strategic discovery process that <br>
          enables us to peel back the layers which enable us to understand, connect.</p>
</div>
<div class="row">
<div class="col-4">
<img src="./images/img_about_2.webp" alt="">
<h5>1. PERFECT SPACE</h5>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos vel pretium lectus qua.
           Nunc id cursus metus ididunt ut labore metus episcing.</p>
</div>
<div class="col-4">
<img src="./images/img_about_3.webp" alt="">
<h5>1. PERFECT SPACE</h5>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos vel pretium lectus qua.
           Nunc id cursus metus ididunt ut labore metus episcing.</p>
</div>
<div class="col-4">
<img src="./images/img_about_4.webp" alt="">
<h5>1. PERFECT SPACE</h5>
<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos vel pretium lectus qua.
           Nunc id cursus metus ididunt ut labore metus episcing.</p>
</div>
</div>
</section>

<hr class="hr">

<section class="team">
<span>OUR PERFECT TEAM</span>
<h4>AMAZING PEOPLE</h4>
<p>Over 20 years of experience, we have crafted thousands of strategic discovery process that <br>
          enables us to peel back the layers which enable us to understand, connect.</p>
</div>
<div class="row">
<div class="col-3">
<img src="./images/img_our_team.webp" alt="">
<h5>Michael Anthony</h5>
<h5>Founder / CEO</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae error ad quia harum molestiae.</p>
</div>
<div class="col-3">
<img src="./images/img_our_team (1).webp" alt="">
<h5>Alexandra Miller</h5>
<h5>Founder / CEO</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae error ad quia harum molestiae.</p>
</div>
<div class="col-3">
<img src="./images/img_our_team_2.webp" alt="">
<h5>Frank ge  Bruyne</h5>
<h5>Founder / CEO</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae error ad quia harum molestiae.</p>
</div>
<div class="col-3">
<img src="./images/img_our_team_3.avif" alt="">
<h5>Helem Aleema</h5>
<h5>Founder / CEO</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est recusandae error ad quia harum molestiae.</p>
</div>
</section>















<div class="responsive-container-block bigContainer">
          <div class="responsive-container-block Container">
            <div class="responsive-container-block leftSide">
              <p class="text-blk heading">
                Meet Our Creative Team
              </p>
              <p class="text-blk subHeading">
                Morata is an Ecommerce Online platform that delivers online shopping, programs and deals for Individual, Advertising &amp; Media Specialist, Online Marketing Professionals, Freelancers and anyone looking to pursue a career in digital marketing, Accounting, Web development, Programming. Multimedia and CAD design.
              </p>
            </div>
            <div class="responsive-container-block rightSide">
              <img class="number1img" src="./images/1000035322.jpg">
              <img class="number2img" src="./images/team6.jpg">
              <img class="number3img" src="./images/team3.avif">
              <img class="number5img" src="./images/team4.jpg">
              <iframe allowfullscreen="allowfullscreen" class="number4vid" poster="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/b242.png" src="https://www.youtube.com/embed/svg%3E?">
              </iframe>
              <img class="number7img" src="./images/user.jpg">
              <img class="number6img" src="./images/team5.jpg">
            </div>
          </div>
        </div>




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



<script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>