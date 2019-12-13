<?php

$db_user = "root";
  $db_pass = "Manju2000@";
  $db_name = "pachpee";

$conn = new mysqli("localhost",$db_user,$db_pass,$db_name);
if($conn->connect_error){
  die("Connection failed :".$conn->connect_error);
}


session_start();

$name = "";
$user = "";
$email = "";
$phonenumber = "";
$password = "";
$yo=2;
$lo=2;
$error_email="";
$error_password="";
$error_password_login="";
$error_email_login="";
$error_button="";
  
  // for signup page
if(isset($_SESSION['email'])){
    $a3="<a class=\"hover-color right-nav gallery\">welcome ".$_SESSION['email']."</a>";
    $a4="<form action=\"process.php\" method=\"get\" >
          <button type=\"submit\" class=\"logout\" name=\"logout\">
    <i id=\"logout\" class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
</button>
          </form> ";
                  
          
  }
  else{
    $a3="<a href=\"login.php\"  class=\"hover-color right-nav gallery\">Login</a>";
    $a4="";
   
  }

// for login page
  if(isset($_SESSION['email'])){
    $a5="<a class=\"hover-color right-nav gallery\">welcome ".$_SESSION['email']."</a>";
    $a6="<form action=\"process.php\" method=\"get\" >
          <button type=\"submit\" class=\"logout\" name=\"logout\">
    <i id=\"logout\" class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
</button>
          </form> ";
                  
          
  }
  else{
    $a5="";
    $a6="<a href=\"registration.php\"   class=\"hover-color right-nav gallery\">Sign Up</a>";
   
  }


// for other pages
  if(isset($_SESSION['email'])){
    $a1="<a class=\"hover-color right-nav gallery\">welcome ".$_SESSION['email']."</a>";
    $a2="<form action=\"process.php\" method=\"get\" >
          <button type=\"submit\" class=\"logout\" name=\"logout\">
    <i id=\"logout\" class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
</button>
          </form> ";
                  
          
  }
  else{
    $a1="<a href=\"login.php\"  class=\"hover-color right-nav gallery\">Login</a>";
    $a2="<a href=\"registration.php\"   class=\"hover-color right-nav gallery\">Sign Up</a>";
   
  }


// process of registration
if(isset($_POST['create'])){
	$firstname = trim(filter_var($_POST['firstname'],FILTER_SANITIZE_STRING));
	$lastname 		= trim(filter_var($_POST['lastname'],FILTER_SANITIZE_STRING));
	$email 			=trim(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
	$phonenumber	= $_POST['phonenumber'];
	$password 		= sha1($_POST['password']);
  $sql= "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES( '{$firstname}' , '{$lastname}' , '{$email}' , '{$phonenumber}' , '{$password}' );";

  if(preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/",$email)){
    $result = $conn->query("SELECT email from users where email='$email'");
 
     $rows = $result->num_rows;
 
   if ($rows > 0) {
     $yo = 1;
     $error_email = "Error: email already taken";
     
     }
     elseif($password===""){
      $yo=1;
      $error_password="password cannot be empty";
     }
     else{
      $yo=2;
      $error_email="";
      $error_password="";
     } 
   }
   else{
      $y0=1;
     $error_email= "Error: Please enter a valid email";
     
   }

   if($yo===2){
   if ($conn->query($sql) === TRUE){
    header('location: restest.html'); 
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
  }
}



// process of login
 if(isset($_POST['login'])){
       $email=trim(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
       $password=$_POST["password"];
      
       if($email===""){
        $lo=1;
        $error_email_login="Email cannot be empty";
       }
       elseif($password===""){
        $lo=1;
        $error_paswsord_login="Password cannot be empty";
       }
       else{
        $lo=2;
        $error_pasword_login="";
        $error_email_login="";
       }


       if($lo===2){

    $password= sha1($password);   
    $data="SELECT * FROM users WHERE email='{$email}' AND password = '$password';";
    $result_login= $conn->query($data);
      if($result_login->num_rows>0){
        $_SESSION['email']=$email;
        header('location: table.php');
      }
      else{
        $error_button="Your email or password is incorrect";
      }
    
    }
  }



  if (isset($_GET['logout'])) {
  unset($_SESSION['email']);
  session_destroy();
  header('location: login.php');
}
?>

   


