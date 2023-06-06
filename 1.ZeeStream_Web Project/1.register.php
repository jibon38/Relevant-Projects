<?php 
	
	//require('db.php');
	require_once "0.connection.php";
	
	$usernameErr = $emailErr = $passwordErr = "";
    $username = $email = $password = "";
    $registerErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

    	$username = $_REQUEST['username'];
    	$email = $_REQUEST['email'];
    	$password = $_REQUEST['password'];

    	// ***************  Username validation  ***************************

    	if (empty($username)) {
    		$usernameErr = "Username is required.";
    	}else{
    		$username = test_input($username);
    		if (!preg_match("/^[0-9a-zA-Z-']*$/", $username)) {
              $usernameErr = "Invalid Username.";
            }

            $sql = "SELECT id FROM register WHERE username = ?";
    		if ($stmt = mysqli_prepare($link, $sql)) 
    		{
    			mysqli_stmt_bind_param($stmt, "s", $username);
    			//$param_username = $username;

    			if (mysqli_stmt_execute($stmt)) 
    			{
    				mysqli_stmt_store_result($stmt);
    				if(mysqli_stmt_num_rows($stmt) == 1){
                    	$usernameErr = "Username is already taken.";
                	} 
                	else{
                    	$username = $_POST["username"];
                	}
    			}
    			else{
    				//echo '<script>alert("Sorry! Something went wrong..")</script>';
    				$registerErr = "Sorry! Something went wrong...";
    			}

    			mysqli_stmt_close($stmt);
    		}
    	}

    	// ***************  Email validation  ***************************

    	if (empty($email)) {
    		$emailErr = "Email is required.";
    	}
    	else
    	{
    		$email = test_input($email);
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              	$emailErr = "Invalid Email Formate.";
             }

            $sql = "SELECT id FROM register WHERE email = ?";
    		if ($stmt = mysqli_prepare($link, $sql)) 
    		{
    			mysqli_stmt_bind_param($stmt, "s", $email);

    			if (mysqli_stmt_execute($stmt)) 
    			{
    				mysqli_stmt_store_result($stmt);
    				if(mysqli_stmt_num_rows($stmt) == 1){
                    	$emailErr = "Email is already taken.";
                	} 
                	else{
                    	$email = $_POST["email"];
                	}
    			}
    			else{
    				//echo '<script>alert("Sorry! Something went wrong..")</script>';
    				$registerErr = "Sorry! Something went wrong...";
    			}

    			mysqli_stmt_close($stmt);
            }
    	}

    	// ***************  Password validation  ***************************

    	if (empty($password)) {
    		$passwordErr = "Password is required.";
    	}
    	elseif (strlen($password) < 6) {
    		$passwordErr = "At least 6 chars password.";
    	}
    	else{
    		$password1 = test_input($password);
    		if (!preg_match("/^[0-9a-zA-Z-'@#$%^&*]*^/", $password1)) {
              $passwordErr = "Invalid Password Formate.";
            }
    	}

    	// ****************  Check input errors before inserting into database.

    	if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) 
    	{
    		$sql = "INSERT INTO register (username, email, password) VALUES (?, ?, ?) ";

    		if ($stmt = mysqli_prepare($link, $sql)) 
    		{
    			//mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
    			mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

    			$password = password_hash($password, PASSWORD_DEFAULT);

    			if (mysqli_stmt_execute($stmt)) 
    			{
    				header("location: 5.login.php");   // after successful registration, redirect to login page.
    			}
    			else{
    				//echo '<script>alert("Sorry! Something went wrong..")</script>';
    				$registerErr = "Sorry! Something went wrong.";
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
	<title>ZeeStream : Creating Account</title>
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

  			padding: 10px 10px 10px 10px;
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
			font-weight: bold;
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
		.example form::after {
		  content: "";
		  clear: both;
		  display: table;
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

		<div class="title"> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Create an Account 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 </div>

		 <?php 
	        if(!empty($registerErr)){
	            echo '<div class="error1">' . $registerErr . '</div>';
	        }        
        ?>
	
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
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
					<input type="checkbox" name="checkbox" id="checkbox" required >
					<label for="check" style="color: white; font-size: 12px;">
						<br><br> I certify that I'm at least 18 years old and agree to the <a href=""><span style="color:#00b7eb; ">Terms & Policies</span></a> and <a href=""><span style="color: #00b7eb;">Privacy Policy</span></a> to this site.<br><br>
					</label>
				</div>
			</div>

			<div class="field">
				<input type="submit" name="register" value="Sign Up" >
			</div>

			<div class="signup-link" style="color: white;">
				Already a member ! <a href="5.login.php" style="color: #00b7eb;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Sign In Now!</a>
			</div>

			<div style="float: left;">
				<a href="0.index.php"> << Back to Home</a>
			</div>

		</form>
	</div>

	<br><br><br><br><br><br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p>

</body>
</html>