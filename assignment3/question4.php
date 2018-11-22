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
<h1> Add new customer</h1>
<form action="addtheCustomer.php" method="post" >
   First name : <input type="text" name='firstName'>
   Last name : 
   <input type="text" name='lastName'><br>
   From what city: 
   <input type="text" name='city'><br>
   Phone Number: 
   <input type="tel" name="phoneNumber" minlength='7' maxlength='7'><br>
   
        <br>
  <input type="submit" value="Click here to add new Customer">
  <hr>
  

</form>
<?php include "backButton.php"?>
</body>
</html>


