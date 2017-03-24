<?php
// CONEXIUNE DB

$con=mysqli_connect("localhost","homestead","secret","test");

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

} else {

	// CONEXIUNEA MERGE

//die(var_dump($_POST["email"]));
//die(var_dump($_FILES["pic"]));
//die(var_dump($_POST["html"]));
//die(var_dump($_POST["css"]));
//die(var_dump($_POST["php"]));
//die(var_dump($_POST["js"]));

if( isset( $_POST["name"]))
{
	$name = $_POST["name"];
	if(strlen($name) == 0)
		die("Name is required");
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
		die("Only letters and spaces allowed");
}
else
{
	die("Name is required");
}


if( isset( $_POST["email"]))
{
	$email = $_POST["email"];
	if(strlen($email) == 0)
	{
		die("Email is required");
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		die("Invalid email");
	}
}
else
{
	die("Email is required");
}

if( isset($_FILES["pic"]))
{
	if($_FILES["pic"]["size"] == 0)
		die("Picture is required");
	$picName = $_FILES["pic"]["name"];

	$allowedType = array("jpeg", "gif", "png");
	$fileParts = explode('.',$_FILES['pic']['name']);
	$fileExt = $fileParts[count($fileParts)-1];
	if(!in_array($fileExt, $allowedType))
	{
		die("Only jpeg, gif and png images allowed");
	}
    move_uploaded_file($_FILES["pic"]["tmp_name"],"pictures/".$picName);
}
else
{
	die("File not found");
}
if( isset($_POST["html"]))
{
	$html = $_POST["html"];
	if($html < 1 || $html > 10)
	{
		die("HTML skill between 1 and 10");
	}
}
else
{
	die("HTML skill is required");
}
if( isset($_POST["php"]))
{
	$php = $_POST["php"];
	if($php < 1 || $php > 10)
	{
		die("PHP skill between 1 and 10");
	}
}
else
{
	die("PHP skill required");
}
if( isset($_POST["css"]))
{
	$css = $_POST["css"];
	if($css < 1 || $css > 10)
	{
		die("CSS skill between 1 and 10");
	}
}
else
{
	die("CSS skill required");
}
if( isset($_POST["js"]))
{
	$js = $_POST["js"];
	if($js < 1 || $js > 10)
	{
		die("JS skill between 1 and 10");
	}
}
else
{
	die("JS skill required");
}


  $insert = "INSERT INTO theTable (nume, email, picture, html, css, php, js) VALUES ('$name', '$email', '$picName', $html, $css, $php, $js)";
  if(mysqli_query($con, $insert))
  {
  	echo "Registration succesful";
  }
  else
  {
  	die("Database error");
  }

}

?>
