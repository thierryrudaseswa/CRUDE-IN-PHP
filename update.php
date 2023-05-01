<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql = "update `crud` set name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>crud application</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <form action="update.php" method="POST" class="form">
        Name:<br>
        <input type="text" name="name" class="fname" value="<?php echo $name;?>"><br>
        Email:<br>
        <input type="email" name="email" class="email" value="<?php echo $email;?>" ><br>
        Mobile:<br>
        <input type="tel" name="mobile" class="mobile" value="<?php echo $mobile;?>"><br>
        Password:<br>
        <input type="password" name="password" class="password"  value="<?php echo $password;?>"><br>
        <input type="submit" name="submit" value="update">
    </form>
</body>
</html>