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
<div class="title">Paleo Roasted Yam</div>

<h4>Paleo Roasted Yam Salad with Kale is healthy and delicious! </h4>

<br>
		<img src="recipe_images/paleo_roasted_yam.jpg" class="centerImg">

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>

		<label class="container"> 2 jewel yams, cut into 1 inch cubes 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 2 tablespoon of olive oil 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Salt and freshly ground black pepper 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> 1 tablespoon of olive oil
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 1 whole onion sliced
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 3 minced garlic cloves
		<input type="checkbox"> <span class="checkmark"></span>
		</label>
		
		<label class="container"> 1 torn apart bunched kale
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 2 tablespoons of red win vinegar				<input type="checkbox"> <span class="checkmark"></span>
		</label>
		

		<label class="container"> 1 tablespoon of chopped fresh thyme
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		

		<br>
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 400°F. Toss the yams with 2 tablespoons of olive oil into a bowl. Season to taste with salt and pepper and then arrange them evenly onto a baking sheet.
		 <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Place the pans into the oven until the yams are tender. This should take 25 minutes.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 
	

		<label class="container"> Meanwhile, heat the remaining 1 tablespoon of olive oil in a large skillet over medium head. Add the onion and garlic into the skillet and stir until they are golden brown. Add the kale into the mixture and stir.				<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Transfer the kale mixture into a bowl and cool it in the refrigerator along with the yams.
		<input type="checkbox">
		<span class="checkmark"></span>
		</label>

		<label class="container"> When all the ingredients have cooled down, combine the yams, kale, red wine vinegar and fresh thyme into a bowl. Season it with salt and pepper and stir.		
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Enjoy.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

	

	</aside>
</body>
</html>