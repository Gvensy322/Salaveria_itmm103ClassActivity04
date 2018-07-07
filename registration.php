<?php
session_start();
 
include('connection.php');
 
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];
$email=$_POST['email'];
$confirmemail=$_POST['confirmemail'];
$contact=$_POST['contact'];

 
mysqli_query($bd, "INSERT INTO member(username, password, confirmpass, email, confirmemail, contact)VALUES('$username', '$password', '$confirmpass', '$email', '$confirmemail', '$contact)");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>