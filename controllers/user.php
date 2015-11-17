<?php
require_once('config.php');

class Select extends Connect
{

    function getTopDreams()
    {
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT ID, header FROM dreambook ORDER BY watch_count desc limit 10");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getInfo()
    {
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT ID, header FROM info ORDER BY position");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }


    function getMainText()
    {
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM main");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getInfoText()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'info'){
            return;
        }

        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM info where ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getDreamText()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'dream'){
            return;
        }

        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("Update dreambook set watch_count = watch_count+1 where ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));

        $STH = $DBH->prepare("SELECT * FROM dreambook where ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getResults()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'results'){
            return;
        }
        $id = $_GET['id'];

        if(substr_count($id, 'is') > 1){
            $word = $_GET['id'];
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("SELECT ID, header FROM dreambook WHERE header LIKE ? ORDER BY header");
            $STH->execute(array('%'.$word.'%')) or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();
            return $result;
        }
        else{
            $letter = $_GET['id'];
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("SELECT ID, header FROM dreambook WHERE header LIKE ? ORDER BY header");
            $STH->execute(array($letter.'%')) or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();
            return $result;
        }

    }

    function getFBCaptcha()
    {
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'feedback'){
            return;
        }

        include("plugins/captcha/simple-php-captcha.php");
        $_SESSION['captcha'] = simple_php_captcha();
    }

    function checkCaptcha()
    {
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == 'checkCaptcha'){
            $res = (strtolower($_GET['captcha']) == strtolower($_SESSION['captcha']['code']));
            echo json_encode(array('check' => $res));
            exit();
        }

    }

    function setMessage()
    {
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == 'addMessage'){
            $name = strip_tags(htmlspecialchars(stripslashes(trim($_GET['name'])))) ;
            $mail = htmlspecialchars(stripslashes(trim($_GET['mail'])));
            $header = htmlspecialchars(stripslashes(trim($_GET['header'])));
            $description = htmlspecialchars(stripslashes(trim($_GET['desc'])));

            $data = array($name, $mail, $header, $description);
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("INSERT INTO feedback (fname, mail, header, description) values (?, ?, ?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            echo json_encode(array('status' => 'ok'));
            exit();
        }

    }

}