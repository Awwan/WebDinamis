<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,"webdata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO 'userinfodata'('user','email','message') VALUES ('$user','$email','$message')";

mysqli_query($con,$query);

echo "MESSAGE IS SENT"; 

?>