<?php

class LanguagesCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function set(){
        $header = $_POST['article_header'];
        $description = $_POST['article_desc'];
        $rand = uniqid();
        $img = $_FILES['article_img']['size'] > 0 ? $rand . $_FILES['article_img']['name'] : 'noimg.png';

        $data = array($header, $description, $img);
        global $DBH;
        $STH = $DBH->prepare("INSERT INTO articles (header, description, img) values (?, ?, ?)");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        if ($_FILES['article_img']['size'] > 0) {
            move_uploaded_file($_FILES['article_img']["tmp_name"], "../img/articles/" . $img);
        }

        $this->redirect('?page=article');
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT * FROM articles ORDER BY ID DESC");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('articles', $result);
    }

    function delete(){
        $id = $_GET['id'];
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM articles WHERE ID=$id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        if ($result[0]['img'] != 'noimg.png') {
            $dir = "../img/articles/" . $result[0]['img'];
            unlink($dir);
        }
        $STH = $DBH->prepare("DELETE FROM articles where ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $this->redirect('?page=article');
    }

}