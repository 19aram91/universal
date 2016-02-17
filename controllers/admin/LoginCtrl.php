<?php

class LoginCtrl extends Controller{

    function __construct(){}

    function set(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user != 'admin' || md5($pass) != 'd1439d46eeb3c1383eb80a22d8b7e241') {
            echo json_encode(array('error' => 'Wrong username or password'));
            exit();
        }

        $_SESSION['loged_in'] = 'true';
        $_SESSION['user'] = $user;
        echo json_encode(array('success' => '1'));
        exit();
    }

    function leave(){
        session_destroy();
        header('location:index.php');
        exit();
    }
}