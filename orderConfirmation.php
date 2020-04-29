<?php session_start(); 
    // Include config file
    include "config.php";

    $shipping_name = $shipping_street_addr = $shipping_city = $shipping_state = $shipping_zip = "";

    $cc_name = $cc_num = $cc_exp_month = $cc_exp_year = $cc_cvv = "";
    $cc_num_err = $cc_cvv_err = "";

    $payment_method = $order_num = $order_total = $order_id = "";


    if($_SERVER["REQUEST_METHOD"] == "POST") {
    	$shipping_name = trim($_POST["shipping_name"]);
    	$shipping_street_addr = trim($_POST["shipping_street_addr"]);
    	$shipping_city = trim($_POST["shipping_city"]);
    	$shipping_state = trim($_POST["shipping_state"]);
    	$shipping_zip = trim($_POST["shipping_zip"]);

        // Generate random order number
        for($i = 0; $i < 10; $i++) {
            $order_num = substr(base64_encode(sha1(mt_rand())), 0, 11);
        }
        // Get order total
        $order_total = $_SESSION["order_total"];

        // Prepare an insert statement for orders table
        $sql = "INSERT INTO orders (user_id, order_number, shipping_name, shipping_street_address, shipping_city, shipping_state, shipping_zip, order_total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)) {
            // Bind variables
            $stmt->bind_param("issssssd", $param_user_id, $param_order_num, $param_ship_name, $param_ship_addr, $param_ship_city, $param_ship_state, $param_ship_zip, $param_order_total);

            // Set shipping parameters
            $param_user_id = $_SESSION["user_id"];
            $param_order_num = $order_num;
            $param_ship_name = $shipping_name;
            $param_ship_addr = $shipping_street_addr;
            $param_ship_city = $shipping_city;
            $param_ship_state = $shipping_state;
            $param_ship_zip = $shipping_zip;
            $param_order_total = $order_total;

            // Attempt to execute the prepared statement for orders table
            if($stmt->execute()){

                // Get forgeign key order num for billing table
                $sql = "SELECT order_id FROM orders WHERE order_number = '" . $order_num . "'";

                if($stmt = $mysqli->prepare($sql)) {
                    if($stmt->execute()) {
                        $stmt->store_result();
                        $stmt->bind_result($order_id);
                        $stmt->fetch();
                    }
                }

                // Get payment method (card or cash)
                if($_POST["payment_radios"] == "card") {

                    $payment_method = "card";

                    $cc_name = trim($_POST["cc_name"]);

                    // Validate card num
                    if(strlen(trim($_POST["cc_num"])) < 16) {
                        $cc_num_err = "Please enter 16 digit card number.";
                    } else {
                        $cc_num = trim($_POST["cc_num"]);
                    }

                    // Validate card cvv
                    if(strlen(trim($_POST["cc_cvv"])) < 3) {
                        $cc_cvv_err = "Please enter 3 digit cvv code.";
                    } else {
                        $cc_cvv = trim($_POST["cc_cvv"]);
                    }

                    // Check input errors before insertion into database
                    if(empty($cc_num_err && empty($cc_cvv_err))) {
                        $cc_exp_month = trim($_POST["cc_exp_month"]);
                        $cc_exp_year = trim($_POST["cc_exp_year"]);

                        // Prepare an insert statement for card payment
                        $sql = "INSERT INTO billing (user_id, order_id, payment_method, card_name, card_number, card_exp_month, card_exp_year, card_cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

                        if($stmt = $mysqli->prepare($sql)) {
                            // Bind variables
                            $stmt->bind_param("iissssss", $param_user_id, $param_order_id, $param_payment_method, $param_card_name, $param_card_number, $param_card_exp_month, $param_card_exp_year, $param_card_cvv);

                            // Set cc payment parameters
                            $param_user_id = $_SESSION["user_id"];
                            $param_order_id = $order_id;
                            $param_payment_method = $payment_method;
                            $param_card_name = $cc_name;
                            $param_card_number = $cc_num;
                            $param_card_exp_month = $cc_exp_month;
                            $param_card_exp_year = $cc_exp_year;
                            $param_card_cvv = $cc_cvv;
                        }
                    }

                } else {
                    $payment_method = "cash";
                    $sql = "INSERT INTO billing (user_id, order_id, payment_method) VALUES (?, ?, ?)";

                    if($stmt = $mysqli->prepare($sql)) {
                        // Bind variables
                        $stmt->bind_param("iis", $param_user_id, $param_order_id, $param_payment_method);

                        //Set cash payment parameters
                        $param_user_id = $_SESSION["user_id"];
                        $param_order_id = $order_id;
                        $param_payment_method = $payment_method;
                    }
                }

                // Attempt to execute prepared statement for billing table (card or cash)
                if($stmt->execute()){
                    echo "Your order was successfully processed!";

                    /*$to_email = $_SESSION["email"];
                    $subject = 'FreshFoods Order Confirmation';
                    $message = 'YAY! Your order has been processed! <br/>
                    			Order number: ' . $order_num . ' <br/><br/>

                    			We will email you again shortly when your items are on their way. <br/><br/>

                    			Thanks for using FreshFoods!';
                    $headers = 'From: noreply @ freshfoods.com';
                    mail($to_email,$subject,$message,$headers);*/

                } else {
                    echo "Uh oh! We could not process your billing info. Your order was not processed. Please try again later.";
                }

            }else{
                echo "Uh oh! We could not process your shipping info. Your order was not processed. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FreshFoods - Order Confirmation</title>
	<link rel="stylesheet" type="text/css" href="./css/confirmationStyle.css">
</head>
<body>


</body>
</html>