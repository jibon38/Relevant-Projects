<?php

	session_start();
	// Check if the user is not logged in, if not then redirect to login page.
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    	header("location: 5.login.php");
    	exit;
	}

	require_once "0.connection.php";

	$BirthDate = $Country = $State = "";
	$fieldErr = $updateErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$BirthDate = $_POST['BirthDate'];
		$Country = $_POST['Country'];
		$State = $_POST['State'];

		// ***************  Fields validation  ***************************

		if (empty($BirthDate)) 
		{
			$fieldErr = "Provide Necessary Fields." ;
		}else{
			$BirthDate = test_input($BirthDate);

			$sql = "SELECT id FROM register WHERE BirthDate = ? ";

			if ($stmt = mysqli_prepare($link, $sql)) 
			{
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $BirthDate);

				// Attempt to execute the prepared statement
				if (mysqli_stmt_execute($stmt)) 
				{			
					mysqli_stmt_store_result($stmt);
    				if(mysqli_stmt_num_rows($stmt) == 1)
    				{
                    	$BirthDate = $_POST['BirthDate'];
                	} 
                	else{
                    	// country updated successfully, 
						$BirthDate = $_POST['BirthDate'];
                	}
				}
				else
				{
					$updateErr = "Oops! Something Went Wrong.";
				}

				mysqli_stmt_close($stmt);
			}
		}

		if (empty($Country)) 
		{
			$fieldErr = "Provide Necessary Fields." ;
		}else{
			$Country = test_input($Country);

			$sql = "SELECT id FROM register WHERE Country = ? ";
			if ($stmt = mysqli_prepare($link, $sql)) 
			{
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $Country);

				// Attempt to execute the prepared statement
				if (mysqli_stmt_execute($stmt)) 
				{

					mysqli_stmt_store_result($stmt);
    				if(mysqli_stmt_num_rows($stmt) == 1)
    				{
                    	$Country = $_POST['Country'];
                	} 
                	else{
                    	// country updated successfully, 
						$Country = $_POST['Country'];
                	}
				}
				else
				{
					$updateErr = "Oops! Something Went Wrong.";
				}

				mysqli_stmt_close($stmt);
			}
		}

		if (empty($State)) 
		{
			$fieldErr = "Provide Necessary Fields." ;
		}else{
			$State = test_input($State);

			$sql = "SELECT id FROM register WHERE State = ? ";

			if ($stmt = mysqli_prepare($link, $sql)) 
			{
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $State);

				// Attempt to execute the prepared statement
				if (mysqli_stmt_execute($stmt)) 
				{
					mysqli_stmt_store_result($stmt);
    				if(mysqli_stmt_num_rows($stmt) == 1)
    				{
                    	$State = $_POST['State'];
                	} 
                	else{
                    	// country updated successfully, 
						$State = $_POST['State'];
                	}
				}
				else
				{
					$updateErr = "Oops! Something Went Wrong.";
				}

				mysqli_stmt_close($stmt);
			}
		}

		
		// ***************  If No Error Found.  ***************************

		if (empty($fieldErr)) 
		{
			//$sql = "INSERT INTO register (BirthDate, Country, State) VALUES (?, ?, ?)";
			$sql = "UPDATE register SET BirthDate = ?, Country = ?, State = ? WHERE email = ? ";

			if ($stmt = mysqli_prepare($link, $sql)) 
    		{
    			mysqli_stmt_bind_param($stmt, "ssss", $BirthDate, $Country, $State, $email);

    			$email = $_SESSION['email'];

    			if (mysqli_stmt_execute($stmt)) 
    			{
    				$_SESSION['BirthDate'] = $BirthDate;
    				$_SESSION['Country'] = $Country;
    				$_SESSION['State'] = $State;
    				//$_SESSION['Phone'] = $Phone;

    				header("location: dashboard.php");   // after successful update, redirect to final dashboard.
    			}
    			else{
    				//echo '<script>alert("Sorry! Something went wrong..")</script>';
    				$updateErr = "Oops! Something went wrong.";
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
	<title>ZeeStream : User Dashboard</title>
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
			font-weight: lighter;
			color: white; font-size: 17px;
		}
		a { color: white; text-decoration: none; }
		a:hover{ color: #00b7eb; }

		hr { border: 1px solid #27586e; margin: 0px;  }

		td { 
			text-align: center; color: white; font-family: arial;
			width: 300px; font-size: 23px;
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

		.topnav2{
			background: #27586e;
  			margin: 0 auto;
  			width: 100%;
  			padding: 18px; margin: 1px;
  			position: relative;
  			display: block;
		}
		.topnav2 a:hover{ 
			color: #00b7eb;
		}
		.dashboardContent{
			text-align: center; color: black; font-family: arial;
			width: 70px; font-size: 16px;
			text-align: left;
			padding: 15px 15px 20px 15px; 
			background-color: white; color: black; font-weight: bold;
		}
		.dashboardContent2{
			text-align: center; color: black; font-family: arial;
			width: 70px; font-size: 17px;
			text-align: left;
			padding: 15px; 
			background-color: white; color: black;
		}

		.submit{
			border-color: #1e3d51; border-radius: 8px;
			color: #1e3d51;
			float: middle;
			width: 110px; height: 40px; font-size: 16px;
		}
		.submit:hover {
			background-color: #27586e;
			color: white;
		}
		.cancel{
			border-color: #1e3d51; border-radius: 8px;
			color: #1e3d51;
			width: 110px; height: 40px;font-size: 16px; float: middle;
		}
		.cancel:hover{
			background-color: #27586e;
			color: white;
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

		.error1{color: orange;}

		.editInput
		{
			opacity: 0.8;
		}
		.editInput:hover{
			opacity: 1.0;
		}

	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

	<nav class="topnav">
			<a href="5.a.loggedin_user.php" style="font-family: miriam libre;font-size: 25px;"> &nbsp;&nbsp;&nbsp;
			ZeeStream </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a class="dropbtn" href="" style="font-family: miriam libre;font-size: 17px;"> Movies </a>
				<div class="dropdown-content" style="min-width: 180px;">
					<a href="13.New Releases loggedin.php" style="font-size: 15px; color: white;">New Releases</a>
					<a href="14.all time favourites loggedin.php" style="font-size: 15px; color: white;">All Time Favourites</a>
					<a href="15.most watched loggedin.php" style="font-size: 15px; color: white;">Most Watched</a>
					<a href="16.top tv series loggedin.php" style="font-size: 15px; color: white;">Top TV Series</a>
					<a href="16.animated features loggedin.php" style="font-size: 15px; color: white;">Animated Features</a>
					<a href="17.action movies loggedin.php" style="font-size: 15px; color: white;">Action Movies</a>
					<a href="18.drama and comedy loggedin.php" style="font-size: 15px; color: white;">Drama & Comedy</a>
					<a href="19.disaster movies loggedin.php" style="font-size: 15px; color: white;">Disaster Movies</a>
					<a href="20.monster attacks loggedin.php" style="font-size: 15px; color: white;">Monsters Attack</a>
					<a href="21.scifi movies loggedin.php" style="font-size: 15px; color: white;">Sci-fi & Aliens</a>
					<a href="22.sword movies loggedin.php" style="font-size: 15px; color: white;">Sword & Vangeance</a>
					<a href="23.war movies loggedin.php" style="font-size: 15px; color: white;">War & Espionage</a>
					<a href="24.romance movies loggedin.php" style="font-size: 15px; color: white;">Extreme Romance</a>
					<a href="25.horror movies loggedin.php" style="font-size: 15px; color: white;">Horror & Scary</a>
					<a href="26.award and nominated loggedin.php" style="font-size: 15px; color: white;">Award & Nominated</a>
				</div>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a href="" style="font-family: miriam libre;font-size: 17px;"> TV series </a>
				<div class="dropdown-content">
					<a href="16.top tv series loggedin.php" style="font-size: 15px; color: white;">Top TV Series</a>
					<a href="35.Netflix Series loggedin.php" style="font-size: 15px; color: white;">Netflix Series</a>
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
				<form action="search loggedin.php" method="get" >
			  		<input type="text" name="search" placeholder=" movies / tv series..">
			  		<input type="submit" name="submit" value="Search" class="example2"></input>
				</form>
			</div>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;

			<div class = "dropdown">
				<a href="" style="font-family: miriam libre;font-size: 17px; " class="dropbtn">
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 User </a>

				<div class="dropdown-content">
					<a href="" style="font-size: 15px; color: white;"> 
						<?php
							echo $_SESSION['username'];     // to show the logged in username.
						?>
					</a>
					<a href="5.b.logout_user.php" style="font-size: 15px; color: white;">Log Out</a>
				</div>
			</div>
			
	</nav>

	<h1 style="text-align: center;color: white;font-family: consolas; font-size: 23px;">User Dashboard</h1>
	<hr>

	<?php 
	    if(!empty($registerErr))
	    {
	        echo '<div class="error1">' . $updateErr . '</div>';
	    }
	    else if (!empty($emptyField)) 
	    {
	         echo '<div class="error1">' . $fieldErr . '</div>';
	    }        
    ?>

	<br><br>
	<div style="float: left; padding-left: 10px;"> 
		<div>
			<nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
			<a href="dashboard.php" style="font-size: 18px;">Account Overview</a>
			</nav>
			<nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
				<a href="11.reset_password.php" style="font-size: 18px;">Change Password</a>
			</nav>
			<nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
				<a href="11.email_verification.php" style="font-size: 18px; ">Email Verification</a>
			</nav>
			<nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
				<a href="5.b.logout_user.php" style="font-size: 18px;">Log Out</a>
			</nav>
		</div>
	</div>

	<div>
		<table cellspacing="0px" width="800px;" cellspacing="0px">

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

				<tr>
					<td class="dashboardContent">Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
					<td class="dashboardContent2" >
						<?php
							echo $_SESSION['username'];
						?>
					</td>
					
				</tr>
				<tr>
					<td class="dashboardContent">Email Address : </td>
					<td class="dashboardContent2">
						<?php
							echo $_SESSION['email'];
						?>
					</td>
					
				</tr>
				<tr>
					<td class="dashboardContent">Date of Birth &nbsp;&nbsp;&nbsp;: </td>
					<td class="dashboardContent">
						<input type="date" name="BirthDate" value="<?php echo htmlspecialchars($BirthDate);?>">

						<!-- a href="" style="float: right; color: #27586e; font-weight: bold;" class="editInput">
							Edit
						</a -->
					</td>
				</tr>
				<tr>
					<td class="dashboardContent">Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
					<td class="dashboardContent">
						<select name="Country" value="<?php echo htmlspecialchars($Country);?>">
							<optgroup label="Select a Country">
								<option>Bangladesh</option>
								<option>United States</option>
								<option>United Kingdom</option>
								<option>India</option>
								<option>Australia</option>
								<option>Spain</option>
								<option>Sweden</option>
								<option>Canada</option>
								<option>Italy</option>
								<option>HongKong</option>
							</optgroup>
						</select>
						
					</td>
					
				</tr>
				<tr>
					<td class="dashboardContent">State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
					<td class="dashboardContent2">
						<input type="text" name="State" value="<?php echo htmlspecialchars($State);?>" placeholder="your state">

						<!-- a href="" style="float: right; color: #27586e; font-weight: bold;" class="editInput">
							Edit
						</a -->
					</td>
					
				</tr>

				<tr>
					<td class="dashboardContent" style="background-color: #1e3d51;">
						
						<input class="submit" type="submit" name="submit" value="Save"> &nbsp;
						<input class="cancel" type="reset" name="cancel" value="Cancel">
					</td>
				</tr>

			</form>

		</table>
	</div>



	<br> <br> <br><br> <br>
	<hr>
	<br> <br> <br>

	<br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">MovieFlix</span></p>


</body>
</html>