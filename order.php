<html lang="en">
<?php include('process.php'); ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="visitcss.css">
    <link href="font.css" rel="stylesheet">


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
                <a href="https://twitter.com/ayushbansal023" ><img class="social_link hover-color right-nav" id="img" src="mainpageimages/twitter-black.png"></a>
                <a href="https://www.facebook.com/ayushbansal23"><img class="social_link hover-color right-nav" id="img" src="mainpageimages/fb-black.png"></a>
                <a href="https://www.instagram.com/ayu023ban/"> <img class="social_link hover-color right-nav" id="img" src="mainpageimages/instagram-black.png"></a>
               <?php
                      echo $a2;
                  ?>
            </div>
        </div>
        <div class="mainbody">
            <h1>— ENTRÉES —</h1><em>Starters and Maincourse</em>
            <div>
                    <img class="dessert-img" src="orderpageimages/hors1.jpg">
                <p> — Hors d'oeuvres — <br>Goat cheese crostini with fig-olive tapenade<br>$22</p><br>
                <img class="dessert-img" src="orderpageimages/Amuse2.jpg">
                <p> — Amuse-bouche — <br>Sweet potato chips with goat cheese and caviar<br>$24</p><br>
                <img class="dessert-img" src="orderpageimages/3.jpg">
                <p> — Bouillabaisse — <br>dolor sit amet, consectetur<br>$27</p><br>
                <img class="dessert-img" src="orderpageimages/Feijoada3.jpg">
                <p> — Feijoada  — <br> ut labore, et dolore <br>$11</p><br>
                <hr>
            </div>
            <div><img class="dessert-img" src="orderpageimages/dessert.jpg">
                <h1>— DESSERT —</h1><em>Culpa qui officia deserunt mollit </em><br>
                <img class="dessert-img" src="orderpageimages/desertleche1.jpg">
                <p> — Leche Asada — <br>lBaked Custard with Caramel Sauce<br>$12</p><br>
                <img class="dessert-img" src="orderpageimages/lemon4.jpg">
                <p> — Lemon Meringue Pie — <br>limoncello blueberry coulis, candied lemon<br>$12</p><br>
                <img class="dessert-img" src="orderpageimages/brig3.jpg">
                <p> — Brigadeiros — <br>Brazillian Fudge Balls <br>$9</p><br>
                <img class="dessert-img" src="orderpageimages/edit.jpg">
                <p> — Buñuelos — <br>fried dough balls with different kinds of fillings <br>$8</p>
            </div>
            <div class="res-button"><a href="table.php">MAKE A RESERVATION</div>
            <hr class="thin"><a href="restest.php" class="title-footer"> —A Y U S H 'S— </a>
            <div class="social-div">
              <a href="https://twitter.com/ayushbansal023" ><img class="" id="twitter" src="mainpageimages/twitter-black.png"></a>
              <a href="https://www.facebook.com/ayushbansal23"><img class="" id="facebook" src="mainpageimages/fb-black.png"></a>
              <a href="https://www.instagram.com/ayu023ban/"> <img class="" id="instagram" src="mainpageimages/instagram-black.png"></a>
            </div>
        </div>
    </div>

</body>

</html>
