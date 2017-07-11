
<?php 
	
	require_once 'connection.php';
	
	if(isset($_POST['delete']) && isset($_POST['id']))
		{
			$id = $_POST['id'];
			$result_set = $mysqli->query("DELETE FROM task WHERE id='$id' ");
			
		}	
	require_once 'form.php';
 
?>
