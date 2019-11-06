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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="exam.css">
    <title>Home page</title>
    
</head>
<body>
    <div class="container">
    <h1 style="text-align: center; padding:20px"> Online Examination </h1>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home" class="online01">Subject</a></li>
        <li><a data-toggle="tab" href="#menu1" class="online01">Exam</a></li>
        <li><a data-toggle="tab" href="#menu2" class="online01">Result</a></li>
        <li><a data-toggle="tab" href="#logout" class="online01">logout</a></li>
    </ul>
    
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
        <h1>Subject</h1>
        <ul>
            <li><a href="subject.php">Data structure</a></li>
            <li><a href="subject.php">Javascript</a></li>
            <li><a href="subject.php">Object oriented</a></li>
            <li><a href="subject.php">Software development</a></li>
            <li><a href="subject.php">Project Managemant</a></li>
        </ul>
        <button class="button"><a href="subject.php"><span>Enroll</span></a></button>
        </div>
        <div id="menu1" class="tab-pane fade">
        <h1><a href="exam.php">Exam</a></h1>
        <p> Examination is ready for you.</p> 
        </div>
        <div id="menu2" class="tab-pane fade">
        <h1><a href="result.php">Result</a></h1>
        <p>Result is ready for you</p>
        </div>
        <div id="logout" class="tab-pane fade">
        <h1><a href="logout.php">Logout</a></h1>
        <p> Here you can logout </p>
        </div>
    </div>
    </div>
            <br><br><br> <br><br>
            <span><h1 style="text-align:center;font-size:60px;">Welcome <?php echo $_SESSION['username']; ?></h1></span>
            <br><br><br> 
            </div>
   
    <!-- footer -->
    <div class="container footer">
        <h3 style="text-align: center; padding: 20px"> Examination System - 2019 </h3>
    </div>
   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>