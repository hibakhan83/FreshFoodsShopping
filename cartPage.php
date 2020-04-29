<?php session_start();
$status = "";
if(isset($_POST['action']) && $_POST['action']=="remove"){
	if(!empty($_SESSION["shopping_cart"])){
		foreach($_SESSION["shopping_cart"] as $key => $value){
			if($_POST["product_code"] == $key){
				unset($_SESSION["shopping_cart"][$key]);
				$status = "<div id='snackbar' class='show'>Product is removed from your cart!</div>";
				echo $status;
			}
			if(empty($_SESSION["shopping_cart"]))
				unset($_SESSION["shopping_cart"]);
		} 
	}
}
 
if(isset($_POST['action']) && $_POST['action']=="change"){
	foreach($_SESSION["shopping_cart"] as &$value){
		if($value['product_code'] === $_POST["product_code"]){
			$value['quantity'] = $_POST["quantity"];
			break; // Stop the loop after we've found the product
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Font Awesome Kit Code -->
	<script src="https://kit.fontawesome.com/1a0d434c1d.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>FreshFoods - Your Cart</title>
	<link rel="stylesheet" type="text/css" href="./css/cartStyle.css">
	<link rel="stylesheet" type="text/css" href="./css/navStyle.css">
	<link rel="stylesheet" type="text/css" href="./css/itemStyle.css">

	<!-------------------- JQUERY ---------------------->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
	<!-------------------- NAV CONTENT ---------------------->
	<?php include 'navigation.php'; ?>

	<!-------------------- MAIN CONTENT ---------------------->
	<div class="shopping-cart">

		<!-- Title -->
		<div class="title">Your Cart</div>

		<?php 
		if(isset($_SESSION["shopping_cart"])){
			$subtotal = 0.00;
			$total_price = 0.00;

			foreach($_SESSION["shopping_cart"] as $product) {
				$subtotal += $product['product_price'] * $product['quantity'];
			?>
				<div class="item">

					<div class="buttons">
						<form method='post' action=''>
							<input type='hidden' name='product_code' value="<?php echo $product['product_code']; ?>" />
							<input type='hidden' name='action' value="remove" />
							<button type='submit' class='delete-btn'>&times;</button>
						</form>
					</div>

					<div class="name">
						<?php echo $product["product_name"]; ?>
						<div class="price"><?php echo "$" . $product['product_price']; ?></div>
					</div>

					<div class="quantity">
						<?php echo "Quantity: " . $product['quantity'];?>
					</div>

					<div class="total-product-price">
						<?php $total_product_cost = $product['product_price'] * $product['quantity'];
						 	echo "$" . $total_product_cost;
						 ?>
					</div>

					
				</div>
		<?php
			}
		}else{
			echo "<h3 style='padding: 20px 30px; color: #5E6977; font-size: 18px; font-weight: 400;'>Your cart is empty!</h3>";
		}
		?>
	</div>

	<div class="order-details">
		<div class="subtotal">
			Total before tax: $<?php echo number_format((float)$subtotal, 2, '.', ''); ?>
		</div>
		<div class="tax-fee">
			Estimated tax: 
			<?php 
				if(!empty($_SESSION["shopping_cart"])) {
					$tax_fee = $subtotal * 0.05;
					echo "$" . number_format((float)$tax_fee, 2, '.', '');
				} else {
					$tax_fee = 0.00;
					echo "$" . number_format((float)$tax_fee, 2, '.', '');
				}
			?>
		</div>
		<div class="total-cart-price">
			<?php 
				$subtotal = number_format((float)$subtotal, 2, '.', '') + number_format((float)$tax_fee, 2, '.', '');
				$subtotal = number_format((float)$subtotal, 2, '.', '');

				$_SESSION['total_cart_price'] = $subtotal;
			?>
			Subtotal: $<?php echo $subtotal; ?>
		</div>

		<?php 
			if(!empty($_SESSION["shopping_cart"])){
				echo "<a href='checkoutPage.php'>
				<button class='checkout-button'>Checkout</button>
				</a>";
			}
		?>
		
	</div>
</body>
</html>