<?php

class ColorsCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM color_scheme");
        $STH->execute()or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        global $smarty;
        $smarty->assign('colors', $result[0]);
    }


    function editColors(){
        $bg_color = $_POST['bg_color'];
        $hf_color = $_POST['hf_color'];
        $side_color = $_POST['side_color'];
        $main_color = $_POST['main_color'];
        $font_color = $_POST['font_color'];

        $data = array($bg_color, $hf_color, $side_color, $main_color, $font_color);
        global $DBH;
        $STH = $DBH->prepare("UPDATE color_scheme SET bg_color=?, hf_color=?, side_color=?, main_color=?, font_color=?");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $cssFile = fopen("../css/custom.css", "w") or die("Unable to open file!");
        $style = "body {background-color: $bg_color ;}
                .header {background-color: $hf_color ;}
                .footer {background-color: $hf_color ;}
                .content {background-color: $side_color ; color: $font_color;}
                .main, .letter-nav {background-color: $main_color ;}";

        fwrite($cssFile, $style);
        fclose($cssFile);

        $this->redirect('?page=colors');
    }

}