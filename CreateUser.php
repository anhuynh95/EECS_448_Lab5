<?php
$u_id = $_POST['username'];
$content = $_POST['reg_user'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "a054h720", "Gameover1.", "a054h720");

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
    }
  $query = "INSERT INTO Users (user_id) VALUES ('$u_id')";
  if($mysqli->query($query) === TRUE){
      echo "New record created successfully";
  }
  else{
        echo "Error: the username, " . $u_id . ", is already in use";
  }
$mysqli->close();
?>