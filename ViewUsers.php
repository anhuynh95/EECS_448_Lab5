<?php
//style
  echo " <style>
    tr:nth-child(even){background-color: green}
    tr:nth-child(odd){background-color: blue}
  </style>";
//start
  echo "<html>
    <h2>User Table<br></h2>";
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a054h720", "Gameover1.", "a054h720");

  if($mysqli->connect_error){
      die("Connection failed: " . $mysqli->connect_error);
      }
  $c_query = "SELECT user_id FROM Users ORDER by user_id";

//print table
  echo "<table>";
  //
  if ($check = $mysqli->query($c_query)) {
      
      echo"<tr>Username:</tr>";
      while ($row = $check->fetch_assoc()) {
          echo "<tr> 
            <td> $row[user_id] </td> 
          </tr>";
      }
      echo "</table>";
      echo "</html>";
      
      $check->free();
  }
  else
  {
    echo "Your Database is Empty";
  }
  /* close connection */
  $mysqli->close();
  echo '<a href="https://people.eecs.ku.edu/~a054h720/">Return To Index</a>';
 ?>