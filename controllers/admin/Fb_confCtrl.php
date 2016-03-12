<?php

class Fb_confCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT * FROM fb_config");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('fb_conf', $result[0]);
    }

    function edit(){
        $lat = $_POST['lat'];
        $long = $_POST['long'];
        $contact = $_POST['contact'];

        $data = array($lat, $long, $contact);
        global $DBH;
        $STH = $DBH->prepare("UPDATE fb_config SET latitude=?, longitude=?, contact=?");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $this->redirect('?page=fb_conf');
    }

}