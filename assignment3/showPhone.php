<?php
 include 'connectToDB.php';
 $whichMus = $_POST["pickaCustomer"]; //get selected customer value from the form
 $query = 'SELECT phoneNumber FROM customer WHERE customerID = ' . $whichMus . ';'; //get the purchase from the customerID
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die;
 }
 $row = mysqli_fetch_assoc($result);
 echo 'The phone is: ' . $row["phoneNumber"].'<br>'; 
 echo '<input type="hidden" name="customerID" value="'.$whichMus.'">';
 
 mysqli_free_result($result);
 mysqli_close($connection);
?>
