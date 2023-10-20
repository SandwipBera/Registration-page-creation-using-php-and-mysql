<?php
$servername="localhost";
$username="root";
$password="";
$database="sandwip";
$conn=new mysqli($servername,$username,$password,$database);
if(!$conn){
die("error".mysqli_error($conn));
}
else{
 //echo("connected");
}
?>