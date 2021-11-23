<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

//Connecting to Database
$host ="localhost";
$user = "root";
$pass ="";
$db = 'mydb';

//Creating a connection object
$conn = mysqli_connect($host, $user, $pass, $db);
echo "<br>";

if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "Connection was successful";

// Taking values from the form
$ID = $_REQUEST['ID'];
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];


// Insert query execution
$sql = "INSERT INTO scoretb VALUES('$ID','$name','$password')";

if(mysqli_query($conn, $sql)){
  echo "Added successfully";

  echo "\n$ID\n.$name\n.$password\n";
}
else {
  echo "Error".mysqli_error($conn);
}
  //close connection
  mysqli_close($conn);

  ?>
  </body>
  </html>
