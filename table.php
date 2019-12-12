<?php require('orderprocess.php');
 if(!isset($_SESSION['email'])){
	header('location: login.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="drinkscss.css">
    <link href="font.css" rel="stylesheet">
    <script src="fontawesome.js"></script>
    <link rel="stylesheet" href="css1.css" media="all">
    <link rel="stylesheet" href="css1.css" media="all">
    <link rel="stylesheet" href="css3.css" media="all">

    <title>AYUSH's</title>

</head>

<body class="" style="background: white none repeat scroll 0% 0%; color: black;">
    <div id="content">

        <div class="header">
            <div class="left"><a href="restest.php" class="title">A Y U S H 'S</a></div>
            <div class="right">
                <?php 
                      echo $a1;  
                  ?>
                <a href="order.php" class="hover-color right-nav order">Order Now</a>
                <a href="restest.php" class="hover-color right-nav home">Home</a>
                <a href="gallary.php" class="hover-color right-nav gallery">Gallery</a>
                <a href="visit.php" class="hover-color right-nav visit">Visit</a>
                <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
               <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
               <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
               <?php 
                      echo $a2;  
                  ?>
            </div>
        </div>
        <div class="mainbody">
            
            <hr class="thin"><a href="restest.php" class="title-footer"> —A Y U S H 'S— </a>
            <div class="social-div">
                    <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>
