<?php
include "reg.php";
include "conn.php";
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$sql="insert into `student` (`name`, `email`,`password`,`address`,`phno`) values(' $name', '$email','$pwd','$address','$phno')";
// $sql="insert into 'student'('name','gmail') values('$name','$gmail')";
if (mysqli_query($conn,$sql)){
// echo "successfully";
}
else{
echo "error".$sql.mysqli_error($conn);
}
mysqli_close($conn);
}
?>