<?php
 include 'connectToDB.php';
 $customerID = $_POST["customerID"];
 $quantity = $_POST["number"];
 $productID = $_POST["productID"];

$query= 'SELECT * FROM purchase WHERE customerID=' . $customerID . ' AND productID = ' . $productID .';'
if(!mysqli_query($connection,$query)){
	die("Error while trying to add new purchase". mysqli_error($connection));
}
if($row=mysqli_fetch_assoc($query)){
	$update='Update table purchase set quantity = '. ($row[quantity]+$quantity) .' Where customerID='.$customerID . ' AND productID='.$productID . ';';
	if(!mysqli_query($connection,$query)){
		die("error while trying to update a purchase". mysqli_error($connection));
	}
	else{
		header('Location: welcome.php');
	exit;
	}

}else{
	 $insert= 'INSERT INTO purchase VALUES ("' .
	$customerID .'","' . $productID . '",' . $quantity . ');';
	 if (!mysqli_query($connection,$insert)) {

		 die ("Error while trying to add new purchase". mysqli_error($connection));
	 } else {
		 header('Location: welcome.php'); //send back to welcome page once it is done
	 exit;
	 }
}
?>
