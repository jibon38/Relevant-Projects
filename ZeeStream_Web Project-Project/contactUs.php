<?php

	require_once "0.connection.php";

	$username = $email = $message = "";
	$usernameErr = $emailErr = $messageErr = "";
	$contactErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		// ***************  Name Validation  ***************************
		if(empty($username))
		{
			$usernameErr = "Name is Required.";
		}
		else
		{
			$username = test_input($username);
		}


		// ***************  Email Validation  ***************************
		if(empty($email))
		{
			$emailErr = "Email is Required.";
		}
		else
		{
			$email = test_input($email);
		}


		// ***************  Message Validation  ***************************
		if(empty($message))
		{
			$messageErr = "<br>Please Write Something.";
		}
		else
		{
			$message = test_input($message);
		}

		// ***************  If no errors found, insert data into database  ***************************

		if( empty($usernameErr) && empty($emailErr) && empty($messageErr) )
		{
			$sql = "INSERT INTO contactus (username, email, message) VALUES(?, ?, ?) " ;

			if ($stmt = mysqli_prepare($link, $sql))
			{
    			mysqli_stmt_bind_param($stmt, "sss", $username, $email, $message);

    			if (mysqli_stmt_execute($stmt)) 
    			{
    				header("location: 0.index.php");   // after successful submission, redirect to home page.
    			}
    			else{
    				//echo '<script>alert("Sorry! Something went wrong..")</script>';
    				$contactErr = "Sorry! Something went wrong.";
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
	<title>ZeeStream : Most Watched</title>
	<meta charset="utf-8">
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

		.example{
			display: inline-block; position: relative;
		}
		.example form input[type=text] {
		  padding: 10px;
		  font-size: 17px;
		  border: 1px solid grey;
		  width: 280px;
		  height: 12px;
		  background: white; 
		  margin: auto;			
		  border-radius: 20px 0px 0px 20px; border-right: none;
		}
		.example2 {
		  float: right;
		  width: 70px;
		  padding: 6px;
		  background: #f8f8fc;
		  color: black;
		  font-size: 17px;
		  border: 1px solid grey;
		  border-left: none; /* Prevent double borders */
		  cursor: pointer;
		  border-radius: 0px 20px 20px 0px;
		}

		/* width */
		::-webkit-scrollbar {
		  width: 15px;
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

		.messageForm
		{
			color: black;
			background-color: white;
			font-size: 17px; font-family: arial;
			padding: 20px;
			width: 800px;
			height: 355px;
			text-align: left;
		}

		.inputField{
			margin-top: 5px; 
			width: 400px;
			height: 40px;
		}
		.inputField2{
			margin-top: 5px; 
			width: 500px;
			height: 100px;
			float: middle; vertical-align: top;
		}

		.submit{
			border-color: #1e3d51; border-radius: 5px;
			float: middle;
			width: 110px; height: 40px; font-size: 17px; 
			background-color: #27586e;
			color: white;
		}
		.submit:hover {
			background-color: white;
			color: #27586e;
		}
		.cancel{
			border-color: #1e3d51; border-radius: 5px;
			color: #1e3d51;
			width: 110px; height: 40px;font-size: 17px; float: middle;
			background-color: #27586e;
			color: white;
		}
		.cancel:hover{
			background-color: white;
			color: #27586e;
		}

		.error1{ color: orange; font-size: 15px; font-weight: bold; }
		
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<nav class="topnav">
			<a href="0.index.php" style="font-family: miriam libre;font-size: 25px;"> &nbsp;&nbsp;&nbsp;
			ZeeStream </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a class="dropbtn" href="" style="font-family: miriam libre;font-size: 17px;"> Movies </a>
				<div class="dropdown-content" style="min-width: 190px;">
					<a href="13.New Releases.php" style="font-size: 15px; color: white;">New Releases</a>
					<a href="14.all time favourites.php" style="font-size: 15px; color: white;">All Time Favourites</a>
					<a href="15.most watched.php" style="font-size: 15px; color: white;">Most Watched</a>
					<a href="16.top tv series.php" style="font-size: 15px; color: white;">Top TV Series</a>
					<a href="16.animated features.php" style="font-size: 15px; color: white;">Animated Features</a>
					<a href="17.action movies.php" style="font-size: 15px; color: white;">Action Movies</a>
					<a href="18.drama and comedy.php" style="font-size: 15px; color: white;">Drama & Comedy</a>
					<a href="19.disaster movies.php" style="font-size: 15px; color: white;">Disaster Movies</a>
					<a href="20.monster attacks.php" style="font-size: 15px; color: white;">Monsters Attack</a>
					<a href="21.scifi movies.php" style="font-size: 15px; color: white;">Sci-fi & Aliens</a>
					<a href="22.sword movies.php" style="font-size: 15px; color: white;">Sword & Vangeance</a>
					<a href="23.war movies.php" style="font-size: 15px; color: white;">War & Espionage</a>
					<a href="24.romance movies.php" style="font-size: 15px; color: white;">Extreme Romance</a>
					<a href="25.horror movies.php" style="font-size: 15px; color: white;">Horror & Scary</a>
					<a href="26.award and nominated.php" style="font-size: 15px; color: white;">Award & Nominated</a>
				</div>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a href="" style="font-family: miriam libre;font-size: 17px;"> TV series </a>
				<div class="dropdown-content">
					<a href="16.top tv series.php" style="font-size: 15px; color: white;">Top TV Series</a>
					<a href="35.Netflix Series.php" style="font-size: 15px; color: white;">Netflix Series</a>
					<a href="" style="font-size: 15px; color: white;">Hulu Original</a>
					<a href="" style="font-size: 15px; color: white;">Apple TV</a>
				</div>
			</div> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a href="" style="font-family: miriam libre;font-size: 17px;"> MyStream </a>
				<div class="dropdown-content">
					<a href="dashboard.php" style="font-size: 15px; color: white;">MyStream Account</a>
				</div>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<div class="example">
				<form action="search.php" method="get" >
			  		<input type="text" name="search" placeholder=" movies / tv series..">
			  		<input type="submit" name="submit" value="Search" class="example2"></input>
				</form>
			</div>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;
			
			<div class = "dropdown">
				<a href="" style="font-family: miriam libre;font-size: 17px;" class="dropbtn">
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 	&nbsp;Sign In 
				 </a>
				<div class="dropdown-content">
					<a href="5.login.php" style="font-size: 15px; color: white;">Sign In</a>
					<a href="1.register.php" style="font-size: 15px; color: white;">Create an Account</a>
				</div>
			</div>
	</nav>

	<h1 style="text-align: center;color: white;font-family: consolas; font-size: 23px;">Contact Us</h1>

	<hr>
	<br>
	<div>
		<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >

			<div class="messageForm">

				<label>Your Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input class="inputField" type="text" name="username" value="<?php echo htmlspecialchars($username);?>" placeholder="your name">
				<span class="error1" style="float: right;"> <?php echo $usernameErr;?> </span> <br><br>

				<label>Email Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input class="inputField" type="text" name="email" value="<?php echo htmlspecialchars($email);?>" placeholder="email address">
				<span class="error1" style="float: right;"> <?php echo $emailErr;?> </span> <br><br><br>

				<label>Write Message &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

					<textarea name="message" class="inputField2" value="<?php echo htmlspecialchars($message);?>" placeholder="your message"></textarea>

					<span class="error1" style="float: right;"> <?php echo $messageErr;?> </span>

				</label> <br><br><br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;

				<input class="submit" type="submit" name="submit" value="Submit" > &nbsp;&nbsp;
				<input class="cancel" type="reset" name="cancel" value="Cancel">

			</div>

		</form>
	</div>

	<br> <br> 
	<br> <br> <br>


	<br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p>


</body>
</html>