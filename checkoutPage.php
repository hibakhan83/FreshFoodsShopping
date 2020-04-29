<?php session_start(); 
    // Include config file
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Font Awesome Kit Code -->
	<script src="https://kit.fontawesome.com/1a0d434c1d.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>FreshFoods - Checkout</title>
	<link rel="stylesheet" type="text/css" href="./css/checkoutStyle.css">
</head>
<body>
<form action="orderConfirmation.php" method="POST">
<div class="tab_container">
    <input id="tab1" type="radio" name="tabs" checked />
    <label for="tab1"><span class="numberCircle">1</span><span>Shipping</span></label>

    <input id="tab2" type="radio" name="tabs" />
    <label for="tab2"><span class="numberCircle">2</span><span>Payment</span></label>

    <input id="tab3" type="radio" name="tabs" />
    <label for="tab3"><span class="numberCircle">3</span><span>Confirm Order</span></label>

    <!-- Shipping Tab -->
    <section id="content1" class="tab-content">
        <h4 class="payment-title">Enter shipping details</h4>

        <div class="pymt-radio">
            <div class="row-payment-method payment-row">
                <div class="select-icon">
                    <input type="radio" id="radio0" name="delivery_radios" value="same-day" checked />
                    <label for="radio0"></label>
                </div>

                <div class="select-txt">
                    <p class="pymt-type-name">Same-day Delivery</p>
                    <p class="pymt-type-desc">$5.99</p>
                </div>
            </div>
        </div>

        <div class="form-cc">
            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title">Name</div>
                    <input type="text" class="input cc-txt" maxlength="45" name="shipping_name" required />
                </div>
            </div>

            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title">Street Address</div>
                    <input type="text" class="input cc-txt" maxlength="45" name="shipping_street_addr" required />
                 </div>
            </div>

            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title">City</div>
                    <input type="text" class="input cc-txt" maxlength="16" name="shipping_city" required />
                </div>

                <div class="cc-field">
                    <div class="cc-title">State</div>
                    <input type="text" class="input cc-txt" maxlength="2" name="shipping_state" onkeypress="return isLetter(event)" required />
                </div>

                <div class="cc-field">
                    <div class="cc-title">Zip Code</div>
                    <input type="text" class="input cc-txt" maxlength="5" name="shipping_zip" onkeypress="return isNumber(event)" required />
                </div>
            </div>
        </div> <!-- End of form-cc -->

        <div class="button-master-container">
            <div class="button-container"><a href="cartPage.php">Return to Cart</a></div>
            <div class="button-container button-finish" onclick="switchToPayment()"><a href="#">Select Payment </a></div>
        </div>
    </section>

    <!-- Payment Tab -->
    <section id="content2" class="tab-content">
        <h4 class="payment-title">Choose your payment method</h4>
        <div class="pymt-radio">
            <div class="row-payment-method payment-row">
                <div class="select-icon">
                    <input type="radio" id="radio1" name="payment_radios" value="cash" />
                    <label for="radio1"></label>
                </div>

                <div class="select-txt">
                    <p class="pymt-type-name">Cash Upon Delivery</p>
                    <p class="pymt-type-desc">No card? No problem. Deliverers can accept cash when they deliver your order</p>
                </div>
            </div>
        </div>

        <div class="pymt-radio">
            <div class="row-payment-method payment-row-last">
                <div class="select-icon hr">
                    <input type="radio" id="radio2" name="payment_radios" value="card" checked />
                    <label for="radio2"></label>
                </div>

                <div class="select-txt hr">
                    <p class="pymt-type-name">Credit Card</p>
                    <p class="pymt-type-desc">Safe money transfer using your bank account. Safe payment online. Credit card needed. Visa, Maestro, Discover, American Express</p>
                </div>
            </div>
        </div>

        <div class="select-logo">
            <div class="select-logo-sub logo-spacer">
                <img src="https://www.dropbox.com/s/by52qpmkmcro92l/logo-visa.png?raw=1" alt="Visa" />
            </div>

            <div class="select-logo-sub">
                <img src="https://www.dropbox.com/s/6f5dorw54xomw7p/logo-mastercard.png?raw=1" alt="MasterCard" />
            </div>
        </div>

        <div class="form-cc">
            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title">Credit Card Number</div>
                    <input type="text" class="input cc-txt" name="cc_num" maxlength="16" onkeypress="return isNumber(event)" required />
                </div>
            </div>

            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title">Expiration</div>
                    <select class="input cc-ddl" name="cc_exp_month">
                        <option selected>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>

                    <select class="input cc-ddl" name="cc_exp_year">
                        <option selected>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                    </select>
                </div>

                <div class="cc-field">
                    <div class="cc-title">CVV<span class="numberCircle">?</span></div>
                    <input type="text" class="input cc-txt" name="cc_cvv" maxlength="3" required />
                </div>
            </div>

            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title">Name on Card</div>
                    <input type="text" class="input cc-txt" name="cc_name" maxlength="50" required />
                </div>
            </div>
        </div> <!-- End of form-cc -->

        <div class="button-master-container">
            <div class="button-container" onclick="switchToShipping()"><a href="#">Return to Shipping</a></div>
            <div class="button-container button-finish" onclick="switchToConfirm()"><a href="#">Review Order </a></div>
        </div>
    </section>

    <!-- Confirm Order Tab -->
    <section id="content3" class="tab-content">
        <h4 class="payment-title">Confirm Order</h4>
        <div class="form-cc">
            <?php 
            if(isset($_SESSION["shopping_cart"])){
                foreach($_SESSION["shopping_cart"] as $product) {
            ?>
            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title"><?php echo $product['product_name']; ?><br/>Quantity: <?php echo $product['quantity']; ?></div>
                </div>
            </div>
            <?php 
                }
            }
            $_SESSION['order_total'] = $_SESSION['total_cart_price'] + 5.99;
            $_SESSION['order_total'] = number_format((float)$_SESSION['order_total'], 2, '.', '');
            ?>

            <div class="row-cc">
                <div class="cc-field">
                    <div class="cc-title" style="font-weight: bold;">Order total (including tax & shipping):<br/>
                        <span style="color: #C52300; font-weight: bold; font-size: 18px;">$<?php echo $_SESSION['order_total']; ?></span>
                    </div>
                </div>
            </div>
        </div> <!-- End of form-cc -->

        <div class="button-master-container">
            <div class="button-container" onclick="switchToPayment()"><a href="#">Return to Payment</a></div>
            <div class="button-container button-finish"><a onclick="this.closest('form').submit();return false;">Confirm & Process </a></div>
        </div>
    </section>
</div>
</form>
</body>

<script type="text/javascript">
    function switchToShipping(){
        document.getElementById("tab1").click();
    }

    function switchToPayment(){
        document.getElementById("tab2").click();
    }

    function switchToConfirm(){
        document.getElementById("tab3").click();
    }

    function isNumber(event){
        var keycode = event.keyCode;
        if(keycode >= 48 && keycode <= 57){
            return true;
        }
        return false;
    }
</script>

</html>