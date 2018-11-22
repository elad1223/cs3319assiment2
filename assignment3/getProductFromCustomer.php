<?php
 $whichMus = $_POST["pickaCustomer"]; //get selected customer value from the form
 $query = 'SELECT description , purchase.quantity FROM purchase,product WHERE product.productID = purchase.productID and purchase.customerID = ' . $whichMus . ';'; //get the purchase from the customerID
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die;
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while($row = mysqli_fetch_assoc($result)) {
 echo "<li>";
 echo $row["description"] . " amount: " . $row["quantity"]; 
 echo "</li>";
 }
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
 mysqli_close($connection);
?>
