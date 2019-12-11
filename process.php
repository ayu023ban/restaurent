<?php
require('connection.php');
?>
<?php
if(isset($_POST)){
	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= $_POST['password'];
  $sql= "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES( '{$firstname}' , '{$lastname}' , '{$email}' , '{$mobile}' , '{$password}' );";

  if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
}else{
	echo 'No data';
}
