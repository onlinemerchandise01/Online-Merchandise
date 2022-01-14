


<?php

       session_start();

       if(isset($_SESSION['name'])){
        
             echo "<h1> Hi ".$_SESSION['name']." happy shopping</h1>";
          }
          
         // echo "<br><a href='logout.php'><input type='button' value='Logout' name='logout'></a>"; }
             else{
            echo "<script>alert('Log in first to access home !!')</script>";

          echo "<script>location.href='login.php'</script>";
          }

?>





<!DOCTYPE html>
<html>


<head>
  <title>About Us</title>
  <link rel="shortcut icon" href="" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link rel="stylesheet" href="css/hidingnav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />

</head>

<body>
  <div id="navbar">
    <a href="index.html">Home</a>
    <a href="products.html">Products</a>
    <a href="work.html">Our Work</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Account</a>
  </div>


  <div class="logo">
    <img src="image/logo0.png" alt="">
  </div>





  <div class="footer">

    <div class="footer1" id="footertext1">
      <h3>Online Merchandise</h3>
      <hr>
      <p>Sylhet-3100, Sylhet, Bangladesh <br>
        Helpline: +8801797915118, +8801788355818 <br>
        Email: onlinemerchandise01@gmail.com <br>
        Available: Saturday-Thusday( 9:00am to 12:00pm)<br>
      </p>
      <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook fa-3x"></i></a>
      <a href="https://www.messenger.com/" target="blank"><i class="fab fa-facebook-messenger fa-3x"></i></a>
      <a href="https://www.instagram.com//" target="blank"><i class="fab fa-instagram fa-3x"></i></a>
      <a href="https://onlinemerchandise01@gmail.com/" target="blank"><i class="fas fa-envelope-square fa-3x"></i></a>
      <br><br><br><br>
      <hr>
      <p>Copyright© 2021 Online Merchandise</p>
    </div>

    <div class="footer1" id="footertext2">
      <h3>Follow us on</h3>
      <img src="image/footer.png" alt="">
    </div>

  </div>



<div class="logout"><a href='logout.php'><input type='button' value='Logout' name='logout'></a></div>


<script src="hidingnav.js"></script>

</body>
</html>