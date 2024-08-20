<?php
// Set the vars used for your DB connection, using new acct creds
// Replace the values with your values below
  $username="user";
  $password="password";
  $database="creditCard";
//Acquire the Cat's name from your html POST
  $name=$_POST['name'];
  $number=$_POST['number'];
//Establish MySQL connection called $mysqli
  $mysqli=new mysqli('localhost', $username, $password, $database);

//Define your query - pay close attention to ' and "!
  $query="INSERT INTO info (name, creditCardNumber) VALUES ('$name', '$number')";
//Run query - result is returned as a resource id
//If query has error, _LINE_ will print the error from mysql
  $result=$mysqli->query($query) or die($mysqli->error.__LINE__);
  echo "Thanks for your donation! It means a lot!"
//Resource id results must be interpreted
//This while loop will run thru the results row by row & echo name & birth fields
?>
