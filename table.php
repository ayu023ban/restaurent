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
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>
<?php
    foreach ($_SESSION["cart_item"] as$key=> $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr style="line-height: 30px;height: 40px;font-weight: 900;font-size: larger;">
				<td><img style="width: 63px;height: auto;border-radius: 15px;" src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
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
<form style="margin-top: 40px;" method='post' action="table.php">
<label for="members"><b>How many Will come?</b></label>
    <input class="members" type="number" name="members" value="1" required><br>
  <div style="display: block ruby;">  <label for="time"><b>When will you come?</b></label><br>
    <input id="time" type="datetime-local" name="time" required><br></div>
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

			<form method="post" action="table.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<img class="dessert-img" src="<?php echo $product_array[$key]["image"]; ?>">
			<div class="product-title-footer">
		<div class="left-product">	<?php echo $product_array[$key]["name"]; ?>
			<?php echo "$".$product_array[$key]["price"]; ?></div>
			<div style="bottom: 21px;" >
                <label for "quantity">Quantity :</label>
                <input type="number" class="product-quantity" name="quantity" value="1" size="2" />
                <input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>

			</form>

		</div>
        <hr class="thin">
	<?php
		}
	}
	?>
            <a href="restest.php" class="title-footer"> —A Y U S H 'S— </a>
            <div class="social-div">
              <a href="https://twitter.com/ayushbansal023" ><img class="" id="twitter" src="mainpageimages/twitter-black.png"></a>
              <a href="https://www.facebook.com/ayushbansal23"><img class="" id="facebook" src="mainpageimages/fb-black.png"></a>
              <a href="https://www.instagram.com/ayu023ban/"> <img class="" id="instagram" src="mainpageimages/instagram-black.png"></a>
            </div>
        </div>
    </div>

<script type="text/javascript">
    let today = new Date().toISOString().substr(0, 16);
document.querySelector("#time").value = today;
</script>
</body>

</html>
