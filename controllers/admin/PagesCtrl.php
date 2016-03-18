<?php

class PagesCtrl extends Controller{
    function __construct(){

        parent::__construct();
        $this->get();
    }

    function set(){
        $position = $_POST['info_pos'];
        $data = array($position);
        global $DBH;
        $STH = $DBH->prepare("INSERT INTO pages (position) values (?)");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $lastID = $DBH->lastInsertId();

        foreach ($this->langs as $l){
            $lang = $l['code'];
            $header = $_POST['header_'.$lang];
            $desc = $_POST['desc_'.$lang];
            $data = array($lastID, $lang, $header, $desc);

            $STH = $DBH->prepare("INSERT INTO pages_dic (page_id, language, header, description) values (?,?,?,?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        $this->redirect('index.php?page=pages');
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT pages.*, pages_dic.header FROM pages
                              INNER JOIN pages_dic on pages.ID = pages_dic.page_id
                              GROUP BY pages.id ORDER BY ID DESC");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('pages', $result);
    }

    function editItem(){
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT pages.*, pages_dic.* FROM pages
                              INNER JOIN pages_dic on pages.ID = pages_dic.page_id
                              WHERE pages.ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('pageInfo', $result);
    }

    function edit(){
        $id = intval($_POST['id']);
        $position = $_POST['info_pos'];

        $data = array($position);
        global $DBH;
        $STH = $DBH->prepare("UPDATE pages SET position=? WHERE ID=$id");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        foreach ($this->langs as $l){
            $lang = $l['code'];
            $header = $_POST['header_'.$lang];
            $desc = $_POST['desc_'.$lang];
            $data = array($header, $desc, $id, $lang);

            $STH = $DBH->prepare("UPDATE pages_dic SET header = ?, description=? where page_id = ? AND language = ?");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        $this->redirect('?page=pages&action=editItem&id=' . $id);
    }

    function delete(){
        global $DBH;
        $id = $_GET['id'];
        $STH = $DBH->prepare("DELETE FROM pages_dic where page_id = $id");
        $STH->execute();
        $STH = $DBH->prepare("DELETE FROM pages where ID = $id");
        $STH->execute();
        $this->redirect('index.php?page=pages');
    }

}