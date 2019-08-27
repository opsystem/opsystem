<?php
    include 'connect.php';
     // define variables and set to empty values
        $firstnameErr = $middlenameErr =  $lastnameErr = $ageErr =  $residenceErr = $phonenoErr = $genderErr = "";
        $firstname = $middlename =  $lastname = $age =  $residence = $phoneno = $gender = "";
 function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["firstname"])) {
                $firstnameErr = "firstname is required";
            } else {
                $firstname = test_input($_POST["firstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$firstnameErr)) {
                    $firstnameErr = "Only letter are allowed";
                }
            }
            if (empty($_POST["middlename"])) {
                $middlenameErr = "Name is required";
            } else {
                $middlename = test_input($_POST["middlename"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$_POST["middlename"])) {
                    $middlenameErr = "Only letters allowed";
                }
            }
            if (empty($_POST["lastname"])) {
                $lastnameErr = "Name is required";
            } else {
                $lastname = test_input($_POST["lastname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$lastnameErr)) {
                    $lastnameErr = "Only letters allowed";
                }
            }
            if (empty($_POST["age"])) {
                $ageErr = "age is required";
            } else {
                $age = test_input($_POST["age"]);
                // check if e-mail address is well-formed
                if (!preg_match("/^[1-200 ]*$/",$ageErr)) {
                    $ageErr = "Invalid age";
                }
            }
            if (empty($_POST["residence"])) {
                $residenceErr = "residence is required";
            } else {
                $residence = test_input($_POST["residence"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$residenceErr)) {
                    $residenceErr = "Only letters allowed";
                }
            }
            $phoneno = test_input($_POST["phoneno"]);
            // check if phone no is well-formed
            if (!preg_match("/^[06,07 ]*$/",$phonenoErr)) {
                $phonenoErr = "Invalid phone no format";
            }
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
            $firstname = filter_input(INPUT_POST, 'firstname');
            $middlename = filter_input(INPUT_POST, 'middlename');
            $lastname = filter_input(INPUT_POST, 'lastname');
            $age= filter_input(INPUT_POST, 'age');
            $residence = filter_input(INPUT_POST, 'residence');
            $phoneno = filter_input(INPUT_POST, 'phoneno');
            $gender = filter_input(INPUT_POST, 'gender');
            $sql = "INSERT INTO patient (firstname, middlename, lastname, age, residence, phoneno, gender)
                    VALUES ('$firstname', '$middlename', '$lastname', '$age', '$residence', '$phoneno', '$gender')";
            $conn->exec($sql);
            echo "New record created successfully";
        }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>pform</title>
        <style>
            .error {color: #ffe976;}
        </style>
    </head>
    <body class="bg-gradient-primary">
    <?php include'menu.php'?>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
               <!-- <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">-->

    <div class="container">
        <!-- Content here -->

        <h1>PATIENT REGISTRATION FORM</h1>
    <form method="POST">
        <div class="form-group row">
            <label for="firstname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-6">
                <input type="text" name="firstname" class="form-control" id="firstname"  placeholder="Enter firstname" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="middlename" class="col-sm-2 col-form-label">Middle name</label>
            <div class="col-sm-6">
                <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Enter middle name" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
            <div class="col-sm-6">
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter last name" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-6">
                <input type="text" name="age" class="form-control" id="Age" placeholder="Enter the age" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="recidence" class="col-sm-2 col-form-label">Residence</label>
            <div class="col-sm-6">
                <input type="text" name="residence" class="form-control" id="residence" placeholder="enter resident"  required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="phoneno" class="col-sm-2 col-form-label">phone number</label>
            <div class="col-sm-6">
                <input type="phoneno" name="phoneno" class="form-control" id="phoneno" placeholder="Enter the phone number">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male">
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <center>
        <div class="form-group row">
                <div class="col-sm-24">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
        </div>
            </center>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
