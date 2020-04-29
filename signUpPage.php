<?php session_start();
	// Include config file
	require_once "config.php";

	// Define variables and initialize with empty values
	$email = $password = "";
	$emal_err = $password_err = "";
    	$fname = $fname_err = "";
    	$lname = $lname_err = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate name
        if(empty(trim($_POST["fname"]))){
            $fname_err = "Please enter your first name";
        }elseif(empty(trim($_POST["lname"]))){
            $lname_err = "Please enter your last name";
        }else{
            $fname = trim($_POST["fname"]);
            $lname = trim($_POST["lname"]);
        }

        // Validate username
        if(empty(trim($_POST["email"]))){
            $email_err = "Please enter email.";
        }else{
            // Prepare a select statement
            $sql = "SELECT user_id FROM users WHERE email = ?";
        
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_email);
            
                // Set parameters
                $param_email = trim($_POST["email"]);
            
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // store result
                    $stmt->store_result();
                
                    if($stmt->num_rows == 1){
                        $email_err = "This email is already in use.";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    }else if(strlen(trim($_POST["password"])) < 8 || strlen(trim($_POST["password"])) > 16){
        $password_err = "Password must between 8 to 16 characters.";
    }else{
        $password = trim($_POST["password"]);
    }
    
    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_fname, $param_lname, $param_email, $param_password);
            
            // Set parameters
            $param_fname = $fname;
            $param_lname = $lname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: signInPage.php");
                exit;
            }else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>FreshFoods - Sign Up</title>
	<link rel="stylesheet" type="text/css" href="./css/signUpStyle.css">
</head>
<body>
	<div class="body-container">
		<div class="header">
			<h1 class="heading">Sign up for a FreshFoods account</h1>
			<h2 class="sub-heading">Save time when you register for convenient door-to-door deliveries.</h2>
		</div>
		
		<div class="sign-up-container">
			<div class="sign-up-form">
				<form action="" method="post">
					<div class="first-name"><input type="text" id="fname" placeholder="First name" name="fname" required="Please enter your first name" /></div>
					<div class="last-name"><input type="text" id="lname" placeholder="Last name" name="lname" required="Please enter your last name" /></div>
					<div class="email"><input type="email" id="email" placeholder="Email" name="email" required="Please enter your email" /></div>
					<div class="password"><input type="password" id="password" placeholder="Password" name="password" required="Please enter a password" /></div> <br>
		
					<input type="submit" id="sign-up-button" value="Create account">
					<p>Or <a href="./signInPage.php">Sign in</a></p>
				</form>
			</div> <!-- end of sign-up form -->
			
		</div> <!-- end of sign-up container -->

		<div class="image-container">
		</div> <!-- end of branding image container -->

	</div> <!-- end of container -->
	
</body>
</html>
