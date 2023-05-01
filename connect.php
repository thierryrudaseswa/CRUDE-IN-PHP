<?php

$con=new mysqli('localhost','root','','crudOperation');

if(!$con){
    die(mysqli_error($con));
}

?>