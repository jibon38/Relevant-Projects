<!--?php include('2,server.php'); ?-->

<!DOCTYPE html>
<html>
<head>
	<title>ZeeStream : Monster Attacks</title>
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

		img{
			width: 140px; height: 210px;
			transition: 0.4s all ease-in-out;
		}

		img:hover { opacity: 0.92; transform: scale(1.1); }

		.bottomLeft{
			position: absolute;
			bottom: 4px; left: -50%; right: -50%; 
			text-align: center; color: white;
			font-family: arial; font-weight: bold; font-size: 13px; 
			background-color: #27586e;

			padding-right: 10px;
			padding-left: 10px;
		}

		.starView1{ color: yellow; font-family: arial; font-weight: bold; font-size: 24px; bottom: 0; }
		.starView2{ color: gray; font-family: arial; font-weight: bold; font-size: 24px; bottom: 0;}
		
		
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

	<h1 style="text-align: center;color: white;font-family: consolas; font-size: 23px;">Monster Movies(n)</h1>

	<hr><br>
	<div>
		<p> <a href="0.index.php"><< Back</a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="The Meg" class="ParentImage"><img src="1.Images/meg.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Meg</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Transformer: The Last Knight" class="ParentImage"><img src="1.Images/transformer.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Transformer: The Last Knight</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Suicide Squad" class="ParentImage"><img src="1.Images/suicide squad.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Suicide Squad</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Jumanji: The Next level" class="ParentImage"><img src="1.Images/jumanji 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Jumanji: The Next level</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Godzilla vs Kong" class="ParentImage"><img src="1.Images/godzilla2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Godzilla vs Kong</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Pacific Rim: Uprising" class="ParentImage"><img src="1.Images/pacific rim uprising.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Pacific Rim: Uprising</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Kong Skull Island" class="ParentImage"><img src="1.Images/kong skull island.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Kong Skull Island</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Godzilla: King of the Monsters" class="ParentImage"><img src="1.Images/godzilla1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Godzilla: King of the Monsters</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>
			
		</div>
	</div><br> <br> <br><hr>

	<br> <br> <br><br>
	<br> <br> <br>

	
	<br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p>


</body>
</html>