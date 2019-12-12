<html lang="en">
<?php include('process.php'); ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="visitcss.css">
    <link href="font.css" rel="stylesheet">
     <script src="fontawesome.js"></script>
     <link rel="stylesheet" href="css1.css" media="all">
    <link rel="stylesheet" href="css2.css" media="all">
    <link rel="stylesheet" href="css3.css" media="all">

    <title>AYUSH's</title>

</head>

<body class="hover-visit" style="background: white none repeat scroll 0% 0%; color: black;">
    <div id="content">

        <div class="header">
            <div class="left"><a href="restest.php" class="title">A Y U S H 'S</a></div>
            <div class="right">
                <?php echo $a1; ?>
                <a href="order.php" class="hover-color right-nav order">Order Now</a>
                <a href="restest.php" class="hover-color right-nav home">Home</a>
                <a href="gallary.php" class="hover-color right-nav gallery">Gallery</a>
                <a href="visit.php" class="hover-color right-nav visit">Visit</a>
                <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
                <?php echo $a2; ?>
            </div>
        </div>
        <div class="mainbody">
            <h1>— MAKE A RESERVATION —</h1>
            <div class="table-button"><a href="table.php" id="table_button">FIND A TABLE</a></div>
            <div class="contact">
                <h3 class="contact-title">Contact<br></h3><a>9462 642 958<br></a><a>ayu023ban@gmail.com</a>
            </div>
            <div class="location">
                <h3 class="location-title">Location<br></h3><a>001 Some Street <br></a><a>London, UK, 00000</a>
            </div>
            <div class="hours">
                <h3 class="hours-title">Hours<br></h3><a>Mon–Wed 7–11<br></a><a>Thu–Sat 3–12<br></a><a>Sun 2–10</a>
            </div><img class="drink-img" src="orderpageimages/drink2.jpg">
          <div><a href="order.php"><div class="eat-button">VIEW FOOD MENU</div></a>
            <a href="drinks.php"><div class="drink-button">VIEW DRINKS MENU</div></a></div>
            <hr class="thin"><a href="restest.html" class="title-footer"> —A Y U S H 'S— </a>
            <div class="social-div">
                    <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    

</body>

</html>