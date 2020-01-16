<?php require('connection.php');
session_start();


    $a1="<a class=\"hover-color right-nav gallery\">welcome ".$_SESSION['email']."</a>";
    $a2="<form action=\"process.php\" method=\"get\" >
          <button type=\"submit\" class=\"logout\" name=\"logout\">
					<img class=\"right-nav social_link\" id=\"img\" src=\"mainpageimages/logout-black.png\">
</button>
          </form> ";







if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
      $result1 = $conn->query("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
    while($row = $result1->fetch_assoc()) {
        $productByCode[]=$row;

    }

    $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"],'id'=>$productByCode[0]["id"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));


			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]),false)) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"][$productByCode[0]["code"]] =$itemArray[$productByCode[0]["code"]];
				}
			} else {
				$_SESSION["cart_item"][$productByCode[0]["code"]] = $itemArray[$productByCode[0]["code"]];
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
}
}





if(isset($_POST["order"])){
  $result = $conn->query("SELECT userindex FROM users where email='".$_SESSION['email']."';");
  while($row = $result->fetch_assoc()) {
    $user_array[]=$row;
}
  $userid=$user_array[0]["userindex"];
  $noOfMembers=$_POST['members'];
  $time=$_POST['time'];


  for($i=1;$i<17;$i++) {
    foreach ($_SESSION["cart_item"] as $value) {
      if($i==$value['id']){
        $ordersummary["$i"]=$value['quantity'];
      break;
        }
        else{
          $ordersummary["$i"]=0;
        }

  }

  }


  $sql="INSERT INTO `orderSummary` ( `userid`, `noOfMembers`, `timeOfComming`, `Hors d'oeuvres`, `Amuse-bouche`, `Bouillabaisse`, `Feijoada`, `Leche Asada`, `Lemon Meringue Pie`, `Brigadeiros`, `Bunuelos`, `HOT TODDY`, `The Hornitos Hot Shotty`, `LAST-MINUTE MULLED WINE`, `HEATED AFFAIR`, `Guinness Of Ireland`, `Pina Colada`, `GIN of ENGLAND`, `Campari`) VALUES
   ($userid ,$noOfMembers,'$time',$ordersummary[1],$ordersummary[2],$ordersummary[3],$ordersummary[4],$ordersummary[5],$ordersummary[6],$ordersummary[7],$ordersummary[8],$ordersummary[9],$ordersummary[10],$ordersummary[11],$ordersummary[12],$ordersummary[13],$ordersummary[14],$ordersummary[15],$ordersummary[16])";
  if ($conn->query($sql) === TRUE) {
    echo "Your data is saved succesfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}





?>
