<!DOCTYPE html>
<html>
<head>
        <title>Assignment 3</title>
        <link rel="stylesheet" type="text/css" href="museum.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<body>
<?php
      //connect to the database
          include "connectToDB.php";
?>
<h1> Add A Purchase into a customer</h1>
<form action="" method="post" >
   show me customers who bought more than:
  <input type="number" min="1" name="quantity"  value="1"><br>
  <input type="submit" value="show">
  <hr>
</form>
<?php if(isset($_POST["quantity"])){
include "showCustomerQuantity.php";
}?>
<?php include "backButton.php"?>
</body>
</html>


