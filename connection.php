
<?php

	$db_hostname = 'localhost';
	$db_database = 'task_manager';
	$db_username = 'root';
	$db_password = '';
	
	$mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_database);
	$mysqli->query ("SET NAMES 'utf8'");
	if(!$mysqli) die("Невозможно подключиться к MySQL: ");
?>