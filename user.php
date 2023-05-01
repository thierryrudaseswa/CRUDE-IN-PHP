<?php
include 'connect.php';

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email', '$mobile', '$password')";
    $result=mysqli_query($con, $sql);

    if($result){
        // echo "data inserted sucessfully";
        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>crud application</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>

    <form action="user.php" method="POST" class="form">
        Name:<br>
        <input type="text" name="name" class="fname" ><br>
        Email:<br>
        <input type="email" name="email" class="email" ><br>
        Mobile:<br>
        <input type="tel" name="mobile" class="mobile"><br>
        Password:<br>
        <input type="password" name="password" class="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
