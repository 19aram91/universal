<?php

class ArticleCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function set(){
        $date = date("Y-m-d H:i:s");
        $img = $_FILES['article_img']['size'] > 0 ? uniqid() . $_FILES['article_img']['name'] : 'noimg.png';
        global $DBH;
        $data = array($img, $date);
        $STH = $DBH->prepare("INSERT INTO articles (img, created) values (?, ?)");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $lastID = $DBH->lastInsertId();

        foreach ($this->langs as $l) {
            $lang = $l['code'];
            $header = $_POST['header_'.$lang];
            $description = $_POST['desc_'.$lang];
            $data = array($lastID, $lang, $header, $description);

            $STH = $DBH->prepare("INSERT INTO article_dic (article_id, lang, header, info_text) values (?, ?, ?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        if ($_FILES['article_img']['size'] > 0) {
            move_uploaded_file($_FILES['article_img']["tmp_name"], "../img/articles/" . $img);
        }

        $this->redirect('?page=article');
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT articles.*, article_dic.header FROM articles
                              INNER JOIN article_dic on articles.id = article_dic.article_id
                              GROUP BY articles.id ORDER BY id DESC");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('articles', $result);
    }

    function editItem(){
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT articles.*, article_dic.* FROM articles
                              INNER JOIN article_dic on articles.id = article_dic.article_id
                              WHERE articles.id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('article', $result);
    }

    function edit(){
        $id = intval($_POST['id']);

        foreach ($this->langs as $l) {
            $lang = $l['code'];
            $header = $_POST['header_'.$lang];
            $description = $_POST['desc_'.$lang];

            $data = array($header, $description, $id, $lang);
            global $DBH;
            $STH = $DBH->prepare("UPDATE article_dic SET header=?, info_text=? WHERE article_id = ? AND lang = ?");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        $rand = uniqid();

        if ($_FILES['article_img']['size'] > 0) {
            $img = $rand . $_FILES['article_img']['name'];
            $STH = $DBH->prepare("SELECT * FROM articles WHERE id=$id");
            $STH->execute() or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();

            if ($result[0]['img'] != 'noimg.png') {
                $dir = "../img/articles/" . $result[0]['img'];
                unlink($dir);
            }

            $data = array("$img");
            $STH = $DBH->prepare("UPDATE articles SET img = ? WHERE id=$id");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            move_uploaded_file($_FILES['article_img']["tmp_name"],
                "../img/articles/" . $img);
        }

        $this->redirect('?page=article&action=editItem&id=' . $id);
    }

    function delete(){
        $id = $_GET['id'];
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM articles WHERE id=$id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        if ($result[0]['img'] != 'noimg.png') {
            $dir = "../img/articles/" . $result[0]['img'];
            unlink($dir);
        }
        $STH = $DBH->prepare("DELETE FROM articles where id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $STH = $DBH->prepare("DELETE FROM article_dic where article_id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $this->redirect('?page=article');
    }

}