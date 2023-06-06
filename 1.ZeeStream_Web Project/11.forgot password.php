
<!DOCTYPE html>
<html>
<head>
	<title>MyFlix : Forgot Password</title>
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

		hr { border: 1px solid #27586e; margin: 0px; }

		td { 
			text-align: center; color: white; font-family: montserrat;
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


		.submit{
			border-color: #1e3d51; border-radius: 8px;
			color: #1e3d51;
			float: left;
			width: 160px; height: 40px;
		}
		.submit:hover {
			background-color: #27586e;
			color: white;
		}
		.cancel{
			border-color: #1e3d51; border-radius: 8px;
			color: #1e3d51;
			float: right;
			width: 160px; height: 40px;
		}
		.cancel:hover{
			background-color: #27586e;
			color: white;
		}

		.error1{
			color: orange;
		}

		.passwordField{
			float: left;
			width: 330px;
			height: 36px;
			background-color: white-gray;
		}

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
				 	&nbsp; Sign In
				</a>
				<div class="dropdown-content">
					<a href="5.login.php" style="font-size: 15px; color: white;">Sign In</a>
					<a href="1.register.php" style="font-size: 15px; color: white;">Create an Account</a>
				</div>
			</div>
			
	</nav>

	<!-- Here the popup login form will be shown -->
	<br><br>

	<div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div>

				<p style="font-size: 20px;">Forgot Your Password ?</p>

				<p style="font-size: 15px; text-align: left;">Enter your Email and we will send you instructions<br>
				 to reset password.</p>

				<input type="text" name="email" class="passwordField" placeholder=" Email Address"> <br><br>
				<span class="error1" style="float: right;"> </span> <br>

				<input class="submit" type="submit" name="submit" value="Submit">
				<input class="cancel" type="reset" name="cancel" value="Cancel">

			</div>
		</form>
	</div>


	<!-- Bottm Part Begins-->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<br><br>
	<br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p><br>

</body>
</html>