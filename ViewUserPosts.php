<?php
//style
  echo " <style>
    tr:nth-child(even){background-color: green}
    tr:nth-child(odd){background-color: blue}
  </style>";
//start
  $userid = $_POST['select'];

  echo "<html>
    <h2>User Table<br></h2>";
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a054h720", "Gameover1.", "a054h720");

  if($mysqli->connect_error){
      die("Connection failed: " . $mysqli->connect_error);
      }
  $c_query = "SELECT content FROM Posts WHERE author_id = '$userid'";
//print table
  echo "<table>";
  //
  if ($check = $mysqli->query($c_query)) {
      
      echo"<tr>Posts from $userid:</tr>";
      while ($row = $check->fetch_assoc()) {
          echo "<tr> 
            <td> $row[content] </td> 
          </tr>";
      }
      echo "</table>";
      echo "</html>";
      
      $check->free();
  }
  /* close connection */
  $mysqli->close();
  echo '<a href="https://people.eecs.ku.edu/~a054h720/">Return To Index</a>';
 ?>