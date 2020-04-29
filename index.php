<?php session_start();
include 'config.php';
$status = "";

if(isset($_POST['product_code']) && $_POST['product_code'] != ""){
    $product_code = $_POST['product_code'];
    $result = mysqli_query($mysqli, "SELECT * FROM products WHERE product_code ='$product_code'");
    $row = mysqli_fetch_assoc($result);
    $product_name = $row['product_name'];
    $product_code = $row['product_code'];
    $product_price = $row['product_price'];

    $cartArray = array(
        $product_code=>array(
            'product_name'=>$product_name,
            'product_code'=>$product_code,
            'product_price'=>$product_price,
            'quantity'=>1
        )
    );

    if(empty($_SESSION["shopping_cart"])){
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($product_code,$array_keys)) {
            $status = "<div class='box' style='color:red;'>Product is already added to your cart!</div>"; 
        }else{
            $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
            $status = "<div class='box'>Product is added to your cart!</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title></title>
</head>
<body>


<?php
if(!empty($_SESSION["shopping_cart"])){
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));

    echo "<a href='cartPage.php'>Cart</a>";    
}


$result = mysqli_query($mysqli,"SELECT * FROM products");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='product_code' value=".$row['product_code']." />

    <div class='product_name'>".$row['product_name']."</div>

    <div class='product_price'>$".$row['product_price']."</div>

    <button type='submit' class='add-to-cart'>Add to cart</button>
    </form>
    </div>";
        }
mysqli_close($mysqli);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</body>
</html>