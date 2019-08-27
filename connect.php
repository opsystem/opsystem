<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=opsystem", 'root', '');
}catch(PDOException $e){
    die($e->getMessage());
}