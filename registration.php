<?php

session_start();

header('location:login.php');

$con = mysqli_connect('localhost', 'root', 'kiduku', 'online_exam');

$userid = $_POST['userid'];
$fullname = $_POST['fullname'];
$name = $_POST['username'];
$pass = $_POST['password'];


$s = "select * from users where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if( $num == 1){
    echo "Username is already taken";
}else {

$insertQuery = "INSERT INTO users(user_id, full_name, username, password) VALUES ('$userid', '$fullname', '$name', '$pass')";

$result = $con->query($insertQuery);
if($result){
        echo "Successful";
    }else{
        echo "Failed";
    }

}

