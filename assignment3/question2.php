<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<body>
<script src="question2.js"></script>
<h1>Product View</h1>

<form action="" method="post">

<input name='orderby' type='radio' value='description'>description
<input name='orderby' type='radio' value='cost'>price<br>

<input name='AtoZ' type='radio' value='ASC'>ascending
<input name='AtoZ' type='radio' value='DESC'>descending<br>

</form>

<hr>
View products: 
<?php
  if(isset($_POST["orderby"])){
  include "connectToDB.php";
  include "allProductInfo.php"; 
  
}
?>

<?php include "backButton.php"?>
<hr>
</body>
</html>

