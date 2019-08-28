<?php
session_start();

class connect{
    private $_conn;

    function __construct(){
        try{
            $this->_conn = new PDO("mysql:host=localhost;dbname=opsystem", 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    function dbConnect(){
        return $this->_conn;
    }
    function isLogin(){
        if(isset($_SESSION['user'])){
            return true;
        }else{return false;}
    }
    function encryptPassword($password){
        $password = 'op123'.$password.'sys123';
        $encrypt_password = md5($password);
        return $encrypt_password;
    }
    function redirect($location){
        header('Location: '.$location);
        exit();
    }
    function check($field,$value){
        $query = $this->_conn->query("SELECT * FROM staff WHERE $field = '$value' ");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function getData($table,$field,$value){
        $query = $this->_conn->query("SELECT * FROM $table WHERE $field = '$value' ");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function login($username,$password){
        if($this->check('username',$username)){
            $data = $this->getData('staff','username',$username);
            if($data[0]['password'] == $this->encryptPassword($password)){
                $_SESSION['user'] = $data[0]['id'];
                return true;
            }else{return false;}
        }else{return false;}
    }
    function accessLevel($position){
        $access=null;
        switch ($position){
            case 'Admin':
                $access=1;
                break;
            case 'Doctor':
                $access=1;
                break;
            case 'Pharmacist':
                $access=1;
                break;
            case 'Receptionist':
                $access=1;
                break;
        }
        return $access;
    }
}