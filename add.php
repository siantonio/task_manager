<?php
	
	require_once 'connection.php';
	
	if (isset($_POST['title'])	  &&
		isset($_POST['priority']) &&
		isset($_POST['state'])    &&
		isset($_POST['deadline']))
	{
		$title = $_POST['title'];
		$priority = $_POST['priority'];
		$state = $_POST['state'];
		$deadline = $_POST['deadline'];
		$today = date("Y-m-d");

		if(strtotime($deadline) >= strtotime($today)) 
		{
			$result_set = $mysqli->query("INSERT INTO task (title, priority, state, deadline) 
		 	VALUES('$title', '$priority', '$state', '$deadline')");
		}

	}
	require_once 'form.php';
?>