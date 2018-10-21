<?php
//style
  echo " <style>
    tr:nth-child(even){background-color: green}
    tr:nth-child(odd){background-color: blue}
  </style>";
//start
  $postid = $_POST['postdel'];

  echo "<html>
    <h2>You Have Deleted: <br></h2>";

  $mysqli = new mysqli("mysql.eecs.ku.edu", "a054h720", "Gameover1.", "a054h720");

  if($mysqli->connect_error){
      die("Connection failed: " . $mysqli->connect_error);
      }

  if(!empty($postid)) {
    echo "<table>";
     echo"<tr>Post ID Are:</tr><br>";
    foreach($postid as $id) {
      $c_query = "SELECT post_id FROM Posts WHERE post_id = '$id'";
      //print table
      
      if ($check = $mysqli->query($c_query)) {
      
       
        while ($row = $check->fetch_assoc()) {
           
            $sql = "DELETE FROM Posts WHERE post_id='$id'";
            if ($mysqli->query($sql) === TRUE) {
              echo "<tr> 
              <td> $row[post_id] Deleted</td> 
              </tr>";
             } 
            else {
              echo "<tr> 
              <td> $row[post_id] is NOT Deleted</td> 
              </tr>";
            }
        }
       
      }
  /* close connection */
     
    }
    echo "</table>";
   
    
}
  echo "</html>";
  echo '<a href="https://people.eecs.ku.edu/~a054h720/">Return To Index</a>';
  $mysqli->close();
 ?>