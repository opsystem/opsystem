<?php
require_once 'connect.php';
//initiate the class
$user = new connect();
if($user->isLogin()) {
// define variables and set to empty values
    $nameErr = $ageErr = "";
    $name = $age = $malaria = $typhoid = $uti = $tuberculosis = $HIV = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $nameErr)) {
                $nameErr = "Only letter are allowed";
            }
        }

        if (empty($_POST["age"])) {
            $ageErr = "age is required";
        } else {
            $age = test_input($_POST["age"]);
            // check if e-mail address is well-formed
            if (!preg_match("/^[1-200 ]*$/", $ageErr)) {
                $ageErr = "Invalid age";
            }
        }
        /*function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;*/
    }
    $name = filter_input(INPUT_POST, 'name');
    $age = filter_input(INPUT_POST, 'age');
    $malaria = filter_input(INPUT_POST, 'malaria');
    $typhoid = filter_input(INPUT_POST, 'typhoid');
    $uti = filter_input(INPUT_POST, 'uti');
    $tuberculosis = filter_input(INPUT_POST, 'tuberculosis');
    $HIV = filter_input(INPUT_POST, 'HIV');
    $sql = "INSERT INTO patient (name,age, malaria, typhoid, uti, tuberculosis, HIV)
VALUES ('$name','$age', '$malaria', '$typhoid', '$uti', '$tuberculosis','HIV')";
    $conn->exec($sql);
    echo "New record created successfully";
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

    <title>lab</title>
</head>
<?php include'menu.php'?>
<body class="bg-gradient-primary">
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <!--<div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>-->
<div class="container">
<h1>LABORATORY REQUEST FORM</h1>
<form method="POST">
    <div class="form-group row">
        <label for="inputfname" class="col-sm-1 col-form-label">Name</label>
        <div class="col-sm-6">
            <input type="fname" class="form-control" id="inputfname" placeholder="Enter fullname"  required="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputage" class="col-sm-1 col-form-label">Age</label>
        <div class="col-sm-6">
            <input type="age" class="form-control" id="inputAge" placeholder="Enter the age"  required="">
        </div>
    </div>
    <h2>Disease to be checked</h2>
<center>
    <div class="form-group row">
    <label for="inputfname" class="col-sm-1 col-form-label">1.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Maralia</label>
        </div>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">+ve</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">-ve</label>
         </div>

    <div class="form-group row">
            <label for="inputfname" class="col-sm-1 col-form-label">2.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Typhoid</label>
        </div>
        </div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">+ve</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">-ve</label>
</div>
            <div class="form-group row">
                <label for="inputfname" class="col-sm-1 col-form-label">
                    3.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">UTI</label>
        </div>
            </div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">+ve</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">-ve</label>
</div>
                <div class="form-group row">
                    <label for="inputfname" class="col-sm-1 col-form-label">4.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">tuberculosis</label>
        </div>
                </div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">+ve</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">-ve</label>
</div>
                    <div class="form-group row">
                    <label for="inputfname" class="col-sm-1 col-form-label">5.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Pregnancy test</label>
        </div>
                    </div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">+ve</label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">-ve</label>
</div></center><br></br>
    <button type="button" class="btn btn-primary btn-lg">SUBMIT</button>
</center>>
    </form>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>