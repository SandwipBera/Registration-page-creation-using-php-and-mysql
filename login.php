<?php
require "conn.php";
if(isset($_POST["submit"])){
    $email=$_POST["useremail"];
    $pwd=$_POST["userpwd"];
    $result=mysqli_query($conn,"select * from `student` where email='$email'");
    $row=mysqli_fetch_assoc($result);
    echo $row["password"];
    if(mysqli_num_rows($result)>0){
        if($pwd==$row['password']){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            header("Location: welcome.php");
        }
        else{
            echo "wrong password";
        }
    }
    else{
        echo"User not registered";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="background">
    <form action="" method="post">
        <h3>Login Here</h3>

        <label>User email</label>
        <input type="gmail" placeholder="Email" name="useremail" value="">

        <label>Password</label>
        <input type="password" placeholder="Password" name="userpwd"  value=""> <br> <br>
        <div>
                <button type="submit" name="submit">Log In</button> <br><br> 
                <button type="button"><a href="query.php">registration</a></button>
        </div>
    </form>
  </div>
</body>
</html>