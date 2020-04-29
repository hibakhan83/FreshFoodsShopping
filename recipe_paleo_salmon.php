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
<div class="title">Paleo Salmon</div>

<h4>Fillet salmon covered with maple syrup and pecans. Delicious and nutritious!</h4>

<br>
		<img src="recipe_images/paleo_salmon.jpg" class="centerImg">

<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>
		<label class="container"> Four salmon filets <input
			type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac12 cup of pecans<input 				type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 3 tablespoons of pure maple syrup <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 tablespoon of apple cider vinegar <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 teaspoon of smoked paprika <input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> &frac12 teaspoon of chipotle pepper powder <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> &frac12 teaspoon of onion powder <input type="checkbox"> <span class="checkmark"></span>
		</label>

		
		<br>
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 350°F. Spray a large
			meatloaf lightly with baking spray. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> 

		<label class="container"> Place the four salmon fillets onto a baking sheet that is covered in baking spray and seasoned with salt and pepper.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Pack the mixture of ground beef into the sprayed meatloaf pan.
		<input type="checkbox"><span class="checkmark"></span>
		</label> 

		<label class="container"> Combine pecans, maple syrup, vinegar, paprika, chipotle powder, and onion powder into a bowl and stir them together. After stirring, coat the salmon with the mixture and while uncovered, refrigerate for one hour and ten minutes.
		<input type="checkbox">
		<span class="checkmark"></span>
		</label>

		
		<label class="container"> After refrigerating, preheat the oven to 425°F.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Place the salmon into the oven for 25 minutes.
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Remove it from the oven. Let it cool and then serve.		 		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
		
	</aside>



</body>
</html>