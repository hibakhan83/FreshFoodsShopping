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
<div class="title">Savory Meatloaf</div>

<h4>Savory and tender meatloaf made with ground beef and oatmeal. Delicious and hearty!</h4>

<br>
		<img src="recipe_images/savory_meatloaf.jpeg" class="centerImg">
	
		<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Savory Meatloaf</h3> -->
		<p>Ingredients:</p>
		<label class="container"> 2 pounds ground beef <input
			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 2 tablespoons grated onion <input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 large egg (slightly beaten) <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac12 teaspoon of garlic (crushed and finely minced) <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac34 cup of oatmeal <input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> &frac34 cups of milk (reduced fat/whole) <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac14 cups of ketchup (reduced sodium can be substituted) <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 1 tablespoon of Worcestershire sauce <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 1&frac14 teaspoons of salt <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac14 teaspoons of ground black pepper <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac12 teaspoons of dried thyme (can be substituted with sage)<input type="checkbox"> <span class="checkmark"></span>
		</label>
		
		<br>
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 350°F. Spray a large
			meatloaf lightly with baking spray. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> 

		<label class="container"> Combine the ground beef, grated onion, egg, garlic, oatmeal, milk, ketchup, Worcestershire sauce, salt, pepper and thyme (or sage) into a bowl. Stir the ingredients together.
		 <input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Pack the mixture of ground beef into the sprayed meatloaf pan.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Bake the mixture into the oven and bake it for 1 hour and 10 minutes. <input type="checkbox">
			<span class="checkmark"></span>
		</label>
		
		<label class="container"> Spread ketchup over the top of the meatloaf and return it to the oven for 25 minutes.
		 <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		

		<label class="container"> Remove it from the oven and serve.		 		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
	

	</aside>

</body>
</html>
