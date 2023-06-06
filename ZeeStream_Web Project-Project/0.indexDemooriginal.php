<!DOCTYPE html>
<html>
<head>
	<title>ZeeStream : The World of Entertainment</title>
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

		div{
			margin: 0 auto;
			width: fit-content;
		}
		p{
			font-family: arial; 
			font-weight: lighter;
			color: white; font-size: 17px;
		}

		a { 
			color: white; text-decoration: none; 
		}

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

		img{
			width: 140px; height: 210px;
			transition: 0.4s all ease-in-out;
		}

		img:hover { opacity: 0.92; transform: scale(1.2); }

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
			<a href="0.index.php" style="font-family: miriam libre;font-size: 25px;">&nbsp;&nbsp;&nbsp;
			ZeeStream </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a class="dropbtn" href="" style="font-family: miriam libre;font-size: 17px;"> Movies </a>
				<div class="dropdown-content" style="min-width: 180px;">
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

	<h1 style="text-align: center;color: white;font-family: consolas;">Popular Movies & TV Series</h1>

	<hr>
	<div>
		<p> <a href="13.New Releases.php">ZS : New Releases</a> </p> 
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="3.black widow page.php" title="Black Widow | Official Trailer" class="ParentImage"><img src="1.Images/1.widow.png"></a>
				<div class="bottomLeft">
					<br><a href="3.black widow page.php">Black Widow Trailer</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;" >
				<a href="27.hitmans wifes boduguard.php" title="Hitman's Wifes Bodyguard - Official Trailer" class="ParentImage">
					<img src="1.Images/11.hitman2.png" ></a>
				<div class="bottomLeft">
					<br><a href="27.hitmans wifes boduguard.php">Hitman's Wife's Bodyguard </a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="29.fast9.php" title="Fast 9 - Official Trailer" class="ParentImage"><img src="1.Images/13.f92.png" ></a>
				<div class="bottomLeft">
					<br><a href="29.fast9.php">Fast & Furious 9 Trailer</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="30.shang chi.php" title="Shang Chi - Official Trailer" class="ParentImage"><img src="1.Images/15.shang chi2.png"></a>
				<div class="bottomLeft">
					<br><a href="30.shang chi.php30.shang chi.php">Marvel's Shang Chi Trailer</a>
					<br> <span class="starView1">******</span><span class="starView2">****</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="28.riders of justice.php" title="Riders of Juxtice - Official Trailer" class="ParentImage"><img src="1.Images/12.riders2.png"></a>
				<div class="bottomLeft">
					<br><a href="28.riders of justice.php">Rider's of Justice Trailer</a>
					<br><span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="34.justice league.php" title="Zack Snyder's Justice League Official Trailer | 2020" class="ParentImage"><img src="1.Images/21.justice league2.png"></a>
				<div class="bottomLeft">
					<br><a href="34.justice league.php">Justice League Trailer</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="33.bridesmaids.php" title="Brutal Bridesmaids - Official Trailer | 2020" class="ParentImage"><img src="1.Images/18.bridesmaids2.png"></a>
				<div class="bottomLeft">
					<br><a href="33.bridesmaids.php">Brutal Bridesmaids Trailer</a>
					<br> <span class="starView1">******</span><span class="starView2">****</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="32.mainstream.php" title="Mainstream - Official Trailer" class="ParentImage"><img src="1.Images/17.mainstream2.png"></a>
				<div class="bottomLeft">
					<br><a href="32.mainstream.php">Mainstream Trailer</a>
					<br> <span class="starView1">******</span><span class="starView2">****</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="13.New Releases.php" style="text-decoration: none;">  View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="14.all time favourites.php">ZS : All Time Favourites</a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="38.12 strong.php" title="12 Strong" class="ParentImage"><img src="1.Images/12 strong.jpg"></a>
				<div class="bottomLeft">
					<br><a href="38.12 strong.php">12 Strong</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="37.13 hours.php" title="13 Hours: The Secret Soldiers of Benghazi" class="ParentImage"><img src="1.Images/13 hours.jpg"></a>
				<div class="bottomLeft">
					<br><a href="37.13 hours.php">13 Hours: Secret Soldiers of Benghazi</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Blade Runner 2049" class="ParentImage"><img src="1.Images/blade runner.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Blade Runner</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="39.batman begins.php" title="Batman Begins" class="ParentImage"><img src="1.Images/batman2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="39.batman begins.php">Batman: Begins</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Avengers: Endgame" class="ParentImage"><img src="1.Images/endgame.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Avengers: Endgame</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Ironman 3" class="ParentImage"><img src="1.Images/ironman3.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Iron Man 3</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="40.man of steel.php" title="Man of Steel" class="ParentImage"><img src="1.Images/man of steel.jpg"></a>
				<div class="bottomLeft">
					<br><a href="40.man of steel.php">Man of Steel</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="" class="ParentImage"><img src="1.Images/titanic.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Titanic</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>

		</div>
		
		<p style="text-align: right;"> <a href="14.all time favourites.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="15.most watched.php">ZS : Most Watched </a> </p> 
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="Transformer: The Last Knight" class="ParentImage"><img src="1.Images/transformer.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Transformer: The Last Knight</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Troy" class="ParentImage"><img src="1.Images/troy.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Troy</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="X-MEN : Apocalypse" class="ParentImage"><img src="1.Images/xmen1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">XMEN: Apocalypse</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Shape of Water" class="ParentImage"><img src="1.Images/shape of water.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Shape of Water</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="54.mission impossible.php" title="Mission Impossible: Fallout" class="ParentImage"><img src="1.Images/mission fallout.jpg"></a>
				<div class="bottomLeft">
					<br><a href="54.mission impossible.php">Mission Impossible: Fallout</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="La La Land" class="ParentImage"><img src="1.Images/la la land.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">La La Land</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="46.justice league.php" title="Justice League" class="ParentImage"><img src="1.Images/justice league.jpg"></a>
				<div class="bottomLeft">
					<br><a href="46.justice league.php">Justice League</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Avengers: Endgame" class="ParentImage"><img src="1.Images/endgame.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Avengers: Endgame</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>

		</div>
		<p style="text-align: right;"> <a href="15.most watched.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="16.top tv series.php">ZS : Top TV Series </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="35.Netflix Series.php" title="The Witcher: Season 1" class="ParentImage"><img src="1.Images/Witcher/1.witcher.jpg"></a>
				<div class="bottomLeft">
					<br><a href="35.Netflix Series.php">The Witcher: Season One</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="35.Netflix Series.php" title="The Queens Gambit: Season 1" class="ParentImage"><img src="1.Images/Witcher/queens gambit.jpg"></a>
				<div class="bottomLeft">
					<br><a href="35.Netflix Series.php">The Queens Gambit: Season 1</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="35.Netflix Series.php" title="Frontier: Season 1" class="ParentImage"><img src="1.Images/Witcher/frontier.jpg"></a>
				<div class="bottomLeft">
					<br><a href="35.Netflix Series.php">Frontier: Season One</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Vikings: Season 1" class="ParentImage"><img src="1.Images/Witcher/vikings.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Vikings: Season One</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="35.Netflix Series.php" title="Marco Polo: Season 1" class="ParentImage"><img src="1.Images/Witcher/polo.jpg"></a>
				<div class="bottomLeft">
					<br><a href="35.Netflix Series.php">Marco Polo: Season One</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Riverdale: Season 1" class="ParentImage"><img src="1.Images/Witcher/riverdale.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Riverdale: Season One</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Cursed: Season 1" class="ParentImage"><img src="1.Images/Witcher/cursed.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Cursed: Season One</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Umbrella Academy: Season 1" class="ParentImage"><img src="1.Images/Witcher/umbrella academy.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Umbrella Academy: Season One</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>

		</div>
		<p style="text-align: right;"> <a href="16.top tv series.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="16.animated features.php">ZS : Animated Features </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="47.bolt.php" title="Bolt" class="ParentImage"><img src="1.Images/bolt.jpg"></a>
				<div class="bottomLeft">
					<br><a href="47.bolt.php">Bolt</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="48.frozen 2.php" title="Disney's Frozen II" class="ParentImage"><img src="1.Images/frozen 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="48.frozen 2.php">Disney's Frozen II</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="49.green lantern first flight.php" title="Green Lantern: First Flight" class="ParentImage"><img src="1.Images/gl first flight.jpg"></a>
				<div class="bottomLeft">
					<br><a href="49.green lantern first flight.php">Green Lantern: First Flight</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="51.adventures of tintin.php" title="The Adventures of Tintin" class="ParentImage"><img src="1.Images/tintin.jpg"></a>
				<div class="bottomLeft">
					<br><a href="51.adventures of tintin.php">The Adventures of Tintin</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="50.batman red hood.php" title="Batman: Under The Red Hood" class="ParentImage"><img src="1.Images/red hood.jpg"></a>
				<div class="bottomLeft">
					<br><a href="50.batman red hood.php">Batman: Under The Red Hood</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="52.jl atlantis.php" title="Justice League: Throne of Atlantis" class="ParentImage"><img src="1.Images/jl atlantis.jpg"></a>
				<div class="bottomLeft">
					<br><a href="52.jl atlantis.php">Justice League: Throne of Atlantis</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="53.incredibles 2.php" title="The Incredibles II" class="ParentImage"><img src="1.Images/incredibles 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="53.incredibles 2.php">The Incredibles II</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Lion King" class="ParentImage"><img src="1.Images/lion king.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Lion King</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>

		</div>
		<p style="text-align: right;"> <a href="16.animated features.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="17.action movies.php">ZS : Action Movies </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="42.6 underground.php" title="6 Underground" class="ParentImage"><img src="1.Images/6 underground.jpg"></a>
				<div class="bottomLeft">
					<br><a href="42.6 underground.php">6 Underground</a>
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
				<a href="" title="Gladiator" class="ParentImage"><img src="1.Images/gladiator.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Gladiator</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="45.hercules.php" title="Hercules" class="ParentImage"><img src="1.Images/hercules.jpg"></a>
				<div class="bottomLeft">
					<br><a href="45.hercules.php">Hercules</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Godzilla vs Kong" class="ParentImage"><img src="1.Images/godzilla2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Godzilla vs Kong</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Bloodshot" class="ParentImage"><img src="1.Images/bloodshot.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Bloodshot</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="43.civil war.php" title="Captain America: Civil War" class="ParentImage"><img src="1.Images/civil war.jpg"></a>
				<div class="bottomLeft">
					<br><a href="43.civil war.php">Captain America: Civil War</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="54.mission impossible.php" title="Mission Impossible: Fallout" class="ParentImage"><img src="1.Images/mission fallout.jpg"></a>
				<div class="bottomLeft">
					<br><a href="54.mission impossible.php">Mission Impossible: Fallout</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="17.action movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="18.drama and comedy.php">ZS : Drama & Comedy </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="The Titanic" class="ParentImage"><img src="1.Images/titanic.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Titanic</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Silver Linings" class="ParentImage"><img src="1.Images/silver linings.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Silver Linings</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="La La Land" class="ParentImage"><img src="1.Images/la la land.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">La La Land</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Shape of Water" class="ParentImage"><img src="1.Images/shape of water.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Shape of Water</a>
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
				<a href="" title="No Strings Attached" class="ParentImage"><img src="1.Images/no strings attached.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">No Strings Attached</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Carol" class="ParentImage"><img src="1.Images/carol.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Carol</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Blue Valentine" class="ParentImage"><img src="1.Images/blue valentine.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Blue Valentine</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>

		</div>
		<p style="text-align: right;"> <a href="18.drama and comedy.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="19.disaster movies.php">ZS : Disaster Movies </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="Transformer: The Last Knight" class="ParentImage"><img src="1.Images/transformer.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Transformer: The Last Knight</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Pacific Rim" class="ParentImage"><img src="1.Images/pacific rim.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Pacific Rim</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="San Andreas" class="ParentImage"><img src="1.Images/san andreas.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">San Andreas</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Godzilla: King of The Monsters" class="ParentImage"><img src="1.Images/godzilla1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Godzilla: King of The Monsters</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Heart of The Sea" class="ParentImage"><img src="1.Images/heart of the sea.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Heart of The Sea</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Godzilla vs Kong" class="ParentImage"><img src="1.Images/godzilla2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Godzilla vs Kong</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
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
				<a href="" title="War of the World" class="ParentImage"><img src="1.Images/war of the world.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">War of The World</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="19.disaster movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="20.monster attacks.php">ZS : Monster Attacks </a> </p>
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
		<p style="text-align: right;"> <a href="20.monster attacks.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="21.scifi movies.php">ZS : Sci-fi & Aliens </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="46.justice league.php" title="Justice league" class="ParentImage"><img src="1.Images/justice league.jpg"></a>
				<div class="bottomLeft">
					<br><a href="46.justice league.php">Justice league</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="41.aquaman.php" title="Aquaman" class="ParentImage"><img src="1.Images/aquaman.jpg"></a>
				<div class="bottomLeft">
					<br><a href="41.aquaman.php">Aquaman</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Chaos Walking" class="ParentImage"><img src="1.Images/chaos walking.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Chaos Walking</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="44.first man.php" title="First Man" class="ParentImage"><img src="1.Images/first man.jpg"></a>
				<div class="bottomLeft">
					<br><a href="44.first man.php">First Man</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Thor" class="ParentImage"><img src="1.Images/thor.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Thor</a>
					<br> <span class="starView1">*****</span><span class="starView2">*****</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="40.man of steel.php" title="Man of Steel" class="ParentImage"><img src="1.Images/man of steel.jpg"></a>
				<div class="bottomLeft">
					<br><a href="40.man of steel.php">Man of Steel</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Interstellar" class="ParentImage"><img src="1.Images/interstellar.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Interstellar</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Avengers: Endgame" class="ParentImage"><img src="1.Images/endgame.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Avengers: Endgame</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="21.scifi movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="22.sword movies.php">ZS : Sword and Vangeance </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="Transporter" class="ParentImage"><img src="1.Images/transporter1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Transporter</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="X-Men 2" class="ParentImage"><img src="1.Images/xmen2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">X-Men 2</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Troy" class="ParentImage"><img src="1.Images/troy.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Troy</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Transporter: Refueled" class="ParentImage"><img src="1.Images/transporter3.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Transporter: Refueled</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="45.hercules.php" title="Hercules" class="ParentImage"><img src="1.Images/hercules.jpg"></a>
				<div class="bottomLeft">
					<br><a href="45.hercules.php">Hercules</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Man from U.N.C.L.E" class="ParentImage"><img src="1.Images/man from uncle.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Man from U.N.C.L.E</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
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
				<a href="" title="X-Men 3" class="ParentImage"><img src="1.Images/xmen-3.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">X-Men 3</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="22.sword movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="23.war movies.php">ZS : War & Espionage </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="Troy" class="ParentImage"><img src="1.Images/troy.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Troy</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Transporter" class="ParentImage"><img src="1.Images/transporter1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Transporter</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="War of The World" class="ParentImage"><img src="1.Images/war of the world.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">War of The World</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Gladiator" class="ParentImage"><img src="1.Images/gladiator.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Gladiator</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Great Wall" class="ParentImage"><img src="1.Images/great wall.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Great Wall</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Blade Runner 2049" class="ParentImage"><img src="1.Images/blade runner.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Blade Runner 2049</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Batman: Dark Knight Rises" class="ParentImage"><img src="1.Images/batman3.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Batman: Dark Knight Rises</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="54.mission impossible.php" title="Mission Impossible: Fallout" class="ParentImage"><img src="1.Images/mission fallout.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Mission Impossible: Fallout</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="23.war movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="24.romance movies.php">ZS : Extreme Romance </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="Silver Linings" class="ParentImage"><img src="1.Images/silver linings.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Silver Linings</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Titanic" class="ParentImage"><img src="1.Images/titanic.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Titanic</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="La La Land" class="ParentImage"><img src="1.Images/la la land.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">La La Land</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Shape of Water" class="ParentImage"><img src="1.Images/shape of water.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Shape of Water</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Carol" class="ParentImage"><img src="1.Images/carol.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Carol</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="After" class="ParentImage"><img src="1.Images/after.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">After</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Blue Valentine" class="ParentImage"><img src="1.Images/blue valentine.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Blue Valentine</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="No Strings Attached" class="ParentImage"><img src="1.Images/no strings attached.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">No Strings Attached</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="24.romance movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="25.horror movies.php">ZS : Horror & Scary </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="The Conjuring" class="ParentImage"><img src="1.Images/conjuring.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Conjuring</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Conjuring 2" class="ParentImage"><img src="1.Images/conjuring 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Conjuring 2</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Conjuring 3" class="ParentImage"><img src="1.Images/conjuring 3.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Conjuring 3</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Dawn of The Dead" class="ParentImage"><img src="1.Images/dawn of the dead.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Dawn of The Dead</a>
					<br> <span class="starView1">*********</span><span class="starView2">*</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Nun" class="ParentImage"><img src="1.Images/nun.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Nun</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="IT Chapter 2" class="ParentImage"><img src="1.Images/it.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">IT Chapter 2</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="The Mummy" class="ParentImage"><img src="1.Images/mummy.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">The Mummy</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Annabelle Creation" class="ParentImage"><img src="1.Images/annabelle.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Annabelle Creation</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="25.horror movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="26.award and nominated.php">ZS : Award & Nomination </a> </p>
		<div>
			<div style="display: inline-block; position: relative;">
				<a href="" title="Oscar 2019" class="ParentImage"><img src="1.Images/oscar 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Oscar 2019</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Oscar 2020" class="ParentImage"><img src="1.Images/oscar 1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Oscar 2020</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Emmy Award 2018" class="ParentImage"><img src="1.Images/emmy 1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Emmy Award 2018</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Emmy Award 2019" class="ParentImage"><img src="1.Images/emmy 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Emmy Award 2019</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Emmy Award 2020" class="ParentImage"><img src="1.Images/emmy 3.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Emmy Award 2020</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Bafta Award 2020" class="ParentImage"><img src="1.Images/bafta 1.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Bafta Award 2020</a>
					<br> <span class="starView1">********</span><span class="starView2">**</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Oscar 2021" class="ParentImage"><img src="1.Images/oscar 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Oscar 2021</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>&nbsp;&nbsp;

			<div style="display: inline-block; position: relative;">
				<a href="" title="Emmy Award 2021" class="ParentImage"><img src="1.Images/emmy 2.jpg"></a>
				<div class="bottomLeft">
					<br><a href="">Emmy Award 2021</a>
					<br> <span class="starView1">*******</span><span class="starView2">***</span>
				</div>
			</div>
			
		</div>
		<p style="text-align: right;"> <a href="26.award and nominated.php" style="text-decoration: none;"> View all </a> </p>
	</div>

	<hr>
	<br> <br> <br>

	<div>
		<table style=" width: 80%;" align="center">
			<tr>
				<td> Watch </td>
				<td> MyStream Account </td>
				<td> Features </td>
				<td> Help </td>
			</tr>
			<tr>
				<td style="font-size: 13px;"> <a href="14.all time favourites.php">Movies</a> </td>
				<td style="font-size: 13px;"> <a href="dashboard.php">MyStream</a> </td>
				<td style="font-size: 13px;"> <a href="15.most watched.php">Most Watched</a> </td>
				<td style="font-size: 13px;"> <a href="">About Us</a> </td>
			</tr>
			<tr>
				<td style="font-size: 13px;"> <a href="35.Netflix Series.php">TV Series</a> </td>
				<td style="font-size: 13px;"> <a href=""> Account </a> </td>
				<td style="font-size: 13px;"> <a href="16.animated features.php">Animation</a> </td>
				<td style="font-size: 13px;"> <a href="contactUs.php">Contact Us</a> </td>
			</tr>
		</table>
	</div><br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">ZeeStream</span></p>


</body>
</html>
