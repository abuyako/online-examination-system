<?php
session_start();

// create connection
$con = mysqli_connect('localhost', 'id11224317_root', 'kiduku', 'id11224317_online_exam');

$name = $_POST['username'];
$pass =$_POST['password'];

//writting the query variable to select table names
$s = "select * from register where username = '$name' && password = '$pass'";

//now create a result variable to store the query
$result = mysqli_query($con, $s);

//varble to count number of rows in the table
$num = mysqli_num_rows($result);
echo $num;

//check the connection

if($num == 1){
    $_SESSION['username'] = $name;
   header('location:home.php');
}else {
    header('location:login.php');
}


?>