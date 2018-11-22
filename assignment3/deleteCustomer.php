<?php
 include 'connectToDB.php';
 $customerID = $_POST["customerID"];

if(!$connection){
	die("Error while trying to select purchases ". mysqli_error($connection));
}
$deletePurchase='delete from purchase where customerID='.$customerID.';';
mysqli_query($connection,$deletePurchase);

$update='Delete from customer Where customerID=' . $customerID . ';';
if(!mysqli_query($connection,$update)){
	die($update ." error while trying to update a purchase ". mysqli_error($connection));
	}
	else{
	header("Location:question6.php");
	mysqli_close($connection);
	exit;
	}


?>
