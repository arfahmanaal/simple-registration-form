<?php
//Establish database connection
$conn=new mysqli("localhost","root","","registration");
//check connection
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
//get form data
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
//insert data into the database
$sql= "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password');";
if($conn->query($sql)==TRUE){
    echo "Registration Succesful!";
} else {
    echo "Error".$sql."<br>".$conn->error;
}
//close database connection
$conn->close();
?>
