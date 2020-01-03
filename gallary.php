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
                <?php echo $a1 ?>
                <a href="order.php" class="hover-color right-nav order">Order Now</a>
                <a href="restest.php" class="hover-color right-nav home">Home</a>
                <a href="gallary.php" class="hover-color right-nav gallery">Gallery</a>
                <a href="visit.php" class="hover-color right-nav visit">Visit</a>
                <a href="https://twitter.com/ayushbansal023" ><img class="social_link hover-color right-nav" id="img" src="mainpageimages/twitter-black.png"></a>
                <a href="https://www.facebook.com/ayushbansal23"><img class="social_link hover-color right-nav" id="img" src="mainpageimages/fb-black.png"></a>
                <a href="https://www.instagram.com/ayu023ban/"> <img class="social_link hover-color right-nav" id="img" src="mainpageimages/instagram-black.png"></a>
               <?php echo $a2 ?>
            </div>
        </div>
        <div class="mainbody">
        <div>
                <h1>———— GALLARY ————</h1>
                <div class="table-button"><a id="table_button" href="table.php">FIND A TABLE</a></div>
               <div class=container> <p class="imgtitle">NIGHT VIEW</p><div class="image"><img class="dessert-img" src="gallaryimages/gallary2.jpg"></div></div><hr>
               <div class=container> <p class="imgtitle">STREET VIEW</p><div class="image"><img class="dessert-img" src="gallaryimages/gallary3.jpg"></div></div><hr>
               <div class=container> <p class="imgtitle">ROYAL DINNER</p><div class="image"><img class="dessert-img" src="gallaryimages/gallary4.jpg"></div></div><hr>
               <div class=container> <p class="imgtitle">GATHERING PLACE</p><div class="image"><img class="dessert-img" src="gallaryimages/gallary5.jpeg"></div></div><hr>
               <div class=container> <p class="imgtitle">LOUNGE</p><div class="image"><img class="dessert-img" src="gallaryimages/gallary1.jpg"></div></div>
            </div>
            <div class="res-button"><a href="table.php">MAKE A RESERVATION</a></div>
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
