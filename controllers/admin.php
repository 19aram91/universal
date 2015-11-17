<?php
require_once('../config.php');


class Insert extends Connect{

    function setDream(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "add_dream")
        {
            $header = $_POST['dream_header'];
            $description = $_POST['dream_desc'];

            $rand = uniqid();
            $img = $_FILES['dream_img']['size']>0 ? $rand.$_FILES['dream_img']['name'] : 'star.png';

            $data = array($header, $description, $img);
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("INSERT INTO dreambook (header, description, img) values (?, ?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            if($_FILES['dream_img']['size']>0){
                move_uploaded_file($_FILES['dream_img']["tmp_name"], "../img/dreambook/" .$img);
            }

            header("location:index.php?page=dreambook");
        }
    }

    function setInfo(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "add_info")
        {
            $header = $_POST['info_header'];
            $description = $_POST['info_desc'];
            $position = $_POST['info_pos'];

            $data = array($header, $description, $position);
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("INSERT INTO info (header, description, position) values (?, ?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            header("location:index.php?page=info");
        }
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


}

class Select extends Connect{

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


    function getDreams(){
        $page = (!isset($_GET['page'])) ? "dreambook" : $_GET['page'];
        if($page != 'dreambook'){
            return;
        }

        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM dreambook ORDER BY ID DESC");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getEditDreams(){
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'edit_dream'){
            return;
        }

        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM dreambook WHERE ID = $id");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getInfo(){
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'info'){
            return;
        }

        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM info ORDER BY ID DESC");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
    }

    function getEditInfo(){
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'edit_info'){
            return;
        }

        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM info WHERE ID = $id");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
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

    function getMain(){
        $page = (!isset($_GET['page'])) ? "" : $_GET['page'];
        if($page != 'main'){
            return;
        }

        $DBH = Connect::getDBH();
        $STH = $DBH->prepare("SELECT * FROM main");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        return $result;
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

}

class Delete extends Connect{

    function deleteDream(){
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == "delete_dream")
        {
            $id = $_GET['id'];

            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("SELECT * FROM dreambook WHERE ID=$id");
            $STH->execute()or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();

            if($result[0]['img'] != 'star.png'){
                $dir="../img/dreambook/".$result[0]['img'];
                unlink($dir);
            }

            $STH = $DBH->prepare("DELETE FROM dreambook where ID = $id");
            $STH->execute();

            header("location:index.php?page=dreambook");
        }
    }

    function deleteInfo(){
        $action = (!isset($_GET['action'])) ? "" : $_GET['action'];
        if($action == "delete_info")
        {
            $DBH = Connect::getDBH();
            $id = $_GET['id'];

            $STH = $DBH->prepare("DELETE FROM info where ID = $id");
            $STH->execute();

            header("location:index.php?page=info");
        }
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


}

class Update extends Connect{

    function editDream(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "edit_dream")
        {
            $DBH = Connect::getDBH();
            $id = intval($_POST['id']);
            $header = $_POST['dream_header'];
            $description = $_POST['dream_desc'];

            $data = array($header, $description);
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("UPDATE dreambook SET header=?, description=? WHERE ID=$id");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            $rand = uniqid();

            if($_FILES['dream_img']['size']>0)
            {
                $img = $rand.$_FILES['dream_img']['name'];
                $DBH = Connect::getDBH();
                $STH = $DBH->prepare("SELECT * FROM dreambook WHERE ID=$id");
                $STH->execute()or die(print_r($STH->errorInfo(), true));
                $result = $STH->fetchAll();

                if($result[0]['img'] != 'star.png'){
                    $dir="../img/dreambook/".$result[0]['img'];
                    unlink($dir);
                }

                $data = array("$img");
                $STH = $DBH->prepare("UPDATE dreambook SET img = ? WHERE ID=$id");
                $STH->execute($data) or die(print_r($STH->errorInfo(), true));

                move_uploaded_file($_FILES['dream_img']["tmp_name"],
                    "../img/dreambook/" . $img);
            }

            header('location:index.php?page=edit_dream&id='.$id);
        }
    }

    function editInfo(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "edit_info")
        {
            $id = intval($_POST['id']);
            $header = $_POST['info_header'];
            $description = $_POST['info_desc'];
            $position = $_POST['info_pos'];

            $data = array($header, $description, $position);
            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("UPDATE info SET header=?, description=?, position=? WHERE ID=$id");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            header('location:index.php?page=edit_info&id='.$id);
        }
    }

    function editMain(){
        $action = (!isset($_POST['action'])) ? "" : $_POST['action'];
        if($action == "edit_main")
        {
            $description = $_POST['main_text'];

            $DBH = Connect::getDBH();
            $STH = $DBH->prepare("UPDATE main SET description=?");
            $STH->execute(array($description)) or die(print_r($STH->errorInfo(), true));

            header('location:index.php?page=main');
        }
    }

}
