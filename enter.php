<?php
	
	require_once 'connect.php';

		if(!empty($_POST['inv_number'])  &&
		   !empty($_POST['motherboard']) &&
		   !empty($_POST['ram']) 		 &&
		   !empty($_POST['video']) 		 &&
		   !empty($_POST['cpu']))
		{
			if(preg_match('/^[0-9]+$/', $_POST['inv_number']) &&
			   preg_match('/^[0-9]+$/', $_POST['ram']))
			{
	
				$inv_number = $_POST['inv_number'];
				$inv_number = mysqli_real_escape_string($mysqli, $inv_number);

				$motherboard = $_POST['motherboard'];
				$motherboard = mysqli_real_escape_string($mysqli, $motherboard);

				$ram = $_POST['ram'];
				$ram  = mysqli_real_escape_string($mysqli, $ram);

				$video = $_POST['video'];
				$video  = mysqli_real_escape_string($mysqli, $video);

				$cpu = $_POST['cpu'];
				$cpu  = mysqli_real_escape_string($mysqli, $cpu);

				$hdd = $_POST['hdd'];
				$hdd  = mysqli_real_escape_string($mysqli, $hdd);

				$result_set = $mysqli->query("INSERT INTO components_tab (inv_number, motherboard, ram, video, cpu) 
										  VALUES('$inv_number', '$motherboard', '$ram', '$video', '$cpu')");

        		$com_id = $mysqli->query("SELECT com_id 
								  	  FROM components_tab  
								  	  ORDER BY com_id 
								  	  DESC LIMIT 1");
	 
				$row = $com_id->fetch_assoc();
       			$com_id= $row["com_id"];
       

        		$result= $mysqli->query("INSERT INTO hdd_tab (hdd, com_id) 
								 	 VALUES('$hdd', '$com_id')");
        	}	
	}		
		
	require_once 'index.html';
?>