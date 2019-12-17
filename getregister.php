<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="register">

       <div class="reg1">
        <h1 style="text-align: center;">Student Registration Form</h1>
        <p  style="text-align: center;">Fill out the form carefully for registration</p>
       </div>

       <div class="reg2">
        <form action="registration.php" method="POST" class="form">
            <label>User Id</label><br>
            <input type="text" placeholder="Enter your first name" name="userid" class="input" required><br>
            <label>Full name</label><br>
            <input type="text" placeholder="Enter your last name" name="fullname" class="input" required><br>
            <label>Username</label><br>
            <input type="text" placeholder="Enter your user name" name="username" class="input" required><br>
            <label>Password</label><br>
            <input type="password" placeholder="Enter your Password" name="password" class="input" required><br>
            <input style="margin-top: 20px; padding:10px; width: 100px" type="submit" value="submit">
        </form>
       </div>
    </div>
</body>
</html>