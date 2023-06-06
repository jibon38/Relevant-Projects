//First block of PHP Code
<?php

$search= $_POST['search'];    				// 'search' is the name of input box for search.

$searchoriginal= $search;

$search= strtolower($search);

$search= trim($search);

$search= explode(" ", $search);

$countsearchterms= count($search);

$submitbutton= $_POST['submit'];			// 'submit' is the name of the submit button

?>



//HTML code
<form action="#result" method="POST">
	<input type="text" name="search" value='<?php echo $searchoriginal;?>'/>
	<?php if($submitbutton) { if(empty($searchoriginal)) { echo "<redtext>A search query must be entered</redtext>"; } } ?> <br><br>
	<input type="submit" name="submit"><br><br>
</form>



//Second block of PHP code
<?php

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

		$arraycount= count($array);

		if ($arraycount == 0)
		{
			echo "No results found.";
		}
	}
}

?>