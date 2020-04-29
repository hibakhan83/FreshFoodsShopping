
<div class="navbar">

	<a class="home-link" href="homePage.php">
		<img class="logo" src="./images/brandlogo.png" style="width: 60px;">
	</a>

	<form method="POST" action="browse.php">
	<div class="dropdown">
		<button name="food" class="dropbtn">Food</button>
		<div class="dropdown-content">
			<button name="produce" type="submit" class="nav-link">Produce</button>

			<button name="meats" type="submit" class="nav-link">Meats</button>

			<button name="dairy-eggs-cheese" type="submit" class="nav-link">Dairy, Eggs & Cheese</button>

			<button name="pasta" type="submit" class="nav-link">Pasta</button>

			<button name="snacks" type="submit" class="nav-link">Snacks</button>
		</div>
	</div>

	<div class="dropdown">
		<button name="beverages" class="dropbtn">Beverages</button>
		<div class="dropdown-content">
			<button name="soda" type="submit" class="nav-link">Sodas</button>

			<button name="water" type="submit" class="nav-link">Water</button>

			<button name="coffee-tea" type="submit" class="nav-link">Coffees & Teas</button>
		</div>
	</div>
	</form>

	<div class="dropdown">
		<button name="recipes" class="dropbtn">Recipes</button>
	</div>

	<div class="toolbar">
		<div class="dropdown">
			<button name="account" class="dropbtn">Account</button>
			<div class="dropdown-content">
				<span class="user">Hi, <?php echo $_SESSION["user_fname"] ?></span>
				<hr class="solid">
				<button name="track-order" type="submit" class="nav-link">Your Orders</button>

				<a href="logout.php"><button name="logout" type="submit" class="nav-link">Logout</button></a>
			</div>
		</div>
		
		<a href="cartPage.php">
			<button class="cart-button">
				<i class="fas fa-shopping-basket" style="color: white; margin-right: 8px;"></i>
				Cart
				<!--<span style="background-color: rgb(232, 16, 74); color: rgb(255, 255, 255); line-height: 26px; position: absolute; left: 192px; top: -2px; width: 26px; height: 26px; border-top-left-radius: 50%; border-top-right-radius: 50%; border-bottom-right-radius: 50%; border-bottom-left-radius: 50%;" data-radium="true">3</span>-->
			</button>
		</a>

		<div class="search-container">
			<form action="searchAction.php" method="POST">
				<input type="text" name="search">
				<button name="submit-search" type="submit">
				Search
				</button>
			</form>
		</div>
	</div>
</div>