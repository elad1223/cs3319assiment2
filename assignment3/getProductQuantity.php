<?php
 $whichMus = $_POST["pickaProduct"]; //get selected customer value from the form
 $query = 'SELECT description,SUM(cost*product.quantity) as total FROM purchase,product WHERE product.productID = purchase.productID and purchase.productID = ' . $whichMus . ' ;'; //get the purchase from the customerID
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die;
 }
 echo "<ul>";
 while($row = mysqli_fetch_assoc($result)) {
 echo "<li>";
 if($row["total"]=="")
 {$row["total"]="0";}
 echo $row["description"] . " gain that amount  " . $row["total"]; 
 echo "</li>";

 }
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
 mysqli_close($connection);
?>
