<?php
 include 'connectToDB.php';
 $firstname = $_POST["firstName"];
 $lastname = $_POST["lastName"];
 $city = $_POST["city"];
 $phoneNumber=$_POST["phoneNumber"];

 $query = 'SELECT max(customerID) as max FROM customer;';
 $result = mysqli_query($connection,$query);
if(!$connection){
	die("Error while trying to find customer to add". mysqli_error($connection));
 }
 $row = mysqli_fetch_assoc($result);
 $addNew='INSERT INTO customer VALUES(' . ($row['max']+1) . ',"'
	. $firstname . '","' . $lastname . '","' . $city . '",' 
	. $phoneNumber . ',null);' ;
  if(!mysqli_query($connection,$addNew)){
	die($addNew." error while trying to add a customer". mysqli_error($connection));
 }
 else{
 	header('Location: welcome.php');
 mysqli_close($connection);
 exit;
 }
?>
