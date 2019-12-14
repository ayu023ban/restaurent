<?php require('orderprocess.php');
 if(!isset($_SESSION['email'])){
	header('location: login.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
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
        <div class="container">
            
          
        

        <div id="shopping-cart">
<div class="txt-heading">Ordered Food</div>

<a id="btnEmpty" href="table.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">    </th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as$key=> $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo " ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="table.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
<form method='post' action="table.php">
<label for="members"><b>How many Will come?</b></label><br>
    <input type="number" name="members" required><br>
    <label for="time"><b>When will you come?</b></label><br>
    <input type="datetime-local" name="time" required><br>
    <input  class="table-button" type="submit" name="order" value="ODER YOUR FOOD">


  <?php
} else {
?>

<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
            







            <div class="txt-heading">Products</div>
	<?php
    $sql="SELECT * FROM products ORDER BY id ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $product_array[]=$row;
    }
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
            <?php echo $product_array[$key]["code"]; ?>
			<form method="post" action="table.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
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
