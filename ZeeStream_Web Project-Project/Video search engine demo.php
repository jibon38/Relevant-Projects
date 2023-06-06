<?php

	$search = $searchoriginal = $submitbutton = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$search= $_POST['search'];    				// 'search' is the name of input box for search.
		$submitbutton= $_POST['submit'];			// 'submit' is the name of the submit button

		$searchoriginal= $search;

		$search= strtolower($search);

		$search= trim($search);

		$search= explode(" ", $search);

		$countsearchterms= count($search);

		$directory = "2.Videos/";


		if ($submitbutton){
			if (!empty($searchoriginal)) 
			{
				if (is_dir($directory)){

					if ($open = opendir($directory)){
						if ($countsearchterms == 1)
						{
						    while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
			
			
			      				if ((strpos("$file",  "$search[0]") !== false) && (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
									 		<source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
											Your browser does not support the video tag.
										  </video><br><br><hr>";

								}

		    				}
						}
						else if ($countsearchterms == 2) {
							while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
			

		    					if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false))  && (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
									 		<source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
											Your browser does not support the video tag.
										</video><br><br><hr>";

								}

		    				}
						}
						else if ($countsearchterms == 3) {
							while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
				

			    				if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false))  
								&& (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
									 		<source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
											Your browser does not support the video tag.
										</video><br><br><hr>";

								}

			    			}
						}

						else if ($countsearchterms == 4) {
							while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
				

			    				if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) && (strpos("$file",  "$search[3]") !== false))  
								&& (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
												<source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
												Your browser does not support the video tag.
											</video><br><br><hr>";

								}

			    			}
						}

						else if ($countsearchterms == 5) {
							while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
				

			    				if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) 
								&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false))  
								&& (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
											<source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
											Your browser does not support the video tag.
										</video><br><br><hr>";

								}

			    			}
						}

						else if ($countsearchterms == 6) {
							while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
				

			   					if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) 
								&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false))  
								&& (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
									 <source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
									Your browser does not support the video tag.
									</video><br><br><hr>";

								}

			    			}
						}

						else if ($countsearchterms == 7) {
							while (($file = readdir($open)) !== false){
								$fileoriginal= $file;
								$file= strtolower($file);
								$file= str_replace("-", " ", $file);
								$file= str_replace("_", " ", $file);
								$position= strpos("$file", ".");
								$fileextension= substr($file, $position + 1);
								$fileextension= strtolower($fileextension);
								$file= substr($file, 0, $position);
				

			    				if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) 
								&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false))  
								&& (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm")))
								{
									$file= ucwords($file);
									$array[] += "$file";
									 echo "<p id='para6'>$file</p>";
									 echo "<video style='width: 940px; height: 470px;' controls>
									 <source src='/2.Videos/$fileoriginal' type='video/$fileextension'>
									Your browser does not support the video tag.
									</video><br><br><hr>";

								}
			    			}
						}

					closedir($open);
		    		}
			    }

				$arraycount= count($array);

				if ($arraycount == 0)
				{
					echo "No results found.";
				}
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>MovieFlix : The World of Entertainment</title>
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
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<nav class="topnav">
			<a href="0.index.php" style="font-family: miriam libre;font-size: 25px;">&nbsp;&nbsp;&nbsp;
			MovieFlix </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<div class="dropdown">
				<a class="dropbtn" href="" style="font-family: miriam libre;font-size: 17px;"> Movies </a>
				<div class="dropdown-content" style="min-width: 190px;">
					<a href="13.New Releases.php" style="font-size: 15px; color: white;">New Releases</a>
					<a href="14.all time favourites.php" style="font-size: 15px; color: white;">All Time Favourites</a>
					<a href="15.most watched.php" style="font-size: 15px; color: white;">Most Watched</a>
					<a href="16.top tv series.php" style="font-size: 15px; color: white;">Top TV Series</a>
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
				<a href="" style="font-family: miriam libre;font-size: 17px;"> MyFlix </a>
				<div class="dropdown-content">
					<a href="" style="font-size: 15px; color: white;">MyFlix Account</a>
				</div>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<div class="example">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			  		<input type="text" name="search" placeholder=" Search.." value="<?php echo($searchoriginal) ?>">
			  		<?php 
			  			if($submitbutton) { 
			  				if(empty($searchoriginal)) { 
			  					echo "<redtext>A search query must be entered</redtext>";
			  				} 
			  			} 
			  		?>
			  		<button type="submit" name="submit"><i class="fa fa-search"></i></button>
				</form>
			</div> 
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
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

	<h1 style="text-align: center;color: white;font-family: consolas;">Popular Movies & TV Shows</h1>

	<hr>
	<div>
		<p> <a href="13.New Releases.php">Free : New Releases</a> </p> 
		<div>
			<a href="3.black widow page.php" title="Black Widow | Official Trailer"><img src="1.Images/1.widow.png"></a>&nbsp;&nbsp;
			<a href="27.hitmans wifes boduguard.php" title="Hitman's Wifes Bodyguard - Official Trailer"><img src="1.Images/11.hitman2.png"></a>&nbsp;&nbsp;
			<a href="29.fast9.php" title="Fast9 - Official Trailer"><img src="1.Images/13.f92.png"></a>&nbsp;&nbsp;
			<a href="30.shang chi.php" title="Shang Chi - Official Trailer"><img src="1.Images/15.shang chi2.png"></a>&nbsp;&nbsp;
			<a href="28.riders of justice.php" title="Riders of Juxtice - Official Trailer"><img src="1.Images/12.riders2.png"></a>&nbsp;&nbsp;
			<a href="34.justice league.php" title="Zack Snyder's Justice League Official Trailer | 2020"><img src="1.Images/21.justice league2.png"></a>&nbsp;&nbsp;
			<a href="33.bridesmaids.php" title="Brutal Bridesmaids - Official Trailer | 2020"><img src="1.Images/18.bridesmaids2.png"></a>&nbsp;&nbsp;
			<a href="32.mainstream.php" title="Mainstream - Official Trailer"><img src="1.Images/17.mainstream2.png"></a>
			
		</div>
		<p style="text-align: right;"> <a href="13.New Releases.php" style="text-decoration: none;">  View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="14.all time favourites.php">Free : All Time Favourites</a> </p>
		<div>
			<a href="38.12 strong.php" title="12 Strong"><img src="1.Images/12 strong.jpg"></a>&nbsp;&nbsp;
			<a href="37.13 hours.php" title="13 Hours: The Secret Soldiers of Benghazi"><img src="1.Images/13 hours.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Blade Runner 2049"><img src="1.Images/blade runner.jpg"></a>&nbsp;&nbsp;
			<a href="39.batman begins.php" title="Batman Begins"><img src="1.Images/batman2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Avengers: Endgame"><img src="1.Images/endgame.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Ironman 3"><img src="1.Images/ironman3.jpg"></a>&nbsp;&nbsp;
			<a href="40.man of steel.php" title="Man of Steel"><img src="1.Images/man of steel.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Titanic"><img src="1.Images/titanic.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="14.all time favourites.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="15.most watched.php">Free : Most Watched </a> </p> 
		<div>
			<a href="" title="Transformer: The Last Knight"><img src="1.Images/transformer.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Troy"><img src="1.Images/troy.jpg"></a>&nbsp;&nbsp;
			<a href="" title="X-MEN : Apocalypse"><img src="1.Images/xmen1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Shape of Water"><img src="1.Images/shape of water.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Mission Impossible: Fallout"><img src="1.Images/mission fallout.jpg"></a>&nbsp;&nbsp;

			<a href="" title="La La Land"><img src="1.Images/la la land.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Justice League"><img src="1.Images/justice league.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Avengers: Endgame"><img src="1.Images/endgame.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="15.most watched.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="16.top tv series.php">Free : Top TV Series </a> </p>
		<div>
			<a href="" title="The Witcher: Season 1"><img src="1.Images/Witcher/1.witcher.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Queens Gambit: Season 1"><img src="1.Images/Witcher/queens gambit.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Frontier: Season 1"><img src="1.Images/Witcher/frontier.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Vikings: Season 1"><img src="1.Images/Witcher/vikings.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Marco Polo: Season 1"><img src="1.Images/Witcher/polo.jpg"></a>&nbsp;&nbsp;

			<a href="" title="Riverdale: Season 1"><img src="1.Images/Witcher/riverdale.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Cursed: Season 1"><img src="1.Images/Witcher/cursed.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Umbrella Academy: Season 1"><img src="1.Images/Witcher/umbrella academy.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="16.top tv series.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="17.action movies.php">Free : Action Movies </a> </p>
		<div>
			<a href="42.6 underground.php" title="6 Underground"><img src="1.Images/6 underground.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Transformer: The Last Knight"><img src="1.Images/transformer.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Gladiator"><img src="1.Images/gladiator.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Hercules"><img src="1.Images/hercules.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Godzilla vs Kong"><img src="1.Images/godzilla2.jpg"></a>&nbsp;&nbsp;

			<a href="" title="Bloodshot"><img src="1.Images/bloodshot.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Jumanji: The Next Level"><img src="1.Images/jumanji 2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Mission Impossible: Fallout"><img src="1.Images/mission fallout.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="17.action movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="18.drama and comedy.php">Free : Drama & Comedy </a> </p>
		<div>
			<a href="" title="The Titanic"><img src="1.Images/titanic.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Silver Linings"><img src="1.Images/silver linings.jpg"></a>&nbsp;&nbsp;
			<a href="" title="La La Land"><img src="1.Images/la la land.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Shape of Water"><img src="1.Images/shape of water.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Jumanji: The Next level"><img src="1.Images/jumanji 2.jpg"></a>&nbsp;&nbsp;

			<a href="" title="No Strings Attached"><img src="1.Images/no strings attached.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Carol"><img src="1.Images/carol.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Blue Valentine"><img src="1.Images/blue valentine.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="18.drama and comedy.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="19.disaster movies.php">Free : Disaster Movies </a> </p>
		<div>
			<a href="" title="Transformer: The Last Knight"><img src="1.Images/transformer.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Pacific Rim"><img src="1.Images/pacific rim.jpg"></a>&nbsp;&nbsp;
			<a href="" title="San Andreas"><img src="1.Images/san andreas.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Godzilla: King of the Monsters"><img src="1.Images/godzilla1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Heart of The Sea"><img src="1.Images/heart of the sea.jpg"></a>&nbsp;&nbsp;

			<a href="" title="Godzilla vs Kong"><img src="1.Images/godzilla2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Pacific Rim: Uprising"><img src="1.Images/pacific rim uprising.jpg"></a>&nbsp;&nbsp;
			<a href="" title="War of the World"><img src="1.Images/war of the world.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="19.disaster movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="20.monster attacks.php">Free : Monster Attacks </a> </p>
		<div>
			<a href="" title="The Meg"><img src="1.Images/meg.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Transformer: The Last Knight"><img src="1.Images/transformer.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Suicide Squad"><img src="1.Images/suicide squad.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Jumanji: The Next level"><img src="1.Images/jumanji 2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Godzilla vs Kong"><img src="1.Images/godzilla2.jpg"></a>&nbsp;&nbsp;

			<a href="" title="Pacific Rim: Uprising"><img src="1.Images/pacific rim uprising.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Kong Skull Island"><img src="1.Images/kong skull island.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Godzilla: King of the Monsters"><img src="1.Images/godzilla1.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="20.monster attacks.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="21.scifi movies.php">Free : Sci-fi & Aliens </a> </p>
		<div>
			<a href="" title="A L I E N"><img src="1.Images/alien.jpg"></a>&nbsp;&nbsp;
			<a href="41.aquaman.php" title="Aquaman"><img src="1.Images/aquaman.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Chaos Walking"><img src="1.Images/chaos walking.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Batman v Superman: Dawn of Justicew"><img src="1.Images/batman vs superman.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Thor"><img src="1.Images/thor.jpg"></a>&nbsp;&nbsp;

			<a href="" title="Man of Steel"><img src="1.Images/man of steel.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Interstellar"><img src="1.Images/interstellar.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Avengers: Endgame"><img src="1.Images/endgame.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="21.scifi movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="22.sword movies.php">Free : Sword and Vangeance </a> </p>
		<div>
			<a href="" title="Transporter"><img src="1.Images/transporter1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="X-Men 2"><img src="1.Images/xmen2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Troy"><img src="1.Images/troy.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Transporter Refueled"><img src="1.Images/transporter3.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Hercules"><img src="1.Images/hercules.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Man from U.N.C.L.E"><img src="1.Images/man from uncle.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Kong Skull Island"><img src="1.Images/kong skull island.jpg"></a>&nbsp;&nbsp;
			<a href="" title="X-Men 3"><img src="1.Images/xmen-3.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="22.sword movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="23.war movies.php">Free : War & Espionage </a> </p>
		<div>
			<a href="" title="Troy"><img src="1.Images/troy.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Transporter"><img src="1.Images/transporter1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="War of The World"><img src="1.Images/war of the world.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Gladiator"><img src="1.Images/gladiator.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Great Wall"><img src="1.Images/great wall.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Blade Runner 2049"><img src="1.Images/blade runner.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Batman: Dark Knight Rises"><img src="1.Images/batman3.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Mission Impossible: Fallout"><img src="1.Images/mission fallout.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="23.war movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="24.romance movies.php">Free : Extreme Romance </a> </p>
		<div>
			<a href="" title="Silver Linings"><img src="1.Images/silver linings.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Titanic"><img src="1.Images/titanic.jpg"></a>&nbsp;&nbsp;
			<a href="" title="La La Land"><img src="1.Images/la la land.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Shape of Water"><img src="1.Images/shape of water.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Carol"><img src="1.Images/carol.jpg"></a>&nbsp;&nbsp;
			<a href="" title="After"><img src="1.Images/after.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Blue Valentine"><img src="1.Images/blue valentine.jpg"></a>&nbsp;&nbsp;
			<a href="" title="No Strings Attached"><img src="1.Images/no strings attached.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="24.romance movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="25.horror movies.php">Free : Horror & Scary </a> </p>
		<div>
			<a href="" title="The Conjuring"><img src="1.Images/conjuring.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Conjuring 2"><img src="1.Images/conjuring 2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Conjuring 3"><img src="1.Images/conjuring 3.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Dawn of The Dead"><img src="1.Images/dawn of the dead.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Nun"><img src="1.Images/nun.jpg"></a>&nbsp;&nbsp;

			<a href="" title="IT Chapter 2"><img src="1.Images/it.jpg"></a>&nbsp;&nbsp;
			<a href="" title="The Mummy"><img src="1.Images/mummy.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Annabelle Creation"><img src="1.Images/annabelle.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="25.horror movies.php" style="text-decoration: none;"> View all </a> </p>
		
	</div><hr>

	<div>
		<p> <a href="26.award and nominated.php">Free : Award & Nomination </a> </p>
		<div>
			<a href="" title="Oscar 2019"><img src="1.Images/oscar 2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Oscar 2020"><img src="1.Images/oscar 1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Emmy Award 2018"><img src="1.Images/emmy 1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Emmy Award 2019"><img src="1.Images/emmy 2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Emmy Award 2020"><img src="1.Images/emmy 3.jpg"></a>&nbsp;&nbsp;

			<a href="" title="Bafta Award 2020"><img src="1.Images/bafta 1.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Oscar 2021"><img src="1.Images/oscar 2.jpg"></a>&nbsp;&nbsp;
			<a href="" title="Emmy Award 2021"><img src="1.Images/emmy 2.jpg"></a>
		</div>
		<p style="text-align: right;"> <a href="26.award and nominated.php" style="text-decoration: none;"> View all </a> </p>
	</div>

	<hr>
	<br> <br> <br>

	<div>
		<table style=" width: 80%;">
			<tr>
				<td> Watch </td>
				<td> MyFlix Account </td>
				<td> Features </td>
				<td> Help </td>
			</tr>
			<tr>
				<td style="font-size: 13px;"> <a href="">SpotLight</a> </td>
				<td style="font-size: 13px;"> <a href="">MyFlix</a> </td>
				<td style="font-size: 13px;"> <a href="">Lists</a> </td>
				<td style="font-size: 13px;"> <a href="">About Us</a> </td>
			</tr>
			<tr>
				<td style="font-size: 13px;"> <a href="13.New Releases.php">Movies</a> </td>
				<td style="font-size: 13px;"> <a href="">Account</a> </td>
				<td style="font-size: 13px;"> <a href="">Family</a> </td>
				<td style="font-size: 13px;"> <a href="">Devices</a> </td>
			</tr>
			<tr>
				<td style="font-size: 13px;"> <a href="16.top tv series.php">TV</a> </td>
				<td style="font-size: 13px;"> <a href="">Settings</a> </td>
				<td style="font-size: 13px;"> <a href="">Movies Anywhere</a> </td>
				<td style="font-size: 13px;"> <a href="">Contact Us</a></td>
			</tr>
		</table>
	</div><br><br>

	<p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">MovieFlix</span></p>


</body>
</html>
