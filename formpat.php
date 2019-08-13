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
            .error {color: #FF0000;}
        </style>
    </head>
    <body bgcolor="#ffe4c4">

    <?php include'menu.php'?>
    <div class="container">
        <!-- Content here -->
        <?php
        // define variables and set to empty values
        $fnameErr = $mnameErr =  $lnameErr = $ageErr =  $residenceErr = $phonenoErr = $genderErr = "";
        $fname = $mname =  $lname = $age =  $residence = $phoneno = $gender = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fname"])) {
                $fnameErr = "firstname is required";
            } else {
                $fname = test_input($_POST["fname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$fnameErr)) {
                    $fnameErr = "Only letter are allowed";
                }
            }
            if (empty($_POST["mname"])) {
                $mnameErr = "Name is required";
            } else {
                $mname = test_input($_POST["mname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$_POST["mname"])) {
                    $mnameErr = "Only letters allowed";
                }
            }
            if (empty($_POST["lname"])) {
                $lnameErr = "Name is required";
            } else {
                $lname = test_input($_POST["lname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$lnameErr)) {
                    $lnameErr = "Only letters allowed";
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
            }
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <h1>PATIENT REGISTRATION FORM</h1>
        <p><span class="error">* required field.</span></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group row">
            <label for="fname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-8">
                <input type="text" name="fname" class="form-control" id="fname"  placeholder="Enter firstname" value="<?php echo $fname;?>" required="">
                <span class="error">* <?php echo $fnameErr;?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="mname" class="col-sm-2 col-form-label">Middle name</label>
            <div class="col-sm-8">
                <input type="text" name="mname" class="form-control" id="mname" placeholder="Enter middle name" value="<?php echo $mname;?>">
                <span class="error">* <?php echo $mnameErr;?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-2 col-form-label">Lastname</label>
            <div class="col-sm-8">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name" value="<?php echo $lname;?>">
                <span class="error">* <?php echo $lnameErr;?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-8">
                <input type="text" name="age" class="form-control" id="Age" placeholder="Enter the age" value="<?php echo $age;?>">
                <span class="error">* <?php echo $ageErr;?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="recidence" class="col-sm-2 col-form-label">Residence</label>
            <div class="col-sm-8">
                <input type="text" name="residence" class="form-control" id="residence" placeholder="enter resident" value="<?php echo $residence;?>">
                <span class="error">* <?php echo $residenceErr;?></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="phoneno" class="col-sm-2 col-form-label">phone number</label>
            <div class="col-sm-8">
                <input type="phoneno" name="phoneno" class="form-control" id="phoneno" placeholder="Enter the phone number" value="<?php echo $phoneno;?>">
                <span class="error">* <?php echo $phonenoErr;?></span>
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" checked <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <center>
        <div class="form-group row">
            <div class="col-sm-14">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
            </center>
    </div>
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $fname;
    echo "<br>";
    echo $mname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $residence;
    echo "<br>";
    echo $phoneno;
    echo "<br>";
    echo $gender;
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
