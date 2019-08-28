<?php
require_once 'connect.php';
$user = new connect();

//check if user login or not
if($user->isLogin()){

}else{
    $user->redirect('login.php');
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Home</title>
</head>
<body>
<?php include'menu.php'?>
<div class="banner">
    <div class=" d-flex justify-content-between align-items-center px-1 py-0 container">
        <div class="p-0">
            <img src="9.png" alt="emblem" width="60" class="img-fluid ">
        </div>
        <center>
            <marquee style="color:#000000" font-size:"larger"><b><b><b>THE UNITED REPUBLIC OF TANZANIA&nbsp&nbsp&nbsp&nbsp&nbsp********&nbsp&nbsp&nbspMINISTRY OF HEALTH&nbsp&nbsp&nbsp&nbsp*******&nbspTHE UNITED REPUBLIC OF TANZANIA</marquee></b></b></b>
        </div>
</center>

<style>

    div.img {
        border: 1px solid #ccc;
    }

    div.img:hover {
        border: 1px solid #777;
    }

    div.img img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }

    @media only screen and (max-width: 700px){
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px){
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
</style>
</head>
<body style="background-image: url("5.jpg")">
    <div class="responsive">
    <div class="img">
        <a target="_blank" href="7.jpg">
            <img src="img/7.jpg" alt="Trolltunga Norway" width="300" height="200">
        </a>
    </div>
</div>
<div class="responsive">
    <div class="img">
        <a target="_blank" href="2.jpg">
            <img src="img/2.jpg" alt="Forest" width="600" height="400">
        </a>
    </div>
</div>

<div class="responsive">
    <div class="img">
        <a target="_blank" href="3.jpg">
            <img src="img/3.jpg" alt="Northern Lights" width="600" height="400">
        </a>
    </div>
</div>

<div class="responsive">
    <div class="img">
        <a target="_blank" href="5.jpg">
            <img src="img/5.jpg" alt="Mountains" width="600" height="400">
        </a>
    </div>
</div>
</head>
<br>
</br>
<br>
</br>
<br>
</br>
<br></br>
<br></br>
<center>
<div class="text-blue">
    <h1>OUTPATIENT HEALTH CARE SYSTEM</h1>
    <h3> We Provide Better Health care service for patient </h3>
    <button type="submit" class="btn btn-secondary btn-lg"><a href="login.php">LOGIN</a></button>

</div>
</center>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>