<?php
	
	require_once 'connection.php';

	if (isset($_POST['id'])	      &&
		isset($_POST['title'])    &&
		isset($_POST['priority']) && 
		isset($_POST['state'])    &&
		isset($_POST['deadline']))
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$priority = $_POST['priority'];
		$state = $_POST['state'];
		$deadline = $_POST['deadline'];
		$today = date("Y-m-d");

		if(strtotime($deadline) >= strtotime($today))
		{
			$result_set = $mysqli->query("UPDATE task SET title='$title', priority='$priority' , state='$state', deadline='$deadline' WHERE id='$id'");

		}

	}
	require_once 'form.php';
?>
