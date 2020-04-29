<!DOCTYPE html>
<?php session_start();
	include 'config.php';

?>

<html>
<head>
	<meta charset="utf-8">
	<title>FreshFoods</title>
	<link rel="stylesheet" type="text/css" href="./css/homeStyle.css">
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
<div class="title">Welcome to FreshFoods!</div>

<h4>Here, at FreshFoods, we strive for your satisfaction! With a number of healthy, fresh, and delicious ingredients and recipes to choose from, you'll never run out of options!</h4>

<br>

<!-------------------- RECIPE CONTENT ---------------------->

<h1>Check out our popular recipes!</h1>

	<div class="imageGrid">
		<div class="column">
			<div class="row">
				<a href="recipe_chickenparm.php">
					<div class="containerimg">
						<img src="recipe_images/chickenparm.jpeg" class="gridImage">
						<div class="overlay">
							<div class="text">Pasta with baked breaded chicken cutlets
								topped with homemade marinara sauce and melted mozzerella
								cheese!</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Baked Chicken Parm</p>
			</div>
			<div class="row">
				<a href="recipe_mac_cheese.php">
					<div class="containerimg">
						<img src="recipe_images/vegan_mac_and_cheese.jpeg" class="gridImage">
						<div class="overlay">
							<div class="text">Tender macaroni pasta is tossed in a
								creamy cashew “cheese” sauce!</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Vegan Mac & Cheese</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="recipe_pumpkin_soup.php">
					<div class="containerimg">
						<img src="recipe_images/pumpkinsoup.png" class="gridImage">
						<div class="overlay">
							<div class="text">This Creamy Pumpkin Ginger Soup is the perfect cozy, fall soup made creamy without adding any cream!</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Creamy Pumpkin Soup</p>
			</div>
			<div class="row">
				<a href = "recipe_meatloaf.php">
					<div class="containerimg">
						<img src="recipe_images/savory_meatloaf.jpeg" class="gridImage">
						<div class="overlay">
							<div class="text">Savory and tender meatloaf made with ground beef and oatmeal. Delicious and hearty!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Savory Meatloaf</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="recipe_paleo_salmon.php">
					<div class="containerimg">
						<img src="recipe_images/paleo_salmon.jpg" class="gridImage">
						<div class="overlay">
							<div class="text"> Fillet salmon covered with maple syrup and pecans. Delicious and nutritious!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Paleo Salmon</p>
			</div>
			<div class="row">
				<a href="recipe_jicama_sticks.php">
					<div class="containerimg">
						<img src="recipe_images/jicama_sticks.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Sweet and fiery Jicama sticks with chili powder!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Jicama Snack Sticks</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="recipe_paleo_yam.php">
					<div class="containerimg">
						<img src="recipe_images/paleo_roasted_yam.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Paleo Roasted Yam salad with Kale							
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Paleo Roasted Yam</p>
			</div>
			<div class="row">
				<a href="recipe_abc_pudding.php">
					<div class="containerimg">
						<img src="recipe_images/ABCPudding.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Vegan pudding made with avocados, bananas and chocolate. Healthy and nutritious!
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">ABC Pudding</p>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>


<!-------------------- ITEMS CONTENT ---------------------->

<h1>Here are some Essential Items!</h1>

