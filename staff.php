<?php
require_once 'connect.php';
//initiate the class
$user = new connect();
if($user->isLogin()){
// define variables and set to empty values
    $loginIdErr = $firstnameErr = $emailErr = $lastnameErr = $positionErr = $departmentErr = $passwordErr = $password1Err = $genderErr = "";
    $loginId = $firstname = $lastname = $DOB = $position = $department = $email = $password = $password1 = $gender = "";
    $successMessage = null;$errorMessage = null;$access=null;

    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    }*
    /*function ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;*/
    /*$loginId = filter_input(INPUT_POST, 'loginId');
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $position = filter_input(INPUT_POST, 'position');
    $department = filter_input(INPUT_POST, 'department');
    $password = filter_input(INPUT_POST, 'password');
    $password1 = filter_input(INPUT_POST, 'password1');
    $gender = filter_input(INPUT_POST, 'gender');*/
    /*$sql = "INSERT INTO staff (loginId, firstname, lastname, email, position, department, password, password1, gender)
    VALUES ($loginId'$firstname', '$lastname', '$email', '$position', '$department', '$password', '$password1' '$gender')";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $sql = "INSERT INTO staff 
VALUES ($firstname,$username, $lastname, $email, $password)";
    $conn->exec($sql);
    echo "New record created successfully";
}*/


    if ($_POST) {
        //recieve input from the form using POST request
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $position = $_POST['position'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password1 = $_POST['password1'];

        //checking if password and re-type password match
        if ($password === $password1) {
            //check if username alerady exist in the database
            if (!$user->check('username', $username)) {
                //check if email alerady exist in the database
                if (!$user->check('email', $email)) {
                    //check if phone alerady exist in the database
                    if (!$user->check('phone', $phone)) {
                        // encrypt password
                        $encrypt_password = $user->encryptPassword($password);
                        //user access level based on their position
                        $access = $user->accessLevel($position);
                        //insert record into the database
                        $sql = "INSERT INTO staff (`firstname`,`lastname`,`username`,`position`,`access`,`email`,`phone`,`password`) 
                                VALUES ('$firstname','$lastname','$username','$position','$access','$email','$phone','$encrypt_password')";
                        if ($user->dbConnect()->query($sql)) {
                            $successMessage = 'User Account Created Successful';
                        }
                    } else {
                        $errorMessage = 'Phone number already exist';
                    }
                } else {
                    $errorMessage = 'Email already exist';
                }
            } else {
                $errorMessage = 'Username already exist';
            }
        } else {
            $errorMessage = 'Password dont match';
        }
    }
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
            <div class="container"><br>
                <!--  alert notification using bootstrap when form is submitted-->
                <?php if(isset($_POST)){if($successMessage){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Great!</strong> <?=$successMessage?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }elseif ($errorMessage){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> <?=$errorMessage?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }}?>
                <form method="post"><br>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input name="firstname" type="text" id="name" class="form-control form-control-user" placeholder="firstname" required="">
                        </div>
                        <div class="col-sm-6">
                            <input name="lastname" type="text" id="name" class="form-control form-control-user" placeholder="lastname" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input name="username" type="text" id="name" class="form-control form-control-user" placeholder="username" required="">
                        </div>
                        <div class="col-sm-6">
                            <select name="position" class="form-control">
                                <option value="">Select position</option>
                                <option value="Admin">Admin</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Receptionist">Receptionist</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="email" type="text" id="email" class="form-control form-control-user" placeholder="Email Address" required="">
                        </div>
                        <div class="col-sm-6">
                            <input name="phone" type="text" id="phone" class="form-control form-control-user" placeholder="Phone Number" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required="">
                        </div>
                        <div class="col-sm-6">
                            <input name="password1" type="password" id="cpass" class="form-control form-control-user" placeholder="Repeat Password" required="">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value=" Register Account">
                    <br>
                </form>
            </div>
        </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
  </html>