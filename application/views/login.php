<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">
 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <title>Login Page</title>
  <style>
    /* Basic styling for the page */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0; /* Background color for the entire page */
    }
    .container {
      position: relative;
      width: 100%;
      height: 100vh; /* Full height of viewport */
      overflow: hidden;
    }
    .slideshow {
      position: absolute;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
/*      animation: slide 10s infinite;*/
    }

   /* @keyframes slide {
      0%, 100% { opacity: 0; }
      5% { opacity: 1; }
      50%{opacity: 0}
    }
*/
    .login-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #fff;
    }
    .login-form {
      display: flex;
      flex-direction: column;
    }
    .login-form input {
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-form button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }
    .login-form button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="">

    <!-- Slideshow of background images -->
    <div class="slideshow" style="background-image: url('assets/img/product_bg4.jpg');"></div>
    <div class="slideshow" style="background-image: url('assets/img/product_bg2.jpg');"></div>
    <div class="slideshow" style="background-image: url('assets/img/product_bg3.jpg');"></div>


    <!-- Login form -->
    <div class="login-container">
    <div class="text-light" style="padding-left:200px; text-decoration: none;">
     <a href="<?php base_url() ?>home">
      <h1><i class="fa fa-times text-light" aria-hidden="true"></i></h1>
       
     </a>
    </div>
      <h2>Login</h2>
      <form  class="login-form" method="POST" action="<?=base_url() ?>login">
  <input type="text" name="username" placeholder="username"><br>
  <input type="password" name="password" placeholder="password"><br>
  <input type="submit" value="submit"><br>
  <a class="text-light" href="<?php base_url() ?>signup">Don't have account? signup</a>
</form>
    </div>
  </div>
</body>
<script type="text/javascript">
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.querySelectorAll('.slideshow');
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = 'block';
    setTimeout(showSlides, 5000);
  }
</script>
</html>