<br>

	<div class="imageGrid">
		<div class="column">
			<div class="row">
				<a href="../itemPage.php">
					<div class="containerimg">
						<img src="product_images/organic_bananas_bunch.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Enjoy the sweet, tropical taste of Organic Bananas! <p>$1.39</p></div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Organic Bananas</p>
			</div>
			<div class="row">
				<a href="recipes/vegan_mac_and_cheese.php">
					<div class="containerimg">
						<img src="product_images/silk_vanilla_soy_milk.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Count on great-tasting Silk Vanilla Soymilk for calcium and a whole lot more! <p>$5.07</p></div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Silk Vanilla Soy Milk</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="recipes/pumpkin-soup.php">
					<div class="containerimg">
						<img src="product_images/bigelow_classic_green_tea.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">A soothing cup of tea is ideal at any time of day!  <p>$7.94</p></div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Bigelow Green Tea </p>
			</div>
			<div class="row">
				<a href = "recipes/savory_meatloaf.php">
					<div class="containerimg">
						<img src="product_images/wonder_classic_white_bread_loaf.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Since 1921, Wonder bread has been bringing delicious tasting, soft textured bread to the table! <p>$2.56</p>
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Wonder White Bread</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="recipes/paleo_salmon.php">
					<div class="containerimg">
						<img src="product_images/marketside_strawberries.jpg" class="gridImage">
						<div class="overlay">
							<div class="text"> Add some sweetness to your day with Marketside Greenhouse Grown Strawberries! <p>$2.49</p>
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Strawberries</p>
			</div>
			<div class="row">
				<a href="recipes/jicama_sticks.php">
					<div class="containerimg">
						<img src="product_images/prairie_farms_vitamin_d_milk.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Enjoy the taste of Prairie Farms Vitamin D Milk anytime and anywhere! <p>$4.32</p>
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Prairie Farms Milk</p>
			</div>
		</div>
		<div class="column">
			<div class="row">
				<a href="recipes/paleo_yam.php">
					<div class="containerimg">
						<img src="product_images/smartwater_vapor_distilled_water.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">We looked up and were inspired by the clouds to vapor-distill Smartwater! <p>$5.99</p>						
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Smartwater</p>
			</div>
			<div class="row">
				<a href="recipes/abc_pudding.php">
					<div class="containerimg">
						<img src="product_images/sprite_lemon_lime_soda.jpg" class="gridImage">
						<div class="overlay">
							<div class="text">Introduced in 1961, Sprite is the world's leading lemon-lime flavored soft drink! <p>$4.98</p>
							</div>
						</div>
					</div>
				</a>
				<p class="textUnderImage">Sprite Lemon-Lime Soda</p>
			</div>
		</div>
	</div>
	<br>
	<br>
	


<!-------------------- COMPANY INFO CONTENT ---------------------->

<h1>About</h1>
<br>
	<div class="abouttab">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
	</div>

<br>
<br>


<h1>Frequently Asked Questions</h1>



		<p>
			<span class="FAQbold">Can I substitute ingredients?</span> <br> <span class="FAQtab"> Yes, go for it! It might
				turn out to be a
				whole different meal, but have fun experimenting! </span>
		</p>

		<p>
			<span class="FAQbold">What is the best way to store leftovers?</span> <br>
			<span class="FAQtab"> It depends on the item you're storing.
				The fridge, freezer, pantry, cabinets, your stomach - it really depends on the
				item. </span>
		</p>

		<p>
			<span class="FAQbold">Can you share the nutritional information
				for this recipe?</span> <br> <span class="FAQtab">The nutritional information can be found under each individual item! </span>
		</p>
		<p>
			<span class="FAQbold">Are there coupons that I can apply before checkout?
			</span>
			<br>
			<span class="FAQtab">
				No, we do not use coupons here at FreshFoods. 
			</span>
		</p>

		<p>
			<span class="FAQbold">Do you have a cookbook?</span> <br> <span class="FAQtab"> No. </span>
		</p>

		<p>
			<span class="FAQbold">Can I send a recipe suggestion?</span> <br> <span class="FAQtab"> Of course! We love that
				you're interested in
				our site! Send us an email about your
				recipe suggestion. </span>
		</p>

		<p>
			<span class="FAQbold">Can I add my own recipe to you site?</span> <br>
			<span class="FAQtab"> We love the enthusiasm! Please send us an email using the contact information below, and we will add your recipe to our website! </span>
		</p>

		<p>
			<span class="FAQbold">How can I contact you?</span> <br> <span class="FAQtab"> Keep scrolling down for our contact information! </span>
		</p>

		<h3>Do you have a question that is not listed? Scroll down for our contact information and reach out to us!</h3>

		<br>
		<br>


<h1>Contact</h1>
<br>
		<div class="contactR">	
			<div class="contactC">
				<p>Phone Number: </p>
				<p>Fax Number: </p>
				<p>Email: </p>
				<p>Office Address: </p>
				<p>Office Hours: </p>
			</div>
			<div class="contactC">
				<p>1(800)555-5555</p>
				<p>1(800)555-5555</p>
				<p>FreshFoods@SE.com</p>
				<p>123 FakeAddy Dr. Atlanta, GA 30301</p>
				<p>12:30pm-12:31pm</p>
			</div>
		</div>
	

<br>
<br>
<br>
<br>
<br>
 

  
</body>
</html>
