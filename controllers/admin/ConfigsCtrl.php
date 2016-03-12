<?php

class ConfigsCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM configs");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('articles', $result[0]);
    }

    function editConfigs(){
        $show = isset($_POST['slogan_show']) ? 1 : 0;
        $name = $_POST['site_name'];
        $slogan = $_POST['slogan_name'];
        $title = $_POST['site_title'];
        $keywords = $_POST['keywords'];
        $description = $_POST['description'];

        $data = array($name, $slogan, $show, $keywords, $description, $title);
        global $DBH;
        $STH = $DBH->prepare("UPDATE configs SET site_name=?, slogan_name=?, slogan_show=?, keywords=?, description=?, site_title=?");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        if(isset($_FILES['favicon'])){
            move_uploaded_file($_FILES['favicon']['tmp_name'], "../img/favicon.ico");
        }

        $this->redirect('?page=configs');
    }

    function editColors(){
        $bg_color = $_POST['bg_color'];
        $hf_color = $_POST['hf_color'];
        $side_color = $_POST['side_color'];
        $main_color = $_POST['main_color'];
        $font_color = $_POST['font_color'];

        $data = array($bg_color, $hf_color, $side_color, $main_color, $font_color);
        global $DBH;
        $STH = $DBH->prepare("UPDATE configs SET bg_color=?, hf_color=?, side_color=?, main_color=?, font_color=?");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $cssFile = fopen("../css/custom.css", "w") or die("Unable to open file!");
        $style = "body {background-color: $bg_color ;}
                .header {background-color: $hf_color ;}
                .footer {background-color: $hf_color ;}
                .content {background-color: $side_color ; color: $font_color;}
                .main, .letter-nav {background-color: $main_color ;}";

        fwrite($cssFile, $style);
        fclose($cssFile);

        $this->redirect('?page=configs');
    }

}