<?php

class PagesCtrl extends Controller{
    function __construct(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM configs");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('configs', $result[0]);

        $this->get();
    }

    function set(){
        $header = $_POST['info_header'];
        $description = $_POST['info_desc'];
        $position = $_POST['info_pos'];

        $data = array($header, $description, $position);
        global $DBH;
        $STH = $DBH->prepare("INSERT INTO pages (header, description, position) values (?, ?, ?)");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $this->redirect('index.php?page=pages');
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT * FROM pages ORDER BY ID DESC");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('pages', $result);
    }

    function editItem(){
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT * FROM pages WHERE ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('pageInfo', $result[0]);
    }

    function edit(){
        $id = intval($_POST['id']);
        $header = $_POST['info_header'];
        $description = $_POST['info_desc'];
        $position = $_POST['info_pos'];

        $data = array($header, $description, $position);
        global $DBH;
        $STH = $DBH->prepare("UPDATE pages SET header=?, description=?, position=? WHERE ID=$id");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $this->redirect('?page=pages&action=editItem&id=' . $id);
    }

    function delete(){
        global $DBH;
        $id = $_GET['id'];
        $STH = $DBH->prepare("DELETE FROM pages where ID = $id");
        $STH->execute();
        $this->redirect('index.php?page=pages');
    }

}