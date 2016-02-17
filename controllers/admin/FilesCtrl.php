<?php

class FilesCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM files ORDER BY ID DESC");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $root = 'http://'.$_SERVER['HTTP_HOST'];
        $smarty->assign('root', $root);
        $smarty->assign('files', $result);
    }

    function add(){
        $rand = uniqid();
        $img = $_FILES['img']['size']>0 ? $rand.$_FILES['img']['name'] : 'empty';

        global $DBH;
        $STH = $DBH->prepare("INSERT INTO files (src) values (?)");
        $STH->execute(array($img)) or die(print_r($STH->errorInfo(), true));

        if($_FILES['img']['size']>0){
            move_uploaded_file($_FILES['img']["tmp_name"], "../img/files/" .$img);
        }

        $this->redirect('?page=files');
    }

    function delete(){
        $id = $_GET['id'];
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM files WHERE ID=$id");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();

        $dir="../img/files/".$result[0]['src'];
        unlink($dir);

        $STH = $DBH->prepare("DELETE FROM files where ID = $id");
        $STH->execute();

        $this->redirect('?page=files');
    }
}
