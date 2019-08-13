<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Staff reg</title>
</head>
<body>
<?php include'menu.php'?>
<div class="container">
    <!-- Content here -->
    <h1>STAFF REGISTRATION FORM</h1>
    <form>
        <div class="form-group row">
            <label for="inputstaffid" class="col-sm-2 col-form-label">Staff Id</label>
            <div class="col-sm-10">
                <input type="staffid" class="form-control" id="inputstaffid" placeholder="Enter your Id">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputfname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-10">
                <input type="fname" class="form-control" id="inputfname" placeholder="Enter firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputlname" class="col-sm-2 col-form-label">Lastname</label>
            <div class="col-sm-10">
                <input type="lname" class="form-control" id="inputlname" placeholder="Enter last name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputlname" class="col-sm-2 col-form-label">Date of birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" placeholder= placeholder="DD/MM/YY">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputposition" class="col-sm-2 col-form-label">Position</label>
            <div class="col-sm-10">
                <input type="position" class="form-control" id="inputposition" placeholder="Enter your position">
            </div>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <select class="form-control" id="Department">
                <option>select department</option>
                <option>emergency</option>
                <option>intensive care unit</option>
                <option>hospital pharmacy </option>
                <option>burn center</option>
                <option>coronary care unit</option>
                <option>physical therapy </option>
                <option>neonatal intensive care unit</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="inputphoneno" class="col-sm-2 col-form-label">phone number</label>
            <div class="col-sm-10">
                <input type="phoneno" class="form-control" id="inputphoneno" placeholder="Enter the phone number">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <center>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </center>>
</div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>