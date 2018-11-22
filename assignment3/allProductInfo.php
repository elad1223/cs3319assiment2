<?php
 $orderby=$_POST["orderby"];
 $query = 'select * from product order by ' . $orderby . ' ' . $_POST["AtoZ"]. ';';
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
 echo "<br>" . $row["description"] ." with price: ". $row["cost"] .  "</br>";
 }
 mysqli_free_result($result);
?>
