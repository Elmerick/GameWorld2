<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school";

//create connection
$conn= new mysqli($servername, $username, $password,$dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT naam,leeftijd,geslacht FROM studenten";
$result = $conn->query($sql);

if ($result ->num_rows > 0) {
  //output data. of each num_rows
  while($row = $result -> fetch_assoc()){
    echo "naam: " . $row{"naam"}. "- name: ". $row{"leeftijd"}. " ".$row {"geslacht"}. "
    <br>";
  }
}else{
  echo "0 results";
}


$conn->close();

?>
