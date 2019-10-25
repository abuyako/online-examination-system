<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>
      

        <div class="inside">
            <a href="logout.php">logout</a>
            <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        </div>
   
   
  
   <?php include 'footer.php'; ?>

</body>
</html>