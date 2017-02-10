<?php

class Pages_menuCtrl extends Controller{
    function __construct(){

        parent::__construct();
        $this->get();
    }

    function addMenu(){
        $info_page = $_POST['info_page'];
        $page_parent_id = explode('|', $info_page);
        global $DBH;
        $parent = uniqid(rand(),false);
        foreach ($this->langs as $l){
            $lang = $l['code'];
            $header = $_POST['header_'.$lang];
            $desc = $_POST['desc_'.$lang];
            $data = array($page_parent_id[0], $lang, $header, $desc, $parent);
            $STH = $DBH->prepare("INSERT INTO pages_dic (page_id, language, header, description, parent_id) values (?,?,?,?,?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }
        $this->redirect('index.php?page=pages_menu');
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

    function changeOption(){
        global $DBH;
        global $smarty;
        $menu = $_POST['page_select'];
        $STH = $DBH->prepare("SELECT * FROM pages_dic WHERE page_id = $menu AND language = 'am'
                              GROUP BY pages_dic.id ORDER BY pages_dic.id DESC");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('pagesval', $result);
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
        global $DBH;
        foreach ($this->langs as $l){
            $lang = $l['code'];
            $header = $_POST['header_'.$lang];
            $desc = $_POST['desc_'.$lang];
            $header_update = $_POST['$header_update_'.$lang];
            $data = array($header, $desc, $header_update, $lang);

            $STH = $DBH->prepare("UPDATE pages_dic SET header = ?, description=? where parent_id = ? AND language = ?");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }
        $this->redirect('?page=pages_menu');
    }

    function delete(){
        global $DBH;
        $id = $_GET['id'];
        $STH = $DBH->prepare("DELETE FROM pages_dic where parent_id = $id");
        $STH->execute();
        $this->redirect('index.php?page=pages_menu');
    }

    function editMenu(){
        global $DBH;
        global $smarty;
        $id = $_GET['id'];
        $STH = $DBH->prepare("SELECT * FROM pages_dic WHERE parent_id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('pageedit', $result);
    }

}