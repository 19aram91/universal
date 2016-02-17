<?php
abstract class Controller{

    function __construct(){

        if(!$this->Auth()){
            global $smarty;
            $smarty->display('templates/login.tpl');
            exit();
        }

        $this->getConfigs();
    }

    protected function getConfigs(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM configs");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('configs', $result[0]);
    }

    protected function redirect($route) {
        header("location: " . $route);
        exit();
    }

    protected function Auth() {
        return (isset($_SESSION['loged_in']));
    }
}