<?php session_start();
	include 'config.php';

?>
<!DOCTYPE HTML>

<html>
<head lang="en">
	<!-- Font Awesome Kit Code -->
	<script src="https://kit.fontawesome.com/1a0d434c1d.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>FreshFoods</title>
	<link rel="stylesheet" type="text/css" href="./css/searchStyle.css">
	<link rel="stylesheet" type="text/css" href="./css/navStyle.css">
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

</head>
<body>

	<!-------------------- NAV CONTENT ---------------------->
	<?php include 'navigation.php'; ?>

	<!-------------------- MAIN CONTENT ---------------------->
	<div class="body-container">
		<?php include 'sideNavigation.php' ?>


		<div class="product-grid-container">

		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST") { //Product category sent from form
				//Check which product category is to be displayed
				if(isset($_POST['produce'])) {
					$_SESSION['active_view'] = 'produce';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['meats'])) {
					$_SESSION['active_view'] = 'meats';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['dairy-eggs-cheese'])) {
					$_SESSION['active_view'] = 'dairy/eggs/cheese';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['pasta'])) {
					$_SESSION['active_view'] = 'pasta';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['snacks'])){
					$_SESSION['active_view'] = 'snacks';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['soda'])){
					$_SESSION['active_view'] = 'soda';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['water'])){
					$_SESSION['active_view'] = 'water';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['coffee-tea'])){
					$_SESSION['active_view'] = 'coffee/tea';
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['food'])){
					$_SESSION['active_view'] = 'food';
					$sql = "SELECT * FROM products WHERE product_class = '" . $_SESSION['active_view'] . "'";
				} else if (isset($_POST['beverages'])){
					$_SESSION['active_view'] = 'beverages';
					$sql = "SELECT * FROM products WHERE product_class = '" . $_SESSION['active_view'] . "'";
				}
			} else { //On page refresh

				if ($_SESSION['active_view'] == 'food') {
					$sql = "SELECT * FROM products WHERE product_class = 'food'";
				} else if ($_SESSION['active_view'] == 'beverages') {
					$sql = "SELECT * FROM products WHERE product_class = 'beverages'";
				} else {
					$sql = "SELECT * FROM products WHERE product_category = '" . $_SESSION['active_view'] . "'";
				}
			}

			$result = mysqli_query($mysqli, $sql);
			$queryResults = mysqli_num_rows($result);

			// Display products
			include 'displayProducts.php';
		
		?>
</body>
</html>