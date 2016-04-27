<?php
abstract class Controller{

    protected $langs;

    function __construct(){

        if(!$this->Auth()){
            global $smarty;
            $smarty->display('templates/login.tpl');
            exit();
        }

        $this->getConfigs();
        $this->getLanguages();
    }

    protected function getConfigs(){
        global $DBH;
        $STH = $DBH->prepare("SELECT configs.*, configs_dic.* FROM configs INNER JOIN configs_dic on configs_dic.lang = 'en'");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('configs', $result[0]);
    }

    protected function getLanguages(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM languages");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $this->langs = $STH->fetchAll();
        global $smarty;
        $smarty->assign('langs', $this->langs);
    }

    protected function redirect($route) {
        header("location: " . $route);
        exit();
    }

    protected function Auth() {
        return (isset($_SESSION['loged_in']));
    }
}