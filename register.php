<?php

session_start();

include 'Admin/conn.php';

if(isset($_POST['login'])){
$Email = $_POST['email'];
$password = $_POST['password'];

$loginquery = "SELECT * FROM `users` WHERE `Email` = '$Email' AND `Password` = '$password'";
$query = mysqli_query($conn, $loginquery);

$row = mysqli_num_rows($query);

if($row > 0){
$showdata = mysqli_fetch_assoc($query);
$_SESSION ['aid'] = $showdata ['ID'];
$_SESSION ['name'] = $showdata ['Name'];
$_SESSION ['email'] = $showdata ['Email'];
header('location:main.php');
}
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
      <title>Register</title>
      <link rel="stylesheet" href="CSS/register.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@500&display=swap"
           rel="stylesheet">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   </head>
   <body>


      <?php

          include 'Admin/conn.php';

          if(isset($_POST['signup'])){
          $Name = $_POST['name'];
          $Email = $_POST['useremail'];
          $password = $_POST['pass'];
          $Cpassword = $_POST['Cpassword'];

          $insertquery = "INSERT INTO `users`(`Name`,`Email`,`Password`, `CPassword`) 
                          VALUES ('$Name','$Email','$password','$Cpassword')";
          $query = mysqli_query($conn, $insertquery);

          if($query){
                    header("location:register.php");
          }
          else{
          ?>
          <script>
                    alert('Sorry! Data not inserted');
          </script>
          <?php
          }
          }
          ?>





    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" name="myform" onsubmit="return validateForm()" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Email"/>
              <div class="errorfield" id="emails">
               <span class="formerror"></span>
           </div>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password"/>
              <div class="errorfield" id="pass">
               <span class="formerror"></span>
           </div>
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form" method="POST" name="myforms" onsubmit="return validateForms()">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Full Name" />
              <div class="errorfield" id="fullname">
               <span class="formerrors"></span>
           </div>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="useremail" placeholder="Email" />
              <div class="errorfield" id="emailerror">
               <span class="formerrors"></span>
           </div>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Password" />
              <div class="errorfield" id="passerror">
               <span class="formerrors"></span>
           </div>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="Cpassword" placeholder="Confirm Password" />
              <div class="errorfield" id="cpass">
               <span class="formerrors"></span>
           </div>
            </div>
            <input type="submit" name="signup" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    




      <script src="JS/register.js"></script>
   </body>
</html>