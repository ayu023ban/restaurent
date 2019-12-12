<html lang="en">
<?php include('process.php'); ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="restestcss.css">
        <link href="font.css" rel="stylesheet">
     <script src="fontawesome.js"></script>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">

  <title>AYUSH's</title>
    </head>
    <body class="">
        <div id="content">
      
        <div class="header">
            <div class="left">
                <a class="title">A Y U S H 'S</a>
            </div>
            <div class="right">
              <?php 
                      echo $a1;  
                  ?>
                <a href="order.php" class="hover-color right-nav order">Order Now</a>
                <a class="hover-color right-nav home">Home</a>
                <a href="gallary.php" class="hover-color right-nav gallery">Gallery</a>
                <a href="visit.php" class="hover-color right-nav visit">Visit</a>
                <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
               <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
               <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i>
                <?php 
                      echo $a2;  
                  ?>
            </div>
        </div>
        <div class="mainbody">
            <p class="adress">001 Some Street — London, UK — 079 7897 0336</p>
            <a href="order.html" class="mid-nav eat-mid">EAT</a>
            <a href="drinks.html" class="mid-nav drink-mid">DRINK</a>
            <a href="visit.html" class="mid-nav visit-mid">VISIT</a>
        </div>
        <script type="text/javascript" src="java.js">
        </script>
        </div>
      </body>
</html>