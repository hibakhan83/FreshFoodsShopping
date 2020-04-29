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
<div class="title">ABC Pudding</div>

<h4>Vegan pudding made with avocados, bananas and chocolate. Healthy and nutritious!</h4>

<br>
		<img src="recipe_images/ABCPudding.jpg" class="centerImg">


	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>
		<label class="container"> 1 ripe avocado <input
			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 4 very ripe bananas <input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac14 of unsweetened cocoa powder <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		
		<br>
		<p>Directions:</p>

		<label class="container"> Cut the avocado in half and take out the seed. Place the avocado halves, the bananas and the cocoa powder into a blender and blend until smooth. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> 

		<label class="container"> Pour the pureed items into a bowl and sprinkle extra cocoa powder for garnish.		
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Place the bowl into the fridge and let it sit for one hour and ten minutes.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		

		<label class="container"> After refrigerating, take out the pudding and place into serving bowls.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Enjoy!
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

	</aside>
</body>
</html>
