<?php
require_once 'connect.php';
//initiate the class
$user = new connect();
if($user->isLogin()) {
//include 'connect.php';
// define variables and set to empty values
    $fullnameErr = $ageErr = "";
    $fullname = $age = $medicine = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullname"])) {
            $fulltnameErr = "fullname is required";
        } else {
            $firstname = ($_POST["fullname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $fullnameErr)) {
                $fullnameErr = "Only letter are allowed";
            }
        }
        if (empty($_POST["age"])) {
            $ageErr = "age is required";
        } else {
            $age = ($_POST["age"]);
            // check if e-mail address is well-formed
            if (!preg_match("/^[1-200 ]*$/", $ageErr)) {
                $ageErr = "Invalid age";
            }
        }
    }
    /*function ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }*/
    $fullname = filter_input(INPUT_POST, 'fullname');
    $age = filter_input(INPUT_POST, 'age');
    $medicine = filter_input(INPUT_POST, 'medicine');
    $sql = "INSERT INTO pharmacy (fullname, age, medicine)
VALUES ('$fullname', '$age', '$medicine')";
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

    <title>pharm</title>
</head>
<?php include'menu.php'?>
<body>
<div class="container">
    <h1>MEDICINE PRESCRIPTION FORM</h1>
    <form method="post">
        <div class="form-group row">
            <label for="inputfname" class="col-sm-1 col-form-label">Fullname</label>
            <div class="col-sm-8">
                <input type="fname" class="form-control" id="inputfname" placeholder="Enter firstname" required="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputage" class="col-sm-1 col-form-label">Age</label>
            <div class="col-sm-8">
                <input type="age" class="form-control" id="inputAge" placeholder="Enter the age" required="">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Prescribed medicine</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <button type="button" class="btn btn-primary btn-lg">SUBMIT</button>
</form>
        <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
</body>
</html>