<?php 

//Connect to database
	include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

//Fetch HTML form details
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];

$sql = "INSERT INTO contactform (name, phone, message) VALUES ('$name','$phone', '$message')";  		

if(!mysql_query($sql))
{
	echo mysql_error();
}

else{
	echo 'uploaded';
}

mysql_close();







 ?>