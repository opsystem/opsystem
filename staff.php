<?php
include 'connect.php';
// define variables and set to empty values
$loginIdErr = $firstnameErr =  $emailErr = $lastnameErr =  $positionErr = $departmentErr = $passwordErr= $password1Err= $genderErr= "";
$loginId = $firstname =  $lastname = $DOB =  $position = $department = $email= $password = $password1 = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["loginId"])) {
    $loginIdErr = "loginId is required";
} else {
    $loginId = ($_POST["loginId"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9-_/.,]*$/",$loginIdErr)) {
        $loginIdErr = "Only letter are allowed";
    }
}
if (empty($_POST["firstname"])) {
    $firstnameErr = "firstname is required";
} else {
    $firstname = ($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstnameErr)) {
        $firstnameErr = "Only letter are allowed";
    }
}
if (empty($_POST["lastname"])) {
    $lastnameErr = "Name is required";
} else {
    $lastname = ($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$lastnameErr)) {
        $lastnameErr = "Only letters allowed";
    }
}
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}
if (empty($_POST["position"])) {
    $positionErr = "position is required";
} else {
    $position = ($_POST["position"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$positionErr)) {
        $positionErr = "Only letters allowed";
    }
}
if (empty($_POST["department"])) {
    $departmentErr = "department is required";
} else {
    $department = ($_POST["department"]);
    // check if phone no is well-formed
    if (!preg_match("/^[a-zA-Z]*$/",$departmentErr)) {
        $departmentErr = "invalid department format";
    }
}
if (empty($_POST["password"])) {
    $password = "password is required";
} else {
    $password = ($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$passwordErr)) {
        $passwordErr = "Only letters allowed";
    }
}
if (empty($_POST["password1"])) {
    $password1Err = "password is required";
} else {
    $password1 = ($_POST["password1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$password1Err)) {
        $passwordErr = "Only letters allowed";
    }
}

if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
} else {
    $gender = ($_POST["gender"]);
}
/*function ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;*/
}
$loginId = filter_input(INPUT_POST, 'loginId');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$position = filter_input(INPUT_POST, 'position');
$department = filter_input(INPUT_POST, 'department');
$password = filter_input(INPUT_POST, 'password');
$password1 = filter_input(INPUT_POST, 'password1');
$gender = filter_input(INPUT_POST, 'gender');
$sql = "INSERT INTO staff (loginId, firstname, lastname, email, position, department, password, password1, gender)
VALUES ($loginId'$firstname', '$lastname', '$email', '$position', '$department', '$password', '$password1' '$gender')";
$conn->exec($sql);
echo "New record created successfully";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>register</title>
</head>
<body>
<body class="bg-gradient-primary">
<?php include'menu.php'?>
<center><h1>STAFF REGISTRATION</h1></center>
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
                        <form method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="loginId" name="lid" required="">
                                </div>
                                <div class="col-sm-6">
                                    <input name="name" type="text" id="name" class="form-control form-control-user" placeholder="firstname" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input name="name" type="text" id="name" class="form-control form-control-user" placeholder="lastname" required="">
                            </div>
                    </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="email" type="text" id="email" class="form-control form-control-user" placeholder="Email Address" required="">
                                </div>
                                <div class="col-sm-6">
                                    <input name="phone" type="text" id="phone" class="form-control form-control-user" placeholder="Position" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="pass" class="form-control form-control-user" placeholder="Password" required="">
                                </div>
                                <div class="col-sm-6">
                                    <input name="cpass" type="password" id="cpass" class="form-control form-control-user" placeholder="Repeat Password" required="">
                                </div>
                            </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1">
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                            <button type="submit" class="btn btn-primary btn-user btn-block" name="Submit">
                                Register Account
                            </button>
                        </form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
  </html>