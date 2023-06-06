<?php
	
	session_start();
	// Check if the user is not logged in, if not then redirect to login page.
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
    	header("location: 5.login.php");
    	exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ZeeStream : Search</title>
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

		hr { border: 1px solid #27586e; margin: 0px;}

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

		h4{
			font-family: arial;
			font-size: 17px;
			color: white;
		}

	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<nav class="topnav">
			<a href="5.a.loggedin_user.php" style="font-family: miriam libre;font-size: 25px;">&nbsp;&nbsp;&nbsp;
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
					<a href="" style="font-size: 15px; color: white;">MyStream Account</a>
				</div>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<div class="example">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get" >
			  		<input type="text" name="search" placeholder=" movie / tv series.." value="<?php echo($_GET['search']) ?>">
			  		<input type="submit" name="submit" value="Search" class="example2"></input>
				</form>
			</div>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;
			
			<div class = "dropdown">
				<a href="" style="font-family: miriam libre;font-size: 17px;" class="dropbtn">
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 User </a>

				<div class="dropdown-content">
					<a href="" style="font-size: 15px; color: white;"> 
						<?php
							echo $_SESSION['username'];     // to show the logged in username.
						?>
					</a>
					<a href="5.b.logout_user.php" style="font-size: 15px; color: white;">Logout</a>
				</div>
			</div>
	</nav>

	<h1 style="text-align: center;color: white;font-family: consolas; font-size: 25px;">Contents Matched </h1>
	<hr>

	<p>
	<?php

		require_once "0.connection.php";

		$search = $_GET['search'];
		$button = $_GET['submit'];

		$terms = explode(" ", $search) ;

		if (!$search) 
		{
			echo "<div>
						<p > 
							 Type something to search . . . 
						</p>
					  </div>";
		}
		else{
			if (strlen($search) == 1) 
			{
				echo "<div>
						<p > 
							 Search term is too short . . . 
						</p>
					  </div>";
			}
			else
			{
				$query = "SELECT * FROM search WHERE " ;

				foreach ($terms as $value) 
				{
					$x = 1;

					if ($x == 1) 
					{
						$query .= "keywords LIKE '%$value%' " ;
					}
					else
					{
						$query .= "OR keywords LIKE '%$value%' " ;
					}

					if ($result = mysqli_query($link, $query)) 
					{
						if (mysqli_num_rows($result) == 0) 
						{
							echo "<div>
									<p > 
										 Sorry! No matching found.
									</p>
								  </div>";
						}
						else
						{
							$count = 1;

							while ($row = mysqli_fetch_assoc($result)) 
							{
								$id = $row['id'];
								$title = $row['title'];
								$keywords = $row['keywords'];
								$link = $row['link'];

								echo "<p> 
										<h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href='$link'> $count.&nbsp; $title </a> </h4>
									</p>";

								$count++;
							}
						}
					}
				}
			}
		}

		// disconnect database
		//mysqli_close($link);
	?>
	</p>

	<br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br><br>
	<br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p>


</body>
</html>
