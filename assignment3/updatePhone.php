<?php
 include 'connectToDB.php';
 $newPhone = $_POST["phone"];
 $customerID = $_POST["customerID"];

if(!$connection){
	die("Error while trying to select purchases ". mysqli_error($connection));
}
$update='Update customer set phoneNumber = '. $newPhone .' Where customerID=' . $customerID . ';';
if(!mysqli_query($connection,$update)){
	die($update ." error while trying to update a purchase ". mysqli_error($connection));
	}
	else{
	header("Location:question5.php");
	mysqli_close($connection);
	exit;
	}


?>
