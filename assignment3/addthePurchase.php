<?php
 include 'connectToDB.php';
 $customerID = $_POST["customerID"];
 $quantity = $_POST["quantity"];
 $productID = $_POST["productID"];

 $query = 'SELECT * FROM purchase WHERE customerID=' . $customerID . ' AND productID = ' . $productID .';';
 $result = mysqli_query($connection,$query);
if(!$connection){
	die("Error while trying to select purchases ". mysqli_error($connection));
}
if($row=mysqli_fetch_assoc($result)){
	$update='Update purchase set quantity = '. ($row[quantity]+$quantity) .' Where customerID=' . $customerID . ' AND productID=' . $productID . ';';
	if(!mysqli_query($connection,$update)){
		die($update ." error while trying to update a purchase ". mysqli_error($connection));
	}
	else{
		header('Location: welcome.php');
		mysqli_close($connection);
		exit;
	}

}else{
	 $insert= 'INSERT INTO purchase VALUES (' .
	$customerID .',' . $productID . ',' . $quantity . ');';
	 if (!mysqli_query($connection,$insert)){
		 die ($insert." Error while trying to add new purchase". mysqli_error($connection));
	 } else {
		 header('Location: welcome.php'); //send back to welcome page once it is done
		mysqli_close($connection);
	 	exit;
	 }
}
?>
