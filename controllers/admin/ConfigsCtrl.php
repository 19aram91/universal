<?php

class ConfigsCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT configs.*, configs_dic.* FROM configs INNER JOIN configs_dic");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('conf', $result);
    }

    function editConfigs(){
        $show = isset($_POST['slogan_show']) ? 1 : 0;
        $showLogo = isset($_POST['slogan_show_logo']) ? 1 : 0;
        global $DBH;

        $STH = $DBH->prepare("UPDATE configs SET slogan_show=? WHERE id='1'");
        $STH->execute(array($show)) or die(print_r($STH->errorInfo(), true));

        $STH = $DBH->prepare("UPDATE configs SET slogan_show=? WHERE id='2'");
        $STH->execute(array($showLogo)) or die(print_r($STH->errorInfo(), true));

        foreach ($this->langs as $l){
            $lang = $l['code'];
            $name = $_POST['site_name_'.$lang];
            $slogan = $_POST['slogan_name_'.$lang];
            $title = $_POST['site_title_'.$lang];
            $keywords = $_POST['keywords_'.$lang];
            $description = $_POST['description_'.$lang];
            $data = array($name, $slogan, $keywords, $description, $title, $lang);
            $STH = $DBH->prepare("UPDATE configs_dic SET site_name=?, slogan_name=?, keywords=?, description=?, site_title=? WHERE lang =?");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        if(isset($_FILES['favicon'])){
            move_uploaded_file($_FILES['favicon']['tmp_name'], "../img/favicon.ico");
        }

        if(isset($_FILES['logo'])){
            $format = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['logo']['tmp_name'], "../img/logo/logo.".$format);
        }

        $this->redirect('?page=configs');
    }

}