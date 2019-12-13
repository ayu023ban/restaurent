<html lang="en">
<?php include('process.php'); ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="visitcss.css">
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
            <h1>— Hot and Sweet —</h1><em>Soft and Hard Hot drinks</em>
            <div>
                    <img class="dessert-img" src="drinks/recipe-hot-toddy.jpg">
                <p> — HOT TODDY — <br>mix of boiling water, sugar, lemon and whiskey.<br>$22</p><br>
                <img class="dessert-img" src="drinks/the-hornitos-hot-shotty.jpeg">
                <p> — The Hornitos Hot Shotty — <br>a measure of tequilla to a cup of steaming chocolaty goodness.<br>$24</p><br>
                <img class="dessert-img" src="drinks/last-minute-mulled-wine-2.jpg">
                <p> — LAST-MINUTE MULLED WINE — <br>pot of red wine and little bourboun or brandy.<br>$27</p><br>
                <img class="dessert-img" src="drinks/fa-heated_affair.jpg">
                <p> — HEATED AFFAIR — <br> hot spiced apple cider and tops it off with some rich cream <br>$11</p><br>
                <hr>
            </div>
            <div><img class="dessert-img" src="drinks/wine.jpg">
                <h1>— BEVERAGES —</h1><em>Culpa qui officia deserunt mollit </em><br>
                <img class="dessert-img" src="drinks/guinness.jpg">
                <p> — Guinness Of Ireland — <br>a perfect pint of this ruby red (not black) nectar<br>$12</p><br>
                <img class="dessert-img" src="drinks/pina-colada.jpg">
                <p> — Pina Colada — <br> sipping this mixture of coconut milk, pineapple juice and rum <br>$12</p><br>
                <img class="dessert-img" src="drinks/gin.jpg">
                <p> — GIN of ENGLAND — <br>flavour from juniper berries<br>$9</p><br>
                <img class="dessert-img" src="drinks/drinkingcampari.jpg">
                <p> — Campari — <br>Italian aperitif, with a bright red colour and unique flavour <br>$8</p>
            </div>
            <div class="res-button"><a href="table.php">MAKE A RESERVATION</a></div>
            <hr class="thin"><a href="restest.php" class="title-footer"> —A Y U S H 'S— </a>
            <div class="social-div">
                    <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    

</body>

</html>