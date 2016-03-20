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

        foreach($result as $r){
            $texts[$r['language']] = $r['description'];
        }

        global $smarty;
        $smarty->assign('texts', $texts);
    }

    function edit(){
        global $DBH;
        $STH = $DBH->prepare("DELETE FROM main");
        $STH->execute() or die(print_r($STH->errorInfo(), true));

        foreach($this->langs as $l){
            $lang = $l['code'];
            $main = $_POST['main_'.$lang];
            $data = array($main, $lang);

            $STH = $DBH->prepare("INSERT INTO main(description, language) VALUES(?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }
        $this->redirect('index.php?page=main');
    }
}
