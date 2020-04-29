<?php 
	if($queryResults > 0){
		while($row = mysqli_fetch_assoc($result)){

			echo "<div class='product-grid-item'>
			<form method='POST' action='itemPage.php'>
				<input type='hidden' name='product_code' value=" . $row['product_code'] . " />

				<a href='#' onclick='this.parentNode.submit();'>
					<div class='item-preview'>
						<img src='./images/product_images/" . $row['product_image'] . "' style='width: 225px; height: 200px;'>
					</div>

					<div name='" . $row['product_code'] . "' class='product-name'>" . $row['product_name'] . "</div>
				</a>

				<div class='product-price'>$" . $row['product_price'] . "</div>
			</form>
			</div>";
		}
	}else{
		echo "No matching results!";
	}
	mysqli_close($mysqli);
?>