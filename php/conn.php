<?php 

	$username = 'u722911329_user';
	$pass = 'clandestine1996';
	$dbname = 'u722911329_form';
	$host = 'mysql.hostinger.in';

	$db = @mysql_connect($host, $username, $pass);

	if(!$db){
		 die('failed to connect' . mysql_error());
	}

	$db_selected = @mysql_select_db($dbname, $db);


 ?>