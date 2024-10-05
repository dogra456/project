<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css">
  <title>signup Page</title>
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
    <div class="slideshow" style="background-image: url('assets/img/product_bg2.jpg');"></div>
    <div class="slideshow" style="background-image: url('assets/img/product_bg3.jpg');"></div>
    <div class="slideshow" style="background-image: url('assets/img/product_bg4.jpg');"></div>
    <!-- Login form -->
    <div class="login-container">
        <div class="text-light" style="padding-left:430px; text-decoration: none;">
     <a href="<?php base_url() ?>home">
      <h1><i class="fa fa-times text-light" aria-hidden="true"></i></h1>
       
     </a>
    </div>
      <h2>Signup</h2>
      <form  class="login-form" method="POST" action="<?=base_url() ?>signup">
        <div class="row">
           <div class="col-6">
            <input type="text" name="username" placeholder="username"><br>
          <input type="fullname" name="fullname" placeholder="fullname"><br>
          <input type="email" name="email" placeholder="email"><br>
            <input type="text" name="address" placeholder="address"><br>

         </div>
         <div class="col-6">
          <input type="fullname" name="phone_number" placeholder="phone_number"><br>
          <input type="password" name="password" placeholder="password"><br>
          <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm password" required>

         </div>
        </div>

          <input type="submit" onclick="checkPassword()" value="submit"><br>
           <a href="<?php base_url() ?>login">Already have account? Login</a>
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

<script type="text/javascript">
  function checkPassword() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (password !== confirm_password) {
        alert("Passwords do not match");
        return false;
    } else {
        alert("Passwords match");
        // You can proceed with form submission or further processing here
        return true;
    }
}
</script>

</html>
