<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php'; ?>

<body>
    
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
                <!-- <p>Demo credential:</p>
                <p>username: <b>abuyako</b></p>
                <p>password: <b>12345</b></p> -->
            </div>

            <div class="card02">
                <p style="text-align: center;"><b>New user? &nbsp; Register Now</b></p>
                <p style="text-align: center">To start the Exam, click here to register first.</p>
                <form action="" method="" class="form">
                <a href="getregister.php"> <input type="button" placeholder="Register" value="Register" class="input"></a>
                </form>
                <br><br>
                <p style="text-align: center;">Demo credential:</p>
                <p style="text-align: center;">Username: <b>abuyako</b> 	&nbsp; Password: <b>12345</b></p>
            </div>
        </div>

       <?php include 'includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>