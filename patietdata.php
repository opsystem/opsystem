<?php
require_once 'connect.php';
//initiate the class
$user = new connect();
if($user->isLogin()){

}else{
    $user->redirect('login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>My MySQL Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
<?php

require 'connect.php';
$form = "<form>";

$result = $conn->query("describe codewalldb.people");

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["Field"] != "id") {
            $form .= "<div class='form-group'>";
            $form .= "<label for='" . $row["Field"] . "'>" . $row["Field"] . "</label> <input type='text' class='form-control' name='" . $row["Field"] . "' >";
            $form .= "</div>";
        }
    }
    $form .= "<input type='submit' value='Submit'></form>";
}

echo $form;
?>

</body>

</html>