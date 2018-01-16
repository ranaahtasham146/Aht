<?php
$servername="127.0.0.1";
$username="root";
$password="ranaahtasham"
$dbname="my_db2";
$uN=$_POST["uName"];
#echo $uN;
$ssn=$_POST["pswd"];
#echo $ssn; 
// Create connection 
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection if ($conn->connect_error) {     
  die("Connection failed: " . $conn->connect_error);
 } 
else 
{ #echo "Connected successfully";
$result = $conn->query("SELECT ssn, fName, Dno FROM EMPLOYEE where fname='". $uN."' and ssn=".$ssn);  
#$result = $conn->query("SELECT ssn, fName, Dno FROM EMPLOYEE where fname='Alex' and ssn=444444400");
 if ($result->num_rows > 0) {     // output data of each row     echo '<br> You have been login sucessfully';             #echo "<script> window.location.assign('index.html'); </script>";     } else {     echo "Username or SSN is incorrect. <a href='index.html'>Login In Again</a>"; }
}
?>