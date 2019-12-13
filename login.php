
 <?php require('process.php');
 if(isset($_SESSION['email'])){
    header('location: table.php');
}
?>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="registration.css">
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
                      echo $a5;  
                  ?>
                 <a class="hover-color right-nav order">Order Now</a>
                 <a href="restest.php" class="hover-color right-nav home">Home</a>
                 <a href="gallary.php" class="hover-color right-nav gallery">Gallery</a>
                 <a href="visit.php" class="hover-color right-nav visit">Visit</a>
                 <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
                <?php 
                      echo $a6;  
                  ?>
             </div>
         </div>
         <div class="mainbody">
           <div class="container">


     				<h1>Login</h1>



            <form method="post" action="login.php">
     				<label for="email"><b>Email Address</b></label>
     				<input class="form-control" type="email" name="email" required><?php if($error_email_login != ""){echo $error_email_login;} ?><br>



     				<label for="password"><b>Password</b></label>
     				<input class="form-control" type="password" name="password" required><?php if($error_password_login != ""){echo $error_password_login;} ?><br>
                    <div id="floatleft">
     				<input id="login" class="table-button" type="submit" name="login" value="Log in"><?php if($error_button != ""){echo $error_button;} ?>
                    <a href="registration.php" id="signup"  class="table-button">Want To Sign Up?</a>
                    </div>
          </form>
     			</div>
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
