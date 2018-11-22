<?php
 $query = "select * from customer order by lastname;";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
 echo "<br>" . $row["firstname"] ." ". $row["lastname"] . " from  " . $row["city"] . ", phone number: " . $row["phoneNumber"] ."</br>";
 }
 mysqli_free_result($result);
?>
