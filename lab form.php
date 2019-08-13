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
<body>
<div class="container">
<h1>LABORATORY REQUEST FORM</h1>
<form>
    <div class="form-group row">
        <label for="inputfname" class="col-sm-1 col-form-label">Name</label>
        <div class="col-sm-8">
            <input type="fname" class="form-control" id="inputfname" placeholder="Enter fullname">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputage" class="col-sm-1 col-form-label">Age</label>
        <div class="col-sm-8">
            <input type="age" class="form-control" id="inputAge" placeholder="Enter the age">
        </div>
    </div>
    <h2>Disease to be checked</h2>
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
            <div class="form-group row">
                <label for="inputfname" class="col-sm-1 col-form-label">
                    3.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">UTI</label>
        </div>
            </div>
                <div class="form-group row">
                    <label for="inputfname" class="col-sm-1 col-form-label">4.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">tuberculosis</label>
        </div>
                </div>
                    <div class="form-group row">
                    <label for="inputfname" class="col-sm-1 col-form-label">5.</label>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Pregnancy test</label>
        </div>
                    </div>
    <button type="button" class="btn btn-primary btn-lg">SUBMIT</button>
</form>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>