<?php

class SliderCtrl extends Controller{

    function __construct(){

        parent::__construct();
        $this->get();
    }

    function set(){
        $img = $_FILES['slider_img']['size'] > 0 ? uniqid() . $_FILES['slider_img']['name'] : 'noimg.png';
        global $DBH;
        $data = array($img);
        $STH = $DBH->prepare("INSERT INTO slider (img) values (?)");
        $STH->execute($data) or die(print_r($STH->errorInfo(), true));

        $lastID = $DBH->lastInsertId();

        foreach ($this->langs as $l) {
            $lang = $l['code'];
            $description = $_POST['desc_'.$lang];
            $data = array($lastID, $lang, $description);

            $STH = $DBH->prepare("INSERT INTO slider_dic (slide_id, lang, description) values (?, ?, ?)");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        if ($_FILES['slider_img']['size'] > 0) {
            move_uploaded_file($_FILES['slider_img']["tmp_name"], "../img/slider/" . $img);
        }

        $this->redirect('?page=slider');
    }

    function get(){
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT slider.*, slider_dic.description FROM slider
                              INNER JOIN slider_dic on slider.id = slider_dic.slide_id
                              GROUP BY slider.id ORDER BY id DESC");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('slider', $result);
    }

    function editItem(){
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        global $DBH;
        global $smarty;
        $STH = $DBH->prepare("SELECT slider.*, slider_dic.* FROM slider
                              INNER JOIN slider_dic on slider.id = slider_dic.slide_id
                              WHERE slider.id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        $smarty->assign('slide', $result);
    }

    function edit(){
        $id = intval($_POST['id']); //echo $id; exit();

        foreach ($this->langs as $l) {
            $lang = $l['code'];
            $description = $_POST['desc_'.$lang];

            $data = array($description, $id, $lang);
            global $DBH;
            $STH = $DBH->prepare("UPDATE slider_dic SET description=? WHERE slide_id = ? AND lang = ?");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));
        }

        $rand = uniqid();

        if ($_FILES['slider_img']['size'] > 0) {
            $img = $rand . $_FILES['slider_img']['name'];
            $STH = $DBH->prepare("SELECT * FROM slider WHERE id=$id");
            $STH->execute() or die(print_r($STH->errorInfo(), true));
            $result = $STH->fetchAll();

            if ($result[0]['img'] != 'noimg.png') {
                $dir = "../img/slider/" . $result[0]['img'];
                unlink($dir);
            }

            $data = array("$img");
            $STH = $DBH->prepare("UPDATE slider SET img = ? WHERE id=$id");
            $STH->execute($data) or die(print_r($STH->errorInfo(), true));

            move_uploaded_file($_FILES['slider_img']["tmp_name"],
                "../img/slider/" . $img);
        }

        $this->redirect('?page=slider&action=editItem&id=' . $id);
    }

    function delete(){
        $id = $_GET['id'];
        global $DBH;
        $STH = $DBH->prepare("SELECT * FROM slider WHERE id=$id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $result = $STH->fetchAll();
        if ($result[0]['img'] != 'noimg.png') {
            $dir = "../img/slider/" . $result[0]['img'];
            unlink($dir);
        }
        $STH = $DBH->prepare("DELETE FROM slider where id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $STH = $DBH->prepare("DELETE FROM slider_dic where slide_id = $id");
        $STH->execute() or die(print_r($STH->errorInfo(), true));
        $this->redirect('?page=slider');
    }

}