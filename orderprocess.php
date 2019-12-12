<?php
	$db_user = "root";
	$db_pass = "Manju2000@";
	$db_name = "pachpee";

$conn = new mysqli("localhost",$db_user,$db_pass,$db_name);
if($conn->connect_error){
	die("Connection failed :".$conn->connect_error);
} 
session_start();

if(isset($_SESSION['email'])){
    $a1="<a class=\"hover-color right-nav gallery\">welcome ".$_SESSION['email']."</a>";
    $a2="<form action=\"process.php\" method=\"get\" >
          <button type=\"submit\" class=\"logout\" name=\"logout\">
    <i id=\"logout\" class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
</button>
          </form> ";
                  
          
  }
  else{
    $a1="";
    $a2="<a href=\"registration.php\"   class=\"hover-color right-nav gallery\">Sign Up</a>";
   
  }



?>
