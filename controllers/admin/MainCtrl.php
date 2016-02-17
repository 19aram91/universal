<?php

class MainCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM main");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('main_text', $result[0]);
    }

    function edit(){
        $description = $_POST['main_text'];
        global $DBH;
        $STH = $DBH->prepare("UPDATE main SET description=?");
        $STH->execute(array($description)) or die(print_r($STH->errorInfo(), true));
        $this->redirect('index.php?page=main');
    }
}
