//First block of PHP code
<?php

$search= $_POST['search_entered'];

$searchoriginal= $search;

$search= strtolower($search);

$search= trim($search);


$search= explode(" ", $search);

$countsearchterms= count($search);


$submitbutton= $_POST['submit'];

?>


//HTML code
<form action="" method="POST">
Enter Search Query: <input type="text" name="search_entered" value='<?php echo $searchoriginal;?>'/><?php if($submitbutton) { if(empty($searchoriginal)) { echo "<redtext>A search 
query must be entered</redtext>"; } } ?> <br><br>
<input type="submit" name="submit" value="Search"/><br><br>
</form>



//Second block of PHP code
<?php

$directory = "Datasheets/";


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
	$position= strpos($file, ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	
      if ((strpos("$file",  "$search[0]") !== false) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
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
	
      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false)) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
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
	
      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
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
	
      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& 
(strpos("$file",  "$search[3]") !== false)) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
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
	
      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false)) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
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
	
      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false)) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
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
	
      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false)) && ($fileextension == "pdf"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
}  
}
closedir($open);
    }

  }//while loop

$arraycount= count($array);

if ($arraycount == 0)
{
echo "No results for this search entered";
}
}
}
?>