<?php
$name=$_POST['name1'];
$user=$_POST['username1'];
$pswrd=$_POST['password1'];
$email=$_POST['email1'];
$mysql=mysqli_connect("localhost","root","","kalpit");
$mysql1=mysqli_query($mysql,"INSERT INTO techno (Username,Password,Name,Email)
VALUES ('$user','$pswrd','$name','$email')");
if($mysqli)

{
header("location:index.html");
}
?>