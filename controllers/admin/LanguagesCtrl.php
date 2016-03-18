<?php

class LanguagesCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function set(){
        $code = $_POST['code'];
        $name = $_POST['name'];
        $rand = uniqid();
        $img = $_FILES['flag']['size'] > 0 ? $rand . $_FILES['flag']['name'] : 'flag.png';

        $data = array($code, $name, $img);
        global $DBH;
        $STH = $DBH->prepare("INSERT INTO languages (code, name, flag) values (?, ?, ?)");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        if ($_FILES['flag']['size'] > 0) {
            move_uploaded_file($_FILES['flag']["tmp_name"], "../img/flags/" . $img);
        }

        $this->redirect('?page=languages');
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT * FROM languages");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('languages', $result);
    }

    function delete(){
        $id = $_GET['id'];
        global $DBH;
        $STH = $DBH->prepare("DELETE FROM languages where id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $this->redirect('?page=languages');
    }

}