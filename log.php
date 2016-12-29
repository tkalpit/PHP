<?php
$user1=$_POST['uname'];
$pass=$_POST['pswrd2'];
$mysql=mysqli_connect("localhost","root","","kalpit");
if($mysql)
{
$sql=mysqli_query($mysql,"Select * from techno");
while($row=mysqli_fetch_array($sql))
{
if($row['Username']==$user1 && $row['Password']==$pass)
{
header("location:second.html");
}

}
}
?>