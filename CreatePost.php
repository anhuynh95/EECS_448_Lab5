<?php
	$userid = $_POST['username'];
	$content = $_POST['post'];
	$mysqli = new mysqli("mysql.eecs.ku.edu", "a054h720", "Gameover1.", "a054h720");

	if($mysqli->connect_error){
	    die("Connection failed: " . $mysqli->connect_error);
	    }
	
		$i_query = "SELECT user_id FROM Users WHERE user_id = '$userid'"; 
		$check = $mysqli->query($i_query);
		$row = $check->fetch_assoc();
		$result = $row[user_id];
	  	$c_query = "INSERT INTO Posts (author_id, content) VALUES ('$userid', '$content')";
		if(!empty($result)){
			if($mysqli->query($c_query) == TRUE){
            echo "Your Post Was Created <br>";
          	}
        	else{
            echo "Your Post Was Not Created <br>";
        	}
		}
		else{
		    echo  "There Is No User Name: ".$userid."<br>";
		}
	
	  
	$mysqli->close();
	echo '<a href="https://people.eecs.ku.edu/~a054h720/">Return To Index</a>';
?>