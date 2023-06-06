<?php 

    session_start();

    // Check if the user is already logged in, if yes then redirect him to Home page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    	header("location: 5.a.loggedin_user.php");
    	exit;
	}
	require_once "0.connection.php";     // include the connection file

	$username = $password = $email = "";
	$usernameErr = $passwordErr = $emailErr =  "";
    $loginErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$email = $_POST['email'];

    	if (empty($username)) {
    		$usernameErr = "Username is required.";
    	}else{
    		$username1 = test_input($username);

    		if (!preg_match("/^[0-9a-zA-Z-']*$/", $username1)) {
              $usernameErr = "Invalid Username";
            }
    	}

    	if (empty($email)) {
    		$emailErr = "Email is required.";
    	}
    	else{
    		$email = test_input($email);
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              	$emailErr = "Invalid Email Formate.";
             }
    	}

    	if (empty($password)) {
    		$passwordErr = "Password is required.";
    	}
    	elseif (strlen($password) < 6) {
    		$passwordErr = "At least 6 chars password.";
    	}
    	else{
    		$password1 = test_input($password);
    		if (!preg_match("/^[0-9a-zA-Z-'@#$%^&*]*/", $password1)) {
              $passwordErr = "Invalid Password Formate.";
            }
    	}


    	// *******************  VALIDATE USER CREDENTIALS  **************************

    	if (empty($userIDErr) && empty($emailErr) && empty($passwordErr)) 
    	{
    		//$sql = "SELECT id, username, password FROM users WHERE username = ? " ;
    		$sql = "SELECT id, username, email, password FROM register WHERE username = ? AND email = ? " ;

    		if ($stmt = mysqli_prepare($link, $sql)) 
    		{
    			// Bind variables to the prepared statement as parameters
    			mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    			// Attempt to execute the prepared statement
    			if (mysqli_stmt_execute($stmt)) 
    			{
    				// Store result
    				mysqli_stmt_store_result($stmt);

    				// if username and email exists, then verify password
    				if (mysqli_stmt_num_rows($stmt) == 1) 
    				{
    					// Bind result variables
    					mysqli_stmt_bind_result($stmt, $id, $username, $email, $hashed_password);    // hashed password.
    					
    					if (mysqli_stmt_fetch($stmt)) 
    					{
    						if (password_verify($password, $hashed_password)) {
    							
    							// Password is correct, so start a new session
                            	session_start();

                            	// Store data in session variables
                            	$_SESSION["loggedin"] = true;
                            	$_SESSION["id"] = $id;
                            	$_SESSION["username"] = $username; 
                            	$_SESSION["email"] = $email; 
                            	$_SESSION['password'] = $password;

                            	// after successful login, Redirect user to Home(logged in) page.
                            	header("location: 5.a.loggedin_user.php");
    						}
    						else{
    							// invalid password.
    							$loginErr = "Invalid login Credentials.";
    						}
    					}
    				}
    				else{
    					// username does not exist, put error
    					//echo '<script>alert("Woops! Something went wrong !")</script>';
    					$loginErr = "Invalid login Credentials.";
    				}
    			}
    			else{
    				//echo '<script>alert("Sorry! Something went wrong..")</script>';
    				$loginErr = "Oops! Something went wrong !!!";
    			}
    			mysqli_stmt_close($stmt);
    		}
    	}

    	mysqli_close($link);
    }

	function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>ZeeStream : Sign In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="movie, movies, hollywood, actor, actress, cinema, film, trailer.">

	<style type="text/css">
		body {background-color: #1e3d51;
			margin: 0;
			padding: 0;
			overflow-x: hidden;
		}

		.topnav{
  			background-color: #27586e;
  			margin: 0 auto;
  			width: 100%;
  			padding: 10px;
  			position: relative;
  			display: block;
		}

		img{
			width: 140px; height: 210px;
		}
		div{
			margin: 0 auto;
			width: fit-content;
		}
		p{
			font-family: arial;
			font-weight: lighter;
			color: white; font-size: 17px;
		}
		a { color: white; text-decoration: none; }
		a:hover{ color: #00b7eb; }

		hr { border: 1px solid #27586e; margin: 0px; }

		td { 
			text-align: center; color: white; font-family: arial;
			width: 330px; font-size: 23px;
		}

		.dropbtn {}
		.dropdown{position: relative; display: inline-block;}
		.dropdown-content{
			display: none; 
			position: absolute;
			background-color: #27586e;
			min-width: 160px;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  			z-index: 1;
		}
		.dropdown-content a {
 		 	color: black;
 			padding: 12px 12px;
  			text-decoration: none; font-family: miriam libre; 
 			display: block;
		}
		.dropdown-content a:hover {background-color: #00b7eb;}
		.dropdown:hover .dropdown-content {display: block;}
		.dropdown:hover .dropbtn {background-color: #27586e;}

		.error1 {color: orange;}

		.example{
			display: inline-block; position: relative;
		}
		.example form input[type=text] {
		  padding: 10px;
		  font-size: 17px;
		  border: 1px solid grey;
		  width: 310px;
		  height: 12px;
		  background: white; 
		  margin: auto;			
		  border-radius: 20px 0px 0px 20px; border-right: none;
		}
		.example form button {
		  float: right;
		  width: 40px;
		  padding: 6px;
		  background: #f8f8fc;
		  color: blue;
		  font-size: 17px;
		  border: 1px solid grey;
		  border-left: none; /* Prevent double borders */
		  cursor: pointer;
		  border-radius: 0px 20px 20px 0px;
		}

		/* width */
		::-webkit-scrollbar {
		  width: 12px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  box-shadow: inset 0 0 5px grey; 
		  border-radius: 10px;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #27586e; 
		  border-radius: 10px;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: gray; 
		}

	</style>

	<link rel="stylesheet" type="text/css" href="3.style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>

	<!-- Here the popup login form will be shown -->
	<br><br>

	<div class="wrapper">

		<div class="title" > 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Sign In to <span style="font-family: miriam libre;">ZeeStream</span> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 </div>

		 <?php 
        	if(!empty($loginErr)){
           		echo '<div class="error1">' . $loginErr . '</div>';
        	}        
        ?>
	
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

			<div class="field">
				<input type="text" name="username" value="<?php echo htmlspecialchars($username);?>" placeholder="username">
				<span class="error1" style="float: right;"> <?php echo $usernameErr;?> </span>
			</div>

			<div class="field">
				<input type="text" name="email" value="<?php echo htmlspecialchars($email);?>" placeholder="email address">
				<span class="error1" style="float: right;"> <?php echo $emailErr;?> </span>
			</div>

			<div class="field">
				<input type="password" name="password" value="<?php echo htmlspecialchars($password);?>" placeholder="password">
				<span class="error1" style="float: right;"> <?php echo $passwordErr;?> </span>
			</div>

			<div class="content">
				<div class="checkbox">
					<input type="checkbox" name="remember-me" id="remember-me">
					<label for="remember-me" style="color: white;">Remember me</label>
				</div>
				<div class="pass-link">
					<a href="11.forgot password.php" style="color: #00b7eb;">&nbsp;&nbsp;&nbsp;Forgot Password?</a>
				</div>
			</div>

			<div class="field">
				<input type="submit" name="login" value="Login">
			</div>

			<div class="signup-link" style="color: white;">
				&nbsp;&nbsp;Not a member! <a href="1.register.php" style="color: #00b7eb;"> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Signup Now!</a>
			</div>

			<div style="float: left;">
				<a href="0.index.php"> << Back to Home</a>
			</div>

		</form>
	</div>


	<br><br><br><br><br><br><br>
	<br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p>

</body>
</html>