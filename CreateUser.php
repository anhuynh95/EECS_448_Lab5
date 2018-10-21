<?php
	$u_id = $_POST['username'];
	$mysqli = new mysqli("mysql.eecs.ku.edu", "a054h720", "Gameover1.", "a054h720");

	if($mysqli->connect_error){
	    die("Connection failed: " . $mysqli->connect_error);
	    }

	else{
		$query = "INSERT INTO Users (user_id) VALUES ('$u_id')";
	  if($mysqli->query($query) === TRUE){
	      echo "New User Has Been Created";
	  }
	  else{
	        echo  $u_id . " Is Already in Use";
	  }
	}
	  
	$mysqli->close();
?>