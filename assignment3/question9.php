<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="question9.js"></script>
<?php include "connectToDB.php" ?>
<h1>Total earning</h1>
Select your product:
<form action="" method="post">
<select name="pickaProduct" id="pickaProduct">
  <option value="1">Select Here</option>
<?php include "getProduct.php"; ?>
</select>
</form>
<hr>
<?php  if(isset($_POST['pickaProduct'])){
include "connectToDB.php"; 
 include "getProductQuantity.php";
} ?>
<?php include "backButton.php"; ?>
<hr>
</body>
</html>

