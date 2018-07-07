<?php

$username=$_POST['username'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];
$email=$_POST['email'];
$confirmemail=$_POST['confirmemail'];
$contact=$_POST['contact'];

echo "Username: " . $username;
echo "<br>";
echo "Password: " . $password;
echo "<br>";
echo"Confirm Password: " .$confirmpass;
echo "<br>";
echo"Email Address: " .$email;	
echo "<br>";
echo"Confirm Email Address: " .$confirmemail;
echo "<br>";
echo"Contact: " .$contact;
echo "<br>";

?>