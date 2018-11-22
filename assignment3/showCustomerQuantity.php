<?php
 include 'connectToDB.php';
 $quantity = $_POST["quantity"];

 $query = 'SELECT firstname,lastname,description,purchase.quantity as 
quantity FROM purchase,customer,product WHERE product.productID = 
purchase.productID AND customer.customerID=purchase.customerID 
HAVING(quantity)>'.($quantity-1).';';
 $result = mysqli_query($connection,$query);
if(!$connection){
	die("Error while trying to select  purchases ". mysqli_error($connection));
}
echo "<ul>";
while($row=mysqli_fetch_assoc($result)){
	echo "<li>";
	echo $row["firstname"].' '.$row["lastname"] .
	 ' bought '.$row["description"].' in amount of '. $row["quantity"];
	echo "</li>";
}
echo "</ul>";
?>
