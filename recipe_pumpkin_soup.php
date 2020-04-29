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
<div class="title">Creamy Pumpkin Soup</div>

<h4>Creamy Pumpkin Ginger Soup is the perfect cozy, fall soup made creamy without adding any cream!</h4>

<br>
		<img src="recipe_images/pumpkinsoup.png" class="centerImg">

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">

		<!-- <h3>Vegan Mac and Cheese </h3> -->
		<p>Ingredients:</p>

		<label class="container"> 1 3-pound sugar pumpkin, halved, seeded, and quartered <input type="checkbox"> <span
				class="checkmark"></span>
		</label>

		<label class="container"> 1 &frac15; tablespoons of extra virgin olive oil <input
				type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 6 fresh thyme sprigs <input type="checkbox"> <span
				class="checkmark"></span>
		</label>

		<label class="container"> 1 teaspoon Kosher salt <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 3 cups vegetable or chicken broth, plus more if needed<input type="checkbox"> <span
				class="checkmark"></span>
		</label>

		<label class="container"> 3 fresh sage leaves, chopped <input type="checkbox"> <span class="checkmark"></span>
		</label>

		<label class="container"> 2 large shallots, chopped <input type="checkbox"><span
				class="checkmark"></span></label>


		
		<p>Directions:</p>

		<label class="container"> Preheat the oven to 400°F. Lightly oil a baking sheet or coat with nonstick spray. <input type="checkbox"><span
				class="checkmark"></span></label>

		<label class="container"> Place the pumpkin and thyme on the prepared baking sheet. Drizzle with the olive oil and season with 1/4 teaspoon salt and pepper. Gently toss to combine and arrange in a single layer. <input type="checkbox"> <span class="checkmark"></span></label>

		<label class="container"> Roast for 60 to 65 minutes, stirring halfway through, until the pumpkin is fork-tender. <input type="checkbox"><span class="checkmark"></span></label>

		
		<label class="container"> Let cool, and then remove the peel from the pumpkin. <input type="checkbox"> <span
				class="checkmark"></span></label>

		<label class="container"><input type="checkbox"> Puree using an immersion blender until smooth. Add the Greek yogurt and blend.
Pour into 4 bowls. <span class="checkmark"></span>
		</label>

		<label class="container"> <input type="checkbox"> Serve immediately, garnished with chives, plus more yogurt, pepitas, chives, and nutmeg, if desired. <span class="checkmark"></span></label>

		

	</aside>


</body>
</html>