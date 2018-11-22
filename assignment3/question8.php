<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<h1>Product who havent been purchased</h1>
Those products havent been purchase:
<?php 
include "connectToDB.php";
$query='Select description,quantity from product where productID NOT IN (Select productID from purchase)';
$result=mysqli_query($connection,$query);
echo "<ul>";
while($row=mysqli_fetch_assoc($result)){
echo "<li>";
echo $row["description"] . " left with amount of " . $row["quantity"];
echo "</li>";
}
echo "</ul>";
 ?>

<?php include "backButton.php"; ?>
<hr>
</body>
</html>

