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
Select your customer:
<form action="" method="post">
<select name="pickaCustomer" id="pickaCustomer">
  <option value="1">Select Here</option>
<?php include "getCustomer.php"; ?>
</select>
</form>
<hr>
<?php  if(isset($_POST['pickaCustomer'])){
 echo '<form action="updatePhone.php" method="post">';
 include 'showPhone.php';
 echo '<input type="tel" minlength="7" maxlength="7" name="phone" value="0000000">'.
	'<br><input type="submit" value="Update phone"></form>';
} ?>
<hr>
<?php include "backButton.php"?>
</body>
</html>

