<?php

session_start();
header ('location:login.php');


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username Already Taken";
}else{
    $reg= " insert into usertable(name ,password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo"Your Registration Successful";
} 

?>