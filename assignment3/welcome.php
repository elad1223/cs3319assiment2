<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="museum.js"></script>
<?php include "connectToDB.php" ?>
<h1>Assignment 3 CS3319 </h1>
<hr>
<form action="question1.php" method="post">
Question 1:
<input type="submit" value="customer view">
</form>

<hr>
<form action="question2.php" method="post">
Question 2:
<input type="submit" value="product view">
</form>

<hr>
<form action="question3.php" method="post">
Question 3:
<input type="submit" value="Add a Purchase">
</form>

<hr>
<form action="question4.php" method="post">
Question 4:
<input type="submit" value="Add a new customer">
</form>

<hr>
<form action="question5.php" method="post">
Question 5:
<input type="submit" value="update phone number">
</form>

<hr>
<form action="question6.php" method="post">
Question 6:
<input type="submit" value="Delete customer">
</form>

<hr>
<form action="question7.php" method="post">
Question 7: list customer bought more than given quantity
<input type="submit" value="list customers">
</form>

<hr>
<form action="question8.php" method="post">
Question 8: product that never being bought
<input type="submit" value="never bought products">
</form>

<hr>
<form action="question9.php" method="post">
Question 9: money made by product
<input type="submit" value="total money by product">
</form>

<hr>
</body>
</html>

