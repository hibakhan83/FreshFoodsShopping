<?php session_start();
    
    $_SESSION["loggedin"] = false;

	// Connect to the server
	require_once "config.php";

	$email = $password = "";
	$email_err = $password_err = "";


	if($_SERVER["REQUEST_METHOD"] == "POST"){ //username and password send from form
		// Check if username is empty
    	if(empty(trim($_POST["email"]))){
        	$email_err = "Please enter your email.";
    	} else{
        	$email = trim($_POST["email"]);
    	}
    
    	// Check if password is empty
    	if(empty(trim($_POST["password"]))){
        	$password_err = "Please enter your password.";
    	} else{
        	$password = trim($_POST["password"]);

        	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    	}
    
    	// Validate credentials
    	if(empty($email_err) && empty($password_err)){

        	// Prepare a select statement
        	$sql = "SELECT user_id, email, password FROM users WHERE email = ?";
        	
        	if($stmt = $mysqli->prepare($sql)){
        		
            	// Bind variables to the prepared statement as parameters
            	$stmt->bind_param("s", $param_email);
            
            	// Set parameters
            	$param_email = $email;
            
            	// Attempt to execute the prepared statement
            	if($stmt->execute()){
                	// Store result
                	$stmt->store_result();
                	
                	// Check if username exists, if yes then verify password
                	if($stmt->num_rows == 1){

                    	// Bind result variables
                    	$stmt->bind_result($user_id, $email, $hashed_password);
                    	if($stmt->fetch()){

                        	if(password_verify($password, $hashed_password)){
                            	// Password is correct, so start a new session
            
                            	session_start();

                            	// Store data in session variables
                            	$_SESSION["loggedin"] = true;
                            	$_SESSION["user_id"] = $user_id;
                            	$_SESSION["email"] = $email;   

                                $sql = "SELECT first_name, last_name FROM users WHERE email = '" . $_SESSION['email'] . "'";
                                $result = mysqli_query($mysqli, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $_SESSION["user_fname"] = $row['first_name'];  
                                $_SESSION["user_lname"] = $row['last_name'];                      
                
                            	// Redirect user to welcome page
                            	header("location: browse.php");
                                exit;
                        	} else{

                            	// Display an error message if password is not valid
                            	$password_err = "The password you entered was not valid.";
                        	}
                    	}
                	} else{
                    	// Display an error message if username doesn't exist
                    	$email_err = "No account found with that username.";
                	}
            	} else{
                	echo "Oops! Something went wrong. Please try again later.";
            	}

            	// Close statement
            	$stmt->close();
        	}	
    	}
    
    	// Close connection
    	$mysqli->close();
	}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>FreshFoods - Sign In</title>
	<link rel="stylesheet" type="text/css" href="./css/signInStyle.css">
</head>
<body>
    <div class="header">
        <img class="logo" src="./images/brandlogo-alt.png" style="width: 64px;">
    </div>

	<div class="container">
		<div class="sign-in-container">
			<form action="" method="post">
				<h2>Sign in</h2>

				<input type="email" id="email" placeholder="Email" name="email" required="Please enter your email" /> <br>
				<input type="password" id="password" placeholder="Password" name="password" required="" /> <br>
				<a href="#">Forgot password?</a> <!-- Not yet implemented --> <br>
				<input type="submit" id="sign-in-button" value="Sign in">
			</form>
		</div> <!-- end of sign-in container -->

		<div class="sign-up-container">
			<h2>Don't have an account?</h2>
			<p>Sign up and start enjoying our door deliveries!</p>
			<a href="./signUpPage.php"><button class="ghost">Join Now</button></a>
		</div> <!-- end of sign-up container -->
	</div> <!-- end of container -->
	
</body>
</html>
