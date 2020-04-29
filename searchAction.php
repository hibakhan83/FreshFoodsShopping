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
</head>
<body>

	<!-------------------- NAV CONTENT ---------------------->
	<?php include 'navigation.php'; ?>

	<!-------------------- MAIN CONTENT ---------------------->
	<div class="body-container">
		<?php include 'sideNavigation.php'; ?>

		<div class="product-grid-container">
		<?php 
			if(isset($_POST['submit-search'])) {
				// Determine like words as submitted search
				$search = mysqli_real_escape_string($mysqli, $_POST['search']);
				$_SESSION['active_search'] = $search;

				// Prepare a select statement
				$sql = "SELECT * FROM products WHERE product_name LIKE '%" . $_SESSION['active_search'] . "%'";
			} else { // On page refresh
				$sql = "SELECT * FROM products WHERE product_name LIKE '%" . $_SESSION['active_search'] . "%'";
			}
			$result = mysqli_query($mysqli, $sql);
			$queryResults = mysqli_num_rows($result);

			echo "<span class='results'>" . $queryResults . " result(s)</span>";
				
			//Display products
			include 'displayProducts.php';

		?>
</body>
</html>