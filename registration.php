<?php

session_start();

header('location:login.php');

$con = mysqli_connect('localhost', 'id11224317_root', 'kiduku', 'id11224317_online_exam');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$name = $_POST['username'];
$pass = $_POST['password'];


$s = "select * from register where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if( $num == 1){
    echo "Username is already taken";
}else {

$insertQuery = "INSERT INTO register(fname, lname, username, password) VALUES ('$firstname', '$lastname', '$name', '$pass')";

$result = $con->query($insertQuery);
if($result){
        echo "Successful";
    }else{
        echo "Failed";
    }

}

