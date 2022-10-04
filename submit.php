<?php
sleep(3);
include('db.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$age=$_POST['age'];

$sql="INSERT INTO registration(firstname,lastname,gender,email,mobile,age) values('$fname','$lname','$gender','$email','$mobile','$age')";
$stmt=$con->prepare($sql);
$stmt->execute();
?>