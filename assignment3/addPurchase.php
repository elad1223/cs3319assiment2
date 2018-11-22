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
<form action="addthePurchase.php" method="post" >
   which product you want to by <select name="productID">
<?php
	include "getProduct.php"; ?></select><br>
 
   how much: <input type="number" min="1" name="quantity"  value="1"><br>
   Which customer will buy it: <select name="customerID">
<?php
    //get all the customer names
        include "getCustomer.php"
        ?>
        </select>
        <br><br>
  <input type="submit" value="Click here to add new purchase">
  <hr>
  

</form>
</body>
</html>


