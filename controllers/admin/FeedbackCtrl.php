<?php

class FeedbackCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM feedback ORDER BY ID DESC");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('feedback', $result);
    }

    function delete(){
        $id = $_GET['id'];
        global $DBH;
        $STH = $DBH->prepare("DELETE FROM feedback where ID = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $this->redirect('?page=feedback');
    }
}
