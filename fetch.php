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
$conn = mysqli_connect("localhost", "root", "", 'mydb');
echo "<br>";

if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "Data Fetched successfuly";
echo "<br>";
//echo "<script>console.log('Connection was successful')</script>";

// Fetching query execution
$query = "SELECT * FROM scoretb";
$result = $conn->query($query);

if($result->num_rows>0){
  while ($row = $result->fetch_assoc()){
      echo "<br> ID: ".$row["ID"]."- username:".$row["username"]. "<br>";
  }

}
else {
  echo "0 results";
}
  //close connection
  mysqli_close($conn);
?>
