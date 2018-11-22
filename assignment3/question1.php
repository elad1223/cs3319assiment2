<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="question1.js"></script>
<?php include "connectToDB.php" ?>
<h1>Customer View</h1>
<?php include "allCustomerInfo.php"; ?>
<br><br>
Select your customer:
<form action="" method="post">
<select name="pickaCustomer" id="pickaCustomer">
  <option value="1">Select Here</option>
<?php include "getCustomer.php"; ?>
</select>
</form>
<hr>
<?php  if(isset($_POST['pickaCustomer'])){
include "connectToDB.php"; 
 include "getProductFromCustomer.php";
} ?>
<?php include "backButton.php"; ?>
<hr>
</body>
</html>

