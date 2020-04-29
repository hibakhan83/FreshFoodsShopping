<!DOCTYPE html>
<?php session_start();
	include 'config.php';

?>

<html>
<head>
	<meta charset="utf-8">
	<title>FreshFoods</title>
	<link rel="stylesheet" type="text/css" href="./css/recipeStyle.css">
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

<br>
<div class="title">Jicama Snack Sticks</div>

<h4>Sweet and fiery Jicama sticks with chili powder are a delicious and healthy snack for any time of day!</h4>

<br>
		<img src="recipe_images/jicama_sticks.jpg" class="centerImg">


	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>

		<label class="container"> 1 cup of jicama matchsticks 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 teaspoon of fresh lime juice
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac12 Salt 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> Chili powder
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		
		<br>
		<p>Directions:</p>

		<label class="container"> Using a medium sized bowl, mix the jicama sticks with the lime juice and &frac12 teaspoon of salt.
		 <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Optional: Serve with chili powder
		<input type="checkbox"><span class="checkmark"></span>
		</label> 
	
	</aside>

</body>
</html>
