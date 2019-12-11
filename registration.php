<?php require('connection.php');
 ?>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="registration.css">
     <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400&amp;display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/e24ca22cc7.js"></script>
     <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
     <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
     <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">

     <title>AYUSH's</title>

 </head>

 <body class="" style="background: white none repeat scroll 0% 0%; color: black;">
     <div id="content">

         <div class="header">
             <div class="left"><a href="restest.html" class="title">A Y U S H 'S</a></div>
             <div class="right">
                 <a class="hover-color right-nav order">Order Now</a>
                 <a href="restest.html" class="hover-color right-nav home">Home</a>
                 <a class="hover-color right-nav gallery">Gallery</a>
                 <a href="visit.html" class="hover-color right-nav visit">Visit</a>
                 <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
             </div>
         </div>
         <div class="mainbody">
           <div class="container">

             <?php
               if (isset($_POST['create'])) {
                 $firstname=$_POST['firstname'];
                 $lastname=$_POST['lastname'];
                 $email=$_POST['email'];
                 $mobile=$_POST['mobile'];
                 $password=$_POST['password'];
                 $sql= "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES( '{$firstname}' , '{$lastname}' , '{$email}' , '{$mobile}' , '{$password}' );";

                 if ($conn->query($sql) === TRUE){
                   echo "New record created successfully";
                 } else {
                   echo "Error: " . $sql . "<br>" . $db->error;
                 }

               }

              ?>
     				<h1>Registration form</h1>

            <form action="registration.php" method="post">
     				<label for="firstname"><b>First Name</b></label>
     				<input class="form-control" type="text" name="firstname" required><br>

     				<label for="lastname"><b>last Name</b></label>
     				<input class="form-control" type="text" name="lastname" required><br>

     				<label for="email"><b>Email Address</b></label>
     				<input class="form-control" type="email" name="email" required><br>

     				<label for="mobile"><b>Mobile Number</b></label>
     				<input class="form-control" type="text" name="mobile" required><br>

     				<label for="password"><b>Password</b></label>
     				<input class="form-control" type="password" name="password" required><br>

     				<input class="table-button" id="register" type="submit" name="create" value="Sign Up">
          </form>
     			</div>
             <hr class="thin"><a href="restest.html" class="title-footer"> —A Y U S H 'S— </a>
             <div class="social-div">
                     <a href="https://twitter.com/ayushbansal023" ><i id="twitter"  class="fab fa-twitter social-nav" aria-hidden="true"></i></a>
                     <a href="https://www.facebook.com/ayushbansal23"> <i id="facebook" class="fab fa-facebook social-nav" aria-hidden="true"></i></a>
                     <a href="https://www.instagram.com/ayu023ban/"> <i id="insta" class="fab fa-instagram social-nav" aria-hidden="true"></i></a>
             </div>
         </div>
       </div>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();

				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})

					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

			}else{

			}

		});

	});

</script>
   </body>
</html>