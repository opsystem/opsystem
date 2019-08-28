<?php
require_once 'connect.php';
//initiate the class
$user = new connect();
if($_SESSION['user']){
    unset($_SESSION['user']);
    $user->redirect('login.php');
}