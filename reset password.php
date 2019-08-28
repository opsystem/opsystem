<?php
require_once 'connect.php';
//initiate the class
$user = new connect();
if($user->isLogin()){

}else{
    $user->redirect('login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>reset</title>
</head>
<?php include'menu.php'?>
<style type="text/css">
    html {
        background-image: none;
    }
    #versionBar {
        background-color:#212121;
        position:center;
        width:100%;
        height:35px;
        bottom:0;
        left:0;
        text-align:center;
        line-height:35px;
    }
    .copyright{
        text-align:center; font-size:10px; color:#CCC;
    }
    .copyright a{
        color:#A31F1A; text-decoration:none
    }
</style>
<script type="text/javascript" >
    function validateForm()
    {
        var x=document.forms["loginForm"]["username"].value
        var y=document.forms["loginForm"]["password"].value
        if ((x==null || x=="") && (y==null || y==""))
        {
            alert("Username and Password must be filled out");
            return false;
        }
        else if(x==null || x=="")
        {
            alert("Username must be filled out");
            return false;
        }
        else if(y==null || y=="")
        {
            alert("Password must be filled out");
            return false;
        }
    }

</script>
<body>
<center>
<div class="container">
    <!-- Content here -->
    <div class="col-md-6 col-md-offset-2">
<h1>FORGOT PASSWORD?</h1>
<h2>You can reset your password here</h2>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp"  placeholder="nyau@email.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="button" class="btn btn-primary btn-lg">RESET</button>
    </form>
</center>
    </div>

<!-- Link JScript-->
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</center>
</body>
</html>