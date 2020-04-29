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
<div class="title">Chicken Parm</div>

<h4>Pasta with baked breaded chicken cutlets
								topped with homemade marinara sauce and melted mozzerella
								cheese!</h4>

<br>
		<img src="recipe_images/chickenparm.jpeg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Chicken Parm</h3> -->
		<p>Ingredients:</p>
		<label class="container"> 4 Chicken Breasts <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 3/4 cup seasoned breadcrumbs <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 1/4 cup grated Parmesan cheese <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 2 tbsp melted Butter <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 3/4 cup reduced fat Mozzarella
			cheese <input type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> 1 cup Marinara <input
			type="checkbox"> <span class="checkmark"></span>
		</label>
	
		<br>
		<p>Directions:</p>

		<label class="container"> Preheat oven to 450°F. Spray a large
			baking sheet lightly with spray. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> <label class="container"> Combine breadcrumbs and parmesan
			cheese in a bowl. Melt the butter in another bowl. Lightly brush the
			butter onto the chicken, then dip into breadcrumb mixture. Place on
			baking sheet and repeat with the remaining chicken. <input
			type="checkbox"> <span class="checkmark"></span>
		</label> <label class="container"> Lightly spray a little more oil on
			top and bake in the oven for 25 minutes. <input type="checkbox">
			<span class="checkmark"></span>
		</label>
		
		<label class="container"> Remove from oven, spoon 1 tbsp sauce
			over each piece of chicken and top each with 1 1/2 tbsp of shredded
			mozzarella cheese. <input type="checkbox"> <span
			class="checkmark"></span>
		</label> <label class="container"> Bake 5 more minutes or until cheese
			is melted. <input type="checkbox"> <span class="checkmark"></span>
		</label>

	</aside>







</body>
</html>