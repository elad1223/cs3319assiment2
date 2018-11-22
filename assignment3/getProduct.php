<?php
 $query = "select * from product";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
 echo "<option value=" . "'" . $row["productID"] . "'>";
 echo $row["description"] .  "<br>";
 echo "</option>";
 }
 mysqli_free_result($result);
 mysqli_close($connection);
?>
