<?php

class MainCtrl extends Controller{

    function __construct(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM configs");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('configs', $result[0]);

        $this->get();
    }

    function addFile(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "add_file")
        {
            $rand = uniqid();
            $img = $_FILES['img']['size']>0 ? $rand.$_FILES['img']['name'] : 'empty';

            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("INSERT INTO files (src) values (?)");
            $STH->execute(array($img)) or die(print_r($STH->errorInfo(), true));

            if($_FILES['img']['size']>0){
                move_uploaded_file($_FILES['img']["tmp_name"], "../img/files/" .$img);
            }

            header("location:index.php?page=files");
        }
    }

    function login()
    {
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if ($action == "login") {
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
    }

    function logout()
    {
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if ($action == "logout") {
            session_destroy();
            header('location:index.php');
            exit();
        }
    }

    function getFiles(){
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'files'){
            return;
        }

        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM files ORDER BY ID DESC");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM main");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('main_text', $result[0]);
    }

    function getFeedBack(){
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'feedback'){
            return;
        }

        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM feedback ORDER BY ID DESC");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function deleteFile(){
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == "delete_file")
        {
            $id = $_GET['id'];

            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("SELECT * FROM files WHERE ID=$id");
            $STH->execute()or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();

            $dir="../img/files/".$result[0]['src'];
            unlink($dir);

            $STH = $DBH->prepare("DELETE FROM files where ID = $id");
            $STH->execute();

            header("location:index.php?page=files");
        }
    }

    function deleteFeedBack(){
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == "delete_feedback")
        {
            $DBH = Connect::getDBH();
            $id = $_GET['id'];

            $STH = $DBH->prepare("DELETE FROM feedback where ID = $id");
            $STH->execute();

            header("location:index.php?page=feedback");
        }
    }

    function editConfig(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "edit_config")
        {
            $show = isset($_POST['slogan_show']) ? 1 : 0;
            $name = $_POST['site_name'];
            $slogan = $_POST['slogan_name'];
            $title = $_POST['site_title'];
            $keywords = $_POST['keywords'];
            $description = $_POST['description'];
            $bg_color = $_POST['bg_color'];
            $hf_color = $_POST['hf_color'];
            $side_color = $_POST['side_color'];
            $main_color = $_POST['main_color'];
            $font_color = $_POST['font_color'];

            $data = array($name, $slogan, $show, $keywords, $description, $title, $bg_color, $hf_color, $side_color, $main_color, $font_color);
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("UPDATE configs SET site_name=?, slogan_name=?, slogan_show=?, keywords=?, description=?, site_title=?,
                                 bg_color=?, hf_color=?, side_color=?, main_color=?, font_color=?");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            $cssFile = fopen("../css/custom.css", "w") or die("Unable to open file!");
            $style = "body {background-color: $bg_color ;}
                .header {background-color: $hf_color ;}
                .footer {background-color: $hf_color ;}
                .content {background-color: $side_color ; color: $font_color;}
                .main, .letter-nav {background-color: $main_color ;}";

            fwrite($cssFile, $style);
            fclose($cssFile);

            header('location:index.php?page=configs');
        }
    }

    function edit(){
        $description = $_POST['main_text'];
        global $DBH;
        $STH = $DBH->prepare("UPDATE main SET description=?");
        $STH->execute(array($description)) or die(print_r($STH->errorInfo(), true));
        $this->redirect('index.php?page=main');
    }
}
