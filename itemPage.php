<?php session_start();
	include 'config.php';
	$status = "";
?>
<!DOCTYPE HTML>
<html>
<head lang="en">
	<!-- Font Awesome Kit Code -->
	<script src="https://kit.fontawesome.com/1a0d434c1d.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>FreshFoods</title>
	<link rel="stylesheet" type="text/css" href="./css/itemStyle.css">
	<link rel="stylesheet" type="text/css" href="./css/navStyle.css">
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>

	<!-------------------- NAV CONTENT ---------------------->
	<?php include 'navigation.php'; ?>

	<!-------------------- MAIN CONTENT ---------------------->
	<div class="body-wrapper">

		<section>
			<section id="product-details-container">
				<div class="flex-container">
					<?php
						if($_SERVER["REQUEST_METHOD"] == "POST") {

							$product = trim($_POST['product_code']);
							$_SESSION['active_product'] = $product;

							//Prepare a select statement
							$sql = "SELECT product_name, product_price, product_code, product_description, product_image FROM products WHERE product_code = '$product'";

							$result = mysqli_query($mysqli, $sql);
							$row = mysqli_fetch_assoc($result);

							$_SESSION['active_product_name'] = $product_name = $row['product_name'];
							$_SESSION['active_product_image'] = $product_image = $row['product_image'];
							$_SESSION['active_product_code'] = $product_code = $row['product_code'];
							$_SESSION['active_product_price'] = $product_price = $row['product_price'];
							$_SESSION['active_product_description'] = $product_description = $row['product_description'];


							if(isset($_POST['add-to-cart'])) {
								$cartArray = array(
									$product_code=>array(
										'product_name'=>$product_name,
										'product_image'=>$product_image,
										'product_code'=>$product_code,
										'product_price'=>$product_price,
										'product_description'=>$product_description,
										'quantity'=>$_POST['quantity-number']
									)
								);

								if(empty($_SESSION["shopping_cart"])){
									$_SESSION["shopping_cart"] = $cartArray;
									$status = "<div id='snackbar' class='show'>Product is added to your cart!</div>";
									echo $status;
								}else{
									$array_keys = array_keys($_SESSION["shopping_cart"]);
									if(in_array($product_code, $array_keys)) {
										$status = "<div id='snackbar' class='show'>Product is already in your cart!</div>";
										echo $status;
									}else{
										$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
										$status = "<div id='snackbar' class='show'>Product is added to your cart!</div>";
										echo $status;
									}
								}
							}
						}

					?>

					<div class="product-image-container">
						<?php echo "<img class='product-image' src='./images/product_images/" . $_SESSION['active_product_image'] . "'>";?>
						
					</div> <!-- end of product-image-container -->

					<div class="product-info-container">
						<div class="product-details">
							<p class="back-link">
								<a href="browse.php"> BACK</a>
							</p>
							<?php echo "<h1 class='title'>" . $_SESSION['active_product_name'] . "</h1>";?>
							<?php echo "<h2 class='price'>$" . $_SESSION['active_product_price'] . "</h2>";?>
						</div> <!-- end of product-details -->

						<form method="POST" action="">

							<?php echo "<input type='hidden' name='product_code' value=" . $_SESSION['active_product_code'] . " />"?>
							

							<div class="quantity">

								<button class="minus-btn" type="button" name="button">&#45;</button>
								<input type="number" name="quantity-number" value="1"> <!-- WILL NEED ERROR CHECKING IN CASE USER ENTERS INVALID # -->
								<button class="plus-btn" type="button" name="button">&#43;</button>
							</div>
					
							<button type="submit" name="add-to-cart" class="add-to-list-button">Add to cart &#43;</button>
							
						</form>

						<button class="collapse">Product Description</button>
						<div class="content">
							<?php echo "<p>" . $_SESSION['active_product_description'] . "</p>";?>
						</div>

						<button class="collapse">Nutritional Information</button>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div> <!-- end of product-info container -->
				</div> <!-- end of flex container -->
			</section>
		</section>

		<footer></footer>

	</div> <!-- end of body-wrapper -->
</body>

<!-- Collapsible -->
<script type="text/javascript">
	var coll = document.getElementsByClassName("collapse");
	var i;
	for (i = 0; i < coll.length; i++) {
  		coll[i].addEventListener("click", function() {
    		this.classList.toggle("active");
    		var content = this.nextElementSibling;
    		if (content.style.maxHeight) {
      			content.style.maxHeight = null;
    		} else {
      			content.style.maxHeight = content.scrollHeight + "px";
    		}
  		});
	}
</script>


<!-- Quantity input -->
<script type="text/javascript">
	$('.minus-btn').on('click', function(e) {
		e.preventDefault();
		var $this = $(this);
		var $input = $this.closest('div').find('input');
		var value = parseInt($input.val());

		if (value > 1) {
			value = value - 1;
		}else{
			value = 1;
		}

		$input.val(value);
	});

	$('.plus-btn').on('click', function(e) {
		e.preventDefault();
		var $this = $(this);
		var $input = $this.closest('div').find('input');
		var value = parseInt($input.val());

		if(value < 100) {
			value = value + 1;
		}else{
			value = 100;
		}

		$input.val(value);
	});
</script>

</html>
