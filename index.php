<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Online Examination System </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

        <!-- mainbody -->
        <div class="main">

            <div class="card01">
                <p style="text-align: center;">Already a Member?&nbsp;<b>Login</b></p>
                <form action="validation.php" method="POST" class="form">
                    <label> <b>Username</b></label><br>
                    <input type="text" placeholder="Enter username" class="input" name="username" required>
                    <br><br>
                    <label><b>Password</b></label><br>
                    <input type="password" placeholder="Enter your password" class="input" name="password" required><br><br>
                    <button type="submit" name="submit" class="input" value="submit">Login</button>
                </form>
            </div>

            <div class="card02">
                <p style="text-align: center;"><b>New user? &nbsp; Register Now</b></p>
                <p style="text-align: center">To start the Exam, click here to register first.</p>
                <form action="" method="" class="form">
                <a href="getregister.php"> <input type="button" placeholder="Register" value="Register" class="input"></a>
                </form>
            </div>
        </div>

       <?php include 'footer.php'; ?>
</body>
</html>